<?php
// Połączenie z bazą danych (zakładając, że masz już ustawione połączenie)
include('connect.php');

// Zapytanie SQL do pobrania maili
$stmt = $db->prepare("SELECT mail FROM newsletter");
$stmt->execute();
$emails = $stmt->fetchAll(PDO::FETCH_ASSOC);



$stmtt = $db->prepare("SELECT c.Id_klienta, c.Imie, c.Nazwisko, u.Email, c.Godziny_spotkania FROM clients c
                      JOIN users u ON c.Id_klienta = u.Id_klienta");
$stmtt->execute();
$firmData = $stmtt->fetchAll(PDO::FETCH_ASSOC);





?>