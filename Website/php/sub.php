<?php
include 'connect.php';

if (isset($_POST['email'])) {
   
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Please provide a valid email address!');
    }
    
    $stmt = $pdo->prepare('SELECT * FROM subscribers WHERE email = ?');
    $stmt->execute([ $_POST['email'] ]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        exit('You\'re already a subscriber!');
    }
    
    $stmt = $pdo->prepare('INSERT INTO subscribers (email,date_subbed) VALUES (?,?)');
    $stmt->execute([ $_POST['email'], date('Y-m-d\TH:i:s') ]);
    
    exit('Thank you for subscribing!');
} else {
    
    exit('Please provide a valid email address!');
}
?>
