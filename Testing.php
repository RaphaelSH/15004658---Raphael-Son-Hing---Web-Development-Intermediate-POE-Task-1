
<!-- Things I am experimenting with, not incuded in main program-->
<html>
    <head>
        <title>Products Page</title>
        <link href = "products_style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="frame_design">
            <form action = "proucts.php" method = "post">
            <h1>PRODUCTS PAGE</h1>
            <table>
                 <tr>
                    <td>
                    <div class = "control_font">
                            Please enter the customer name:
                    </div>
                    </td>
                    <td>>

                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "input" name = 
                                    "txtCustomer" value = 
                                    <?php if(isset($_POST['txtCustomer'])) 
                                    echo $_POST['txtCustomer'];?> >
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class = "control_font">
                         Please enter the finished product purchased:
                    </div>
                    </td>
                    <td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                                    <input type = "input" name = 
                                    "txtProduct" value = 
                                    <?php if(isset($_POST['txtProduct'])) 
                                    echo $_POST['txtProduct'];?> >
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class = "control_font">
                            Please enter the product price:
                        </div>
                    </td>
                    <td>
                        <!-- STICK FORM -->
                        <div class = "control_font">
                            <input type = "input" name = "txtPrice" >
                        </div>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input type = "submit" name = "btnProcess" class = "button_style"
                        value = "PROCESS"><br>
                    </td>
                    <td>
                        <input type = "submit" name = "btnClear" class = "button_style"
                        value = "CLEAR"><br>
                    </td>
        </form>
        </div>
    </body>
</html>

<?php
    if (isset($_POST['btnProcess'])){
                        $customer = "";
                        $product = "";
                        $price = 0.0;
                        print "<br>PRODUCT ORDER REPORT<br>"
                        print "*************************************<br">;
                        if(!empty($_POST['txtCustomer'])){
                            $customer = $_POST['txtCustomer'];
                            print "CUSTOMER: $customer<br>";
                        }
                        if(!empty($_POST['txtProduct'])){
                            $customer = $_POST['txtProduct'];
                            print "PRODUCT: $product<br>";
                        }
                        if(!empty($_POST['txtPrice'])){
                            $customer = $_POST['txtPrice'];
                            print "PRICE: R $price<br>";
                        }
                        $vat = ($price * 014);
                        $total = ($prie +$vat);
                        print "VAT R: $vat<br>";
                        print "TOTAL R: $total<br>";
                        print "*************************************<br">;
                    }

            if(isset($_POST['btnClear'])){
                header('Location: products.php');
                exit();
            }
    ?>


