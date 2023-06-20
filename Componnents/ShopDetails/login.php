
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
<?php include_once("./header.php") ?>
    <h1>Welcome To My Shop</h1>
    <br>
    <p>Please login and Proceed......</p>
    
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