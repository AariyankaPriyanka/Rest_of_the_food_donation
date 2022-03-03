<?php
    include("connect_signup.php");
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $passwords = $_POST["passwords"];
    $cpasswords = $_POST["cpasswords"];

    $id = insertUserData($Username, $email, $passwords, $cpasswords);
    //echo "Id: $id, User Name: $Username, Email: $email, Passwords: $passwords, Cpasswords: $cpasswords" ;

?> 