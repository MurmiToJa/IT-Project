<?php
include 'main.php';

if (isset($_GET['email'], $_GET['code'])) {
    
    if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Please provide a valid email address!');
    }
    
    $stmt = $pdo->prepare('SELECT * FROM subscribers WHERE email = ?');
    $stmt->execute([ $_GET['email'] ]);
    $subscriber = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($subscriber) {
        
        if (sha1($subscriber['id'] . $subscriber['email']) == $_GET['code']) {
            
            $stmt = $pdo->prepare('DELETE FROM subscribers WHERE email = ?');
            $stmt->execute([ $_GET['email'] ]);
           
            exit('You\'ve successfully unsubscribed!');
        } else {
            exit('Incorrect code provided!');
        }
    } else {
        exit('You\'re not a subscriber or you\'ve already unsubscribed!');
    }
} else {
    exit('No email address and/or code specified!');
}
?>