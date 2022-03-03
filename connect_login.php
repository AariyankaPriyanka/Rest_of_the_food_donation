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

      // echo "$dbname connected successfully <br>";
        return $conn;
}
createDBConnection();

function createTable(){
    $conn = createDBConnection();
    $sql= "CREATE TABLE login_data(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR (30) NOT NULL,
        passwords VARCHAR (20) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    createTable();

    function insertUserData($email,$passwords) {
        $conn = createDBConnection();
        $sql = "INSERT INTO login_data (email ,passwords) 
        VALUES ('$email','$passwords')";

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
       //insertUserData('makiliny1997@gmail.com', 'maki13');
      

       function getAllUserData(){
        $conn=createDBConnection();
        $sql="SELECT * FROM login_data";
        $result = $conn->query($sql);

        //print_r($result);
        $login_data = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $login_data[] = $row;
            }
        } else {
            echo "There is no records in the table";
        }
        $conn->close();
        return $login_data;
    }    
?>