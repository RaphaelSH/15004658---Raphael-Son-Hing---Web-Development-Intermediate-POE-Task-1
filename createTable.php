<?php
    include 'DBConn.php';

    $drop_query = 'DROP TABLE IF EXISTS `test`.`tbl_user`';
    $create_query = 'CREATE TABLE `test`.`tbl_user` 
                            ( `ID` int(11) NOT NULL AUTO_INCREMENT, 
                            `FName` varchar(255) DEFAULT NULL, 
                            `LName` varchar(50) DEFAULT NULL, 
                            `email` varchar(255) DEFAULT NULL, 
                            `password` varchar(255) DEFAULT NULL, 
                            PRIMARY KEY (`ID`) ) ';
    $text_file = 'userData.txt';
  


    if(!file_exists($text_file)) 
    {
        die("File not found. Make sure you specified the correct path.");
    }
    mysqli_query($conn,$drop_query); // drop the table if it exists
    mysqli_query($conn,$create_query); //create the table
    $open = fopen($text_file,'r');

    while (!feof($open)) 
    {
        $getTextLine = fgets($open);
        $explodeLine = explode(",",$getTextLine);
       

        list($id, $FName, $LName, $Email, $Password) = $explodeLine;
        
        $qry = "INSERT INTO tbl_user (ID, FName,LName,email, password) VALUES ('".$id."','".$FName."','".$LName."','".$Email."','".$Password."')";
        mysqli_query($conn,$qry);
    }
     
    fclose($open);
    header("location: login.php");
exit;
?>
