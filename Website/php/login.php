<?php
session_start();

include('connect.php');

$email = "";
$errors = array();
$success = "";

if (isset($_POST['login_user'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        array_push($errors, "Email jest wymagany");
    }
    if (empty($password)) {
        array_push($errors, "Hasło jest wymagane");
    }

    if (count($errors) == 0) {
        $stmt = $db->prepare("SELECT * FROM users WHERE Email=:email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
			if (password_verify($password, $user['Haslo'])) {
				$_SESSION['id_klienta'] = $user['Id_klienta'];
				$_SESSION['email'] = $email;

				// Sprawdź, czy użytkownik jest adminem
				$stmt_admin = $db->prepare("SELECT * FROM admins WHERE Id_klienta=:id_klienta");
				$stmt_admin->bindParam(':id_klienta', $_SESSION['id_klienta']);
				$stmt_admin->execute();
				$admin = $stmt_admin->fetch(PDO::FETCH_ASSOC);

				if ($admin && $admin['Id_klienta'] == $_SESSION['id_klienta']) {
					header('location: admin.php');
					exit(); // Upewnij się, że nie ma żadnych kolejnych operacji
				} else {
					header('location: user.php');
					exit(); // Upewnij się, że nie ma żadnych kolejnych operacji
				}
			} else {
				array_push($errors, "Nieprawidłowe hasło");
			}
		} else {
			array_push($errors, "Użytkownik o podanym emailu nie istnieje.");
		}

    }
  else{
    // Przypisanie komunikatów do sesji
    $_SESSION['error'] = implode("<br>", $errors);
    $_SESSION['success'] = $success;

  }
}



?>
