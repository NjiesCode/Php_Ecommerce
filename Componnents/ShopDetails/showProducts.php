<?php
include_once("connection.php");

// // Fetch the data
$sql = "SELECT * FROM `itemstable`";
$result = $conn->query($sql);
$data = $result->fetchAll(PDO::FETCH_ASSOC);

if ($data) {
    foreach ($data as $row) {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $row["id"] ."</td>";
        echo "<td>" . $row["productname"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
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
