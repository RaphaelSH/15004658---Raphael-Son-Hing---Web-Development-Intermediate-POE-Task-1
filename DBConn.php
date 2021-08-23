<?php
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn ->connect_error)
        {
            die("Database status: Connection failed: ".$conn->connect_error);
        }
        else
        {
            echo "Database status : Connected successfully";
        }
    ?>