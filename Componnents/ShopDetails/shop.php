<?php
include_once("connection.php");

if (isset($_POST["submit"])) {

    $productname = $_POST["productname"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];


    $sql = " SELECT * FROM  itemstable ";

    print_r($sql);
    if ($result = $conn->query($sql)) {
        $result -> fetch_all(MYSQLI_ASSOC); 
        $result -> free_result();
        echo "Items Fetched SuccessFully";
    } else {
        echo "Items Could Not be Fetched";
    };
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../style.css">
    <title>MyShop</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>Contact</li>
                <li> Shop</li>
                <li>About</li>
                <li>SignUp</li>
        </ul>
        </nav>
    </header>
    <h1>Welcome To My Shop</h1>
    <br>
    <p>Please Take stop and check out Our Products</p>
    
    <form method="POST" action="index.php">
        <label>productname:
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
    <p>TotalPrice</p>
</body>

</html>