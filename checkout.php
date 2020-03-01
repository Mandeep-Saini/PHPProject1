<!DOCTYPE html>
<?php

//Starting the session
session_start();
$_SESSION["error"]="";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
//Check for empty values    
if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]))
{

require ('mysqli_connect.php');
$firstname=mysqli_real_escape_string($dbc, $_POST['firstname']);    
$lastname=mysqli_real_escape_string($dbc, $_POST['lastname']);
    
    //check for the validation of session values
if(isset($_SESSION["productid"])&&isset($_SESSION["quant"]))
{
$productid=$_SESSION["productid"];
$quantity=($_SESSION["quantity"]);   
$quantity=$quantity-1;
$payment= $_POST['payment'];
    
//Insert the data to user table after checkout    
$query = "insert into users (FirstName,LastName,ProductId,Payment) values('$firstname','$lastname','$productid','$payment')";
$res = @mysqli_query($dbc,$query);
if($res) {
echo "Order Placed Successfully";
    
//Update the Product Table    
    
$updateQuery= "UPDATE bookinventory SET quantity=".$quantity." WHERE bookId=".$productid;
   
$res2 = @mysqli_query($dbc,$updateQuery);
if ($res2) {
 header('location:success.php');
} else {
   $_SESSION["error"]="Error";
}
    
} else {
   $_SESSION["error"]="Could not Place Order"; 
}   
}
   else
   {
      header('location:store1.php');
   }
}
    else{
        $_SESSION["error"]="Enter the Fields"; 
    }
}
?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookStore</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

</head>



<body>
    <!-- Note -->


    <!-- Header -->

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php"><img class="logo1" src="images/logo.png"></a>
        <a href="index.php">Home</a>
        <a href="bookStore.php">Books Store</a>
    </div>
    <main>
        <div class="row">

            <div class="side">
                <h1>CheckOut</h1>
                <div id="form-main">
                    <div id="form-div">
                        <form class="montform" action="checkout.php" method="POST" id="reused_form">
                            <h1>Cart Item</h1>
                            <p class="name">
                                <input name="firstname" type="text" class="feedback-input" placeholder="First Name" id="firstname" value="Product in Cart:  <?PHP echo $_SESSION["productname"]?>" readonly/>
                                <img src="images/<?PHP echo $_SESSION["image"]?>"/>
                            </p>
                            <p class="name">
                                <Label>First Name</Label>
                                <input name="firstname" type="text" class="feedback-input" id="firstname" />
                            </p>
                            <p class="name">
                                <Label>Last Name</Label>
                                <input name="lastname" type="lastname" required class="feedback-input" id="lastname" />
                            </p>
                            <p class="name">
                                <label class="name">Payment Type</label> </p>
                            <p class="name">
                                <input type="radio" id="male" name="payment" value="debit">
                                <label for="debit">Debit</label><br>
                                <input type="radio" id="female" name="payment" value="credit">
                                <label for="credit">Credit</label><br>
                            </p>
                            <p class="name">
                                <input name="paymentnumber" type="paymentnumber" required class="feedback-input" id="paymentnumber" placeholder="Credit/Debit Number" required />
                            </p>
                            <div class="error">
                                <div>

                                    <?PHP
                                        if(isset($_SESSION["error"])) 
                                           {
                                               echo "<p  class='name' style='color:red;'>".$_SESSION["error"]."</p>";
                                           }
                                    ?>



                                </div>
                            </div>
                            <div class="submit">
                                <input type="submit" class="button-blue" value="submit">
                                <div class="ease"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>

    </main>
    <footer class="main_footer">
        <div class="footer_center">
            <div>
                <p>Site Information :</p>
            </div>
            <div>
                <p>Address:</p>
                <p>Kitchener, ON</p>
            </div>

            <div>
                <p>Phone Number:</p>
                <p>+1 000 123456</p>
            </div>

            <div>
                <p>Email:</p>
                <p><a href="mailto:MandeepSaini@test.com">MandeepSaini@info.com</a></p>
            </div>

        </div>

    </footer>
</body>

</html>
