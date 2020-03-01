<!DOCTYPE html>

<?PHP

//Setting the session value for the selected item
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //getting the value from query string
$productid = $_GET["id"];
$productquantity = $_GET["quant"];
$productimage = $_GET["image"];
$productname = $_GET["productname"];
$_SESSION["productid"]=$productid;
$_SESSION["quantity"]=$productquantity;
$_SESSION["image"]=$productimage;
$_SESSION["productname"]=$productname;
    header('location:checkout.php');
}
?>
<html>

<head>
    <title>BookStore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="top">

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php"><img class="logo1" src="images/logo.png"></a>
        <a href="index.php">Home</a>
        <a href="bookStore.php">Books Store</a>
    </div>
    <main>
        <div class="page-main">
            <h1></h1>
        </div>

        <!-- The flexible grid (content) -->
        <div class="featured">
            <h2>List Of Books</h2>
        </div>
        <div class="row">
            <div class="side">
                <table class="table">
                    <tr>
                    <?php

       require ('mysqli_connect.php');
       $query = "SELECT * FROM bookinventory";
       $res = @mysqli_query($dbc,$query);
       if(mysqli_num_rows($res) >0)
       {
           //Showing the list of items
          while($row = mysqli_fetch_assoc($res)) 
        {
        ?>
                     
                        <td>
                           <form method="post" action="bookStore.php?id=<?php echo $row['bookId']; ?>&quant=<?php echo $row['quantity']; ?>&image=<?php echo $row['image']; ?>&productname=<?php echo $row['bookName']; ?>">
                            <h5 class="h2"><?php echo $row['bookName']; ?></h5>
                            <div class="fakeimg"><img src="images/<?php echo $row['image']; ?>"></div>
                            <div class="fakeimg">
                               <h3>Quantity:</h3>
                            <?php echo $row['quantity']; ?>
                            
                                <h2>BUY NOW</h2>
                               <input type="submit" value="Add to Cart" class="btnAddAction" />
                            </div>
                            </form>
                        </td>
                   
         <?php
        }
       }
      ?>
                    </tr>
                    
                </table>
            </div>



        </div>
    </main>
    <!-- Footer -->
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
