<?php
include("./Database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit"])) {
        $productname = $_POST["productname"];
        $price = (float) $_POST["price"];
        $quantity = (int) $_POST["quantity"];

        $sql = "INSERT INTO itemstable (productname,price,quantity)
        VALUES('$productname', '$price', '$quantity')";
        print_r($sql);

        $result = $conn->query($sql);
        var_dump($result);
        if ($result) {

            echo "Items Inserted SuccessFully";
        } else {
            echo "Items Could Not be Inserted";
        };
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <link rel="stylesheet" href="./style.css">
    

</head>

<body>
   <?php 
   include_once("./header.php")
   
   ?>

    <h1 style="color:blue;text-align:center;">Welcome To MyShop</h1>
    <p style="color:white;text-align:center;">Please Take stop and check out Our Products</p>

    </div>

    <br>


    <form method="POST" action="index.php" style="color:black;text-align:center;">
        <label>Productname:
            <input type="text" name="productname">
        </label>
        <label>Price:
            <input type="price" name="price">
        </label>
        <label>Quantity:
            <input type="number" name="quantity">
        </label>
        <input type="submit" name="submit" id="submit">
    </form>
    <p style="color:white;text-align:center;">TotalPrice</p>
    <div class="MainDiv">
        <div>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>

        <div>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>

        <div>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>

    </div>
    <?php
    include "footer.php"
    ?>
</body>
</html>