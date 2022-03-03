<?php
    include("connect_contact.php");
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $messages = $_POST["messages"];

    $id = insertUserData($fullname, $email, $messages);
   // echo "Id: $id, Full Name: $fullname, Email: $email, $messages: messages";

?> 