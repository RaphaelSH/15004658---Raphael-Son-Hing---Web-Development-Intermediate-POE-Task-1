<?php
    include 'DBConn.php';
?>

<html>
    <head>
        <title>Products Page</title>
        <link href = "style.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color:#4F4F65;">

<!-- Repeat Navigation of each page-->
<!-- Navigation -->
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
  
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
  

</style>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
td { 
	border: 1px solid #CCC;
	border-spacing: 0;
  width: 33%;
  text-align: center;
  height: 300px;
}
tr { 
	border: 1px solid #CCC;
	border-spacing: 0;
  padding: 14px 16px;
  

}

</style>

<nav class="topnav">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
   
  <a href="welcome.php" class="w3-button w3-bar-item">Home</a>
  <a href="dead_end.php" class="w3-button w3-bar-item">Help</a>
  <a href="dead_end.php" class="w3-button w3-bar-item">About</a>
  <img src="Logo.png" height="50" width="50">
  <a href="logout.php" class="btn btn-danger" >Sign Out of Your Account</a>

  
 </ul>
  </div>
</nav>
<!-- Footer -->
<footer class="navbar">
  <a href="dead_end.php" class="w3-button w3-bar-item"><img src="images/twitter.png" height="25" width="25"></a>
  <a href="dead_end.php"><img src="images/pinintrest.png" height="25" width="25"></a>
  <a href="dead_end.php"><img src="images/facebook.png" height="25" width="25"></a>
  <a href="dead_end.php"><img src="images/youtube.png" height="25" width="25"></a>
  <a href="dead_end.php"><img src="images/linkedin.png" height="25" width="25"></a>
  <a href="About.php" class="w3-button w3-bar-item">Raphael Son Hing - 1500458</a>
  

  </p>
</footer>
    <body >
        
        <div class="products">
            <form action = "products.php" method = "post">
            <h1>PRODUCTS PAGE</h1>
            <a href="invoice.php"><img src="images/checkout.png" height="75" width="250"></a>    

            <table style="margin-left:auto;margin-right:auto;">
                
            <tr>
                  <td style="background-color:#aaa; text-align: center; vertical-align: middle; width: 33%" >
                  
                  <table border='1'>
<?php
$tbl_name="tbl_Products";
$result = mysqli_query($conn, "SELECT * FROM tbl_Products")or die("Error: " . mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
$rows =  $num_rows/3;


for($i=1; $i<=$rows ; $i++)
{
    echo "<tr>";
    for($j=1; $j<=3; $j++)
    {
        while($row = mysqli_fetch_array($result))
        {
            echo
            ("<tr>"
            ."<td>"
            ."<div>"
            ."<img src = ".$row["product_img"].
            " height = 265px width = 190px /><br>"
            ."</div>"
            ."</td>"


            ."<td>"
             ."<div>"
        
             ."<p> <font color=blue font face='verdana' size='2pt'>Item ID:  ".$row["product_id"]."</font> </p><br>"
             ."<p><b><font font face='verdana' size='6pt'> ".$row["product_name"]." </font></b> </p><br>"
             ."<img src = images/AddCart.png height = 75px width = 125px /><br>"
             ."<p><b><font  font face='Ariel' size='5pt'> $".$row["price"]." </font></b> </p>"
            
             ."</div>"
             ."</td>"

             ."<td>"
             ."<div>"
        
             ."<p> <font font face='Ariel' size='2pt'> ".$row["product_descpit"]." </font> </p>"
            
             ."</div>"
             ."</td>"



             ."</tr>"
            );
        }
    }
    echo "</tr>";
}

mysqli_close($conn);
?>
</td>
</tr>
            </table>


            
        </form>

        </div>

    </body>

</html>




