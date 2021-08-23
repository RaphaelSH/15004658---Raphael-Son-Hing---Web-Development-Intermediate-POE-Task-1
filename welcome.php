
<html>
    <head>
        <title>Welcome</title>

        <link href = "style.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color:#4F4F65;">
    <body>
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
</style>

<nav class="topnav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Testing</a>
    </div>
    
  <a href="welcome.php" class="w3-button w3-bar-item">Home</a>
  <a href="dead_end.php" class="w3-button w3-bar-item">Help</a>
  <a href="dead_end.php" class="w3-button w3-bar-item">About</a>
  <a href="Login.php" class="w3-button w3-bar-item">Login</a>
  <a href="register.php" class="w3-button w3-bar-item">Register</a>
  <img src="Logo.png" height="50" width="50">
  
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
    
    <section>
  <img class="mySlides" src="images/Slide1.jpg"
  style="width:100%">
  <img class="mySlides" src="images/Slide2.jpg"
  style="width:100%">
  <img class="mySlides" src="images/Slide3.jpg"
  style="width:100%">
</section>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>


    <div class="login">
            <form action = "login.php" method = "post">
            <h1>WELCOME</h1>
            <p>The day before yesterday I saw a rabbit, and yesterday I saw a deer, and today you.</p>
           
            <table style="margin-left:auto;margin-right:auto;">
              
            <tr>
                <td>
                
                  <td style="text-align:center"></td>
                  <div class = "control_font">

                        

                        <?php
                          session_start();
                          
                           echo "ID: ".$_SESSION["ID"]."<br>";
                           echo "First Name: ".$_SESSION["FName"]."<br>";
                           echo "Last Name: ".$_SESSION["LName"]."<br>";
                           echo "Email: ".$_SESSION["email"]."<br>";
                        ?>
                   </div>
                </td>
               
              </tr>
              <tr>
                      <img src="image.png" alt="Random Picture I put in" width="250" height="250">
         
                  <td>
                  <td style="text-align:center">
                  <a href="products.php"><img src="images/cart.png" height="75" width="75"></a>
                  </td>
</tr>


<p>
<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p>
</tr>


            </table>
            </div>

</html>


