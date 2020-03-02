<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=matthewadlam_assessment2020','matthewadlam','sBmP89XfKn7GFg');
}
    catch(PDOException $e) {
        echo 'Unable to connect to the databse server.';
        exit;
    }
?>