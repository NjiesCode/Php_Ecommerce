<?php
include_once("connection.pph");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
   

if (empty($_POST["submit"])) {
   
} 

if(empty($_POST["name"])){
    $name_err="Please Enter Your Name";
  
}
if(empty($_POST["name"])){
    $email_err="Please Enter Your Email";
  
}

// if (isset($_POST["submit"])) {
//     $name=$_POST["name"];
//     $email=$_POST["email"];
// }
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="mainContainer">

    <form method="POST" action="index.php" onSubmit={handleSubmit}>
        <label for="">
            <input type="text" name="name">
        </label>
        <span><?php if(isset($name_err)) echo $name_err;?></span>
        <label for="">
            <input type="text" name="email">
        </label>
        <span><?php if(isset($email_err))echo $email_err;?></span>

        <input type="submit" name="submit">
    </form>
    </div>
    
    <?php echo $name ?>
</body>
</html>