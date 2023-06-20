<?php
include("./Database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit"])) {
        $productname = $_POST["productname"];
        $price = (float) $_POST["price"];
        $quantity = (int) $_POST["quantity"];

        $sql = "SELECT productname,price,quantity  FROM itemstable ";
        print_r($sql);

        $result = $conn->query($sql);

        var_dump($result);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($data) {
            foreach ($data as $row) {
                echo "<table>";
                echo "<tr>";
                echo "<td>" . $row["id"] ."</td>";
                echo "<td>" . $row["firstName"] . "</td>";
                echo "<td>" . $row["lastName"] . "</td>";
                echo "<td>" . $row["albums"] . "</td>";
                echo "</tr>";
                echo "</table>";
        
                // echo $row["id"] ."<br>";
                // echo $row["name"]."<br>";
                // echo $row["lastName"]."<br>";
                // echo $row["albums"]."<br>";
            }
        } else {
            echo "No results found";
        }
    }
}

?>