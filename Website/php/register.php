<?php
session_start();

include('connect.php');

$email = "";
$errors = array();
$success = "";

if (isset($_POST['reg_user'])) {

    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($email)) {
        array_push($errors, "Email jest wymagany");
    }
    if (empty($password_1)) {
        array_push($errors, "Hasło jest wymagane");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Hasła nie pasują do siebie.");
    }

    $stmt = $db->prepare("SELECT * FROM users WHERE Email=:email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        array_push($errors, "Konto założone na dany mail już istnieje.");
    }

    if (count($errors) == 0) {
        // Brak błędów - wykonaj dalszą część kodu
        $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO users (Login, Haslo, Email) VALUES(:email, :password, :email)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now registered and logged in";
        $success = "Registration successful";
		
		
		$new_user_query = "SELECT Id_klienta FROM users WHERE Email='$email' LIMIT 1";
        $new_user_result = mysqli_query($db, $new_user_query);
        $new_user_data = mysqli_fetch_assoc($new_user_result);
        $id_klienta = $new_user_data['Id_klienta'];

        // Przypisz id_klienta do sesji
        $_SESSION['id_klienta'] = $id_klienta;
		
		
		
		
		 header('location: user.php');
		
    }else
    {
    $_SESSION['error'] = implode("<br>", $errors);
    $_SESSION['success'] = $success;
    }
}


?>
