<?php

function createMysqlConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
        die("Connection failed: ".$conn->coonect_error);
    }

    echo "phpMyAdmin Connected Successfully <br>";
    return $conn;
}
//createMysqlConnection();

function createDatabase($dbname){
    $conn = createMysqlConnection();
    $sql = "CREATE DATABASE $dbname";
    if($conn->query($sql)== TRUE)
        {
        echo "DataBase created Succesfully";
        }

}
//createDatabase("contactform");


function createDBConnection(){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contactform";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die(" DataBase Connection failed: ".$conn->connect_error);
        }

      // echo "$dbname connected successfully <br>";
        return $conn;
}
//createDBConnection();

function createTable(){
    $conn = createDBConnection();
    $sql= "CREATE TABLE contact_message(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR (20) NOT NULL,
        email VARCHAR (30) NOT NULL,
        messages VARCHAR (200) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    createTable();

    function insertUserData($fullname,$email,$messages) {
        $conn = createDBConnection();
        $sql = "INSERT INTO contact_message (fullname, email ,messages) 
        VALUES ('$fullname', '$email','$messages')";

        $insertId = 0;
        if ($conn->query($sql) == TRUE) {
            echo " User registration completed successfully <br>";
            //print_r($conn);
            $insertId = $conn->insert_id;
        } else {
            echo "Error: ".$conn->error;
        }
        $conn->close();
        return $insertId;
    }
      // insertUserData('Aariyanka', 'sspriyanka1997@gmail.com', 'hi,hello vanakkam');
      
      
      function getAllUserData(){
        $conn=createDBConnection();
        $sql="SELECT * FROM contact_message";
        $result = $conn->query($sql);

        //print_r($result);
        $contact_message = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $contact_message[] = $row;
            }
        } else {
            echo "There is no records in the table";
        }
        $conn->close();
        return $contact_message;
    }        

?>