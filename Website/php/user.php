<?php
session_start();

include('connect.php');

$errors = array();
$success = "";

if (isset($_POST['reg_user'])) {

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $godziny_spotkania = $_POST['contactTime']; // Zmieniłem to na zgodne z nazwą w formularzu

    // Pobranie id_klienta z sesji (upewnij się, że jest zalogowany użytkownik)
    if (isset($_SESSION['id_klienta'])) {
        $id_klienta = $_SESSION['id_klienta'];

        // Sprawdzenie, czy klient o danym ID już istnieje w tabeli clients
        $stmt_check = $db->prepare("SELECT * FROM clients WHERE Id_klienta = :id_klienta");
        $stmt_check->bindParam(':id_klienta', $id_klienta);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            // Aktualizacja danych klienta
            $stmt_update = $db->prepare("UPDATE clients SET Imie = :imie, Nazwisko = :nazwisko, Telefon = :telefon, Godziny_spotkania = :godziny_spotkania WHERE Id_klienta = :id_klienta");
            $stmt_update->bindParam(':imie', $imie);
            $stmt_update->bindParam(':nazwisko', $nazwisko);
            $stmt_update->bindParam(':telefon', $telefon);
            $stmt_update->bindParam(':godziny_spotkania', $godziny_spotkania);
            $stmt_update->bindParam(':id_klienta', $id_klienta);
            $stmt_update->execute();

            $success = "Dane zostały pomyślnie zaktualizowane.";
        } else {
            // Wstawienie nowego klienta
            $stmt_insert = $db->prepare("INSERT INTO clients (Id_klienta, Imie, Nazwisko, Telefon, Godziny_spotkania) VALUES(:id_klienta, :imie, :nazwisko, :telefon, :godziny_spotkania)");
            $stmt_insert->bindParam(':id_klienta', $id_klienta);
            $stmt_insert->bindParam(':imie', $imie);
            $stmt_insert->bindParam(':nazwisko', $nazwisko);
            $stmt_insert->bindParam(':telefon', $telefon);
            $stmt_insert->bindParam(':godziny_spotkania', $godziny_spotkania);
            $stmt_insert->execute();

            $success = "Dane zostały pomyślnie zapisane.";
        }
    } else {
        $errors[] = "Błąd: Niezidentyfikowany użytkownik.";
    }
}

// Przypisanie komunikatów do sesji
$_SESSION['errors'] = $errors;
$_SESSION['success'] = $success;

// Przekierowanie po zakończeniu operacji
?>
