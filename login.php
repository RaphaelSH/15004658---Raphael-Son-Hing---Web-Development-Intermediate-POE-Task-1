<?php
    include 'DBConn.php';

    session_start();
?>
<html>
    <head>
        <title>Login Page</title>
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
    <body >
      <div class="login">
            <form action = "login.php" method = "post">
            <h1>LOGIN PAGE</h1>
            <p>Please fill in your credentials to login.</p>
           
            <table style="margin-left:auto;margin-right:auto;">
              
            <tr>
                <td>
                  <td style="text-align:center"></td>
                  <div class = "control_font">
                        Please Enter email:
                   </div>
                </td>
                <td>
                  <td style="text-align:center"></td>
                        <!-- STICK FORM -->
                    <div class = "control_font">
                        <input type = "text" placeholder="Enter email" name = 
                                    "txtEmail"><br />
                    </div>
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
                                    <input type = "password" placeholder="Enter Password" name = 
                                    "txtPassword" ><br />
                        </div>
                    </td>
              </tr>
     
            


              <tr>
                <td>
                
                    <input type = "submit" value = "Login" name = "btnLogin"  class = "button_style">
                        
                </td>
              </tr>
            </table>

          
            <table style="margin-left:auto;margin-right:auto;">
               
                  <tr>
                    <td>
                      <div class = "control_font">
                        <label >
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class = "control_font">
                        <a href="register.php">Need to register?</a></span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class = "control_font">
                        <a href="dead_end.php">Forgot password?</a></span>
                      </div>
                    </td>
                  </tr>
                      <img src="image.png" alt="Random Picture I put in" width="250" height="250">
                  </tr>
                 
            </table>
            </form>
      </div>
    </body>
</html>


<?php
    if (isset($_POST['btnLogin']))
    {
        $sql = "SELECT * FROM tbl_User";
        $result = $conn->query($sql);

        print "<br><b><u> CURRENT CUSTOMERS: </u></b><br>";

        if ($result->num_rows > 0)
        {
            //output data of each row
            while($row = $result->fetch_assoc())
            {
              $email1 = $_POST['txtEmail'];
              $email2 = $row['email'];
              $password1= $_POST['txtPassword'];
              $password2= $row['password'];
              $password= md5($password1);
              $check = 0;

              $id = $row["ID"];
              $fname = $row["FName"];
              $lname = $row["LName"];




              if ($email1 = $email2)
              {
                $check +=1;
              }
              else
              {
                $check =0;
              }
              if ($password = $password2)
              {
                $check +=1;
              }
              else
              {
                $check =0;
              }
              if ($check = 2)
              {
                $_SESSION['ID']= $id;
                $_SESSION['email']= $email1;
                $_SESSION["FName"]= $fname;
                $_SESSION["LName"]= $lname;

              }

            }
        }
        else
        {
            echo "No such person found in the database";
        }
        if ($_SESSION['FName'] == '')
        {
          echo '<script>alert("You have entered invalid details!")</script>';

        }
        else
        {

            echo '<script>alert("login successful")</script>';

        }

        $conn->close();




      }
      if (!isset($_SESSION['FName']))
      
        {
          
          header('Location: welcome.php');
          exit;
        }

   
?>



