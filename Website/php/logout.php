<?php
session_start();

// Zakończenie sesji
session_destroy();

// Przekierowanie na stronę logowania
header("Location: ../index.php");
exit();
?>