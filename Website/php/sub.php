<?php
session_start();

include('connect.php'); 

$errors = array();
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Nieprawidłowy format adresu e-mail";
        }

       
        if (count($errors) == 0) {
           
            $stmt = $db->prepare("INSERT INTO newsletter (mail) VALUES(:email)");
            $stmt->bindParam(':email', $email);
			header('location: ../index.php');

            if ($stmt->execute()) {
                $success = "Adres e-mail został pomyślnie zapisany";
				header('location: ../index.php');
            } else {
                $errors[] = "Błąd podczas zapisywania adresu e-mail";
				header('location: ../index.php');
            }
        }
    }
}


$_SESSION['errors'] = $errors;
$_SESSION['success'] = $success;


 

?>
