<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'topdrop';
    
    $db = new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
    );

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $balance = 0;
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $db->query("INSERT INTO `users`(`user_name`, `password`, `balance`) VALUES('$user_name', '$hashed_password', $balance)");

    $db->close();

    header('Location: index.php')

?>