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
createDatabase("contactform");

function createDBConnection(){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contactform";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die(" DataBase Connection failed: ".$conn->connect_error);
        }

       echo "$dbname connected successfully <br>";
        return $conn;
}
createDBConnection();

function createTable(){
    $conn = createDBConnection();
    $sql= "CREATE TABLE signup_data(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR (20) NOT NULL,
        email VARCHAR (30) NOT NULL,
        passwords VARCHAR (20) NOT NULL,
        cpasswords VARCHAR (20) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    createTable();

    function insertUserData($Username,$email,$passwords, $cpasswords) {
        $conn = createDBConnection();
        $sql = "INSERT INTO signup_data (Username, email ,passwords, cpasswords) 
        VALUES ('$Username', '$email','$passwords','$cpasswords')";
 
       
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
       //insertUserData('mahil', 'ssmahil1997@gmail.com', 'Aari13@@', 'Aari13@@');


       function getAllUserData(){
        $conn=createDBConnection();
        $sql="SELECT * FROM signup_data";
        $result = $conn->query($sql);

        //print_r($result);
        $signup_data = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $signup_data[] = $row;
            }
        } else {
            echo "There is no records in the table";
        }
        $conn->close();
        return $signup_data;
    }    
?>