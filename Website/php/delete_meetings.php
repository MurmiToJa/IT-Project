<?php
// Połączenie z bazą danych (zakładając, że masz już ustawione połączenie)
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteMeetings'])) {
    $meetingsToDelete = $_POST['deleteMeetings'];

    foreach ($meetingsToDelete as $meetingId) {
        $stmt = $db->prepare("DELETE FROM clients WHERE Id_klienta = :id_klienta");
        $stmt->bindParam(':id_klienta', $meetingId);
        $stmt->execute();
    }

    header('Location: ../admin.php'); // Przekierowanie po usunięciu spotkań
}
?>
