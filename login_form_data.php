<?php
    include("connect_login.php");
    $email = $_POST["email"];
    $passwords = $_POST["passwords"];

    $id = insertUserData($email, $passwords);
    //echo "Id: $id,Email: $email, passwords: $passwords";

?> 