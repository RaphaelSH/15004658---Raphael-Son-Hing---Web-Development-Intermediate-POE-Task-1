<?php
    include 'DBConn.php';

    $drop_query = 'DROP TABLE IF EXISTS `test`.`tbl_Products`';
    $create_query = 'CREATE TABLE `test`.`tbl_Products` 
                            ( `product_id` int(11) NOT NULL AUTO_INCREMENT, 
                            `product_name` varchar(255) DEFAULT NULL, 
                            `product_descpit` varchar(2000) DEFAULT NULL, 
                            `product_img` varchar(255) DEFAULT NULL, 
                            `price` DECIMAL(6,2) DEFAULT NULL, 
                            PRIMARY KEY (`product_id`) ) ';
    $text_file = 'item.txt';
  


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
        $explodeLine = explode(";",$getTextLine);
       

        list($id, $Name, $Descript, $Image, $Price) = $explodeLine;
        
        $qry = "INSERT INTO tbl_Products (product_id, product_name,product_descpit,product_img, price) VALUES ('".$id."','".$Name."','".$Descript."','".$Image."','".$Price."')";
        mysqli_query($conn,$qry);
    }
     
    fclose($open);
    header("location: login.php");
    exit;
?>
