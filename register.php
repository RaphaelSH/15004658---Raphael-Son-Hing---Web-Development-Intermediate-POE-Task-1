<?php
    include 'DBConn.php';
?>

<html>
    <head>
        <title>Register Page</title>
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
  <a href="dead_end.php" class="w3-button w3-bar-item">Register</a>
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
    <body >
        
        <div class="login">
            <form action = "register.php" method = "post">
            <h1>Products</h1>
            <table>
                
            <tr>
                    <td>
                    <td style="text-align:center"></td>
                    <div class = "control_font">
                        Please enter First Name:
                    </div>
                    </td>
                    <td>
                    <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "text" placeholder="Enter first name here"  name = 
                                    "txtFName" required>
                        </div>
                    </td>
                </tr> 
                <tr>
                  <td>
                  <td style="text-align:center"></td>
                    <div class = "control_font">
                        Please enter Last name:
                    </div>
                    </td>
                  <td>
                  <td style="text-align:center"></td>
                         <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "text" placeholder="Enter telephone number here"  name = 
                                    "txtLName" required>
                        </div>
                    </td>
                    </td>
              </tr>
             
              <tr>
                  <td>
                  <td style="text-align:center"></td>
                    <div class = "control_font">
                        Please enter Email :
                    </div>
                    </td>
                  <td>
                  <td style="text-align:center"></td>
                         <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "text" placeholder="Enter email here"  name = 
                                    "txtEmail" required>
                        </div>
                    </td>
                    </td>
              </tr>
              <tr>
                  <td>
                  <td style="text-align:center"></td>
                    <div class = "control_font">
                         Please enter password:
                    </div>
                  </td>
                  <td>
                  <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "password" placeholder="Enter Password here"  name = 
                                    "txtPassword1" required>
                        </div>
                        </td>
                    </td>
              </tr>
                <tr>
                    <td>
                    <td style="text-align:center"></td>
                    <div class = "control_font">
                         Please confirm password again:
                    </div>
                    </td>
                    <td>
                    <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "password" placeholder="Enter Password here" name = 
                                    "txtPassword2" required >
                        </div>
                    </td>
                </tr>
  
            </table>

            <table style="margin-left:auto;margin-right:auto;">
                <tr>
                <tr style="text-align:center"></td>
                    <td>
                        <input type = "submit" name = "btnRegister" class = "button_style" 
                        value = "Register"><br> 
                    </td>
                   
            </table>
            <table style="margin-left:auto;margin-right:auto;">
                    <td>
                      <div class = "control_font">
                        <a href="login.php">Already have an account?</a></span>
                      </div>
                    </td>
                  </tr>
            </table>
            <img src="image.png" alt="Random Picture I put in" width="250" height="250">


            
        </form>
        </div>
    </body>
</html>

<?php

  if (isset($_POST['btnRegister']))
    {
        $id = rand(1,1000);
        $fname = $_POST['txtFName'];
        $lname = $_POST['txtLName'];
        $email = $_POST['txtEmail'];
        $password1 = $_POST['txtPassword1'];
        $password2 = $_POST['txtPassword2'];
        $password = md5($password1);

        
       

        if($password1 == $password2)
        {
          $sql = "INSERT INTO tbl_User (ID, FName, LName, 
          Email, Password)
  VALUES ($id, '$fname', '$lname', '$email', '$password')";
        }
        else
        {
          echo '<script>alert("The Passwords you have entered do not match")</script>';
        }
   
    
        if ($conn->query($sql) == TRUE)
        {
            echo '<script>alert("Register Successful!")</script>';
      exit;
        }
        else
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();
  }

?>


