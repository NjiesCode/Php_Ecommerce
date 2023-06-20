
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
    <p>Please Register and login.....</p>
    
    <form method="POST" action="index.php">
        <label>Name:
            <input type="text" name="productname">
        </label>
       
        <label>Email:
            <input type="text" name="email">
        </label>

        <label>password:
            <input type="password" name="password">
        </label>
        <input type="submit" name="submit" id="submit">
    </form>
    <p>Name</p>
</body>

</html>