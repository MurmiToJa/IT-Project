<?php
session_start();

// Połączenie z bazą danych (zakładając, że masz już ustawione połączenie)
include('connect.php');

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['id_klienta'])) {
    // Jeśli nie jest zalogowany, przenieś go na stronę logowania
    header('location: login.php');
    exit(); // Upewnij się, że nie ma żadnych kolejnych operacji
}

// Sprawdzenie, czy zalogowany użytkownik jest administratorem
$stmt_admin = $db->prepare("SELECT * FROM admins WHERE Id_klienta=:id_klienta");
$stmt_admin->bindParam(':id_klienta', $_SESSION['id_klienta']);
$stmt_admin->execute();
$admin = $stmt_admin->fetch(PDO::FETCH_ASSOC);

if (!$admin || $admin['Id_klienta'] !== $_SESSION['id_klienta']) {
    
    header('location: login.php');
    
}else{
$stmt = $db->prepare("SELECT mail FROM newsletter");
$stmt->execute();
$emails = $stmt->fetchAll(PDO::FETCH_ASSOC);



$stmtt = $db->prepare("SELECT c.Id_klienta, c.Imie, c.Nazwisko, u.Email, c.Godziny_spotkania FROM clients c
                      JOIN users u ON c.Id_klienta = u.Id_klienta");
$stmtt->execute();
$firmData = $stmtt->fetchAll(PDO::FETCH_ASSOC);
}


?>
