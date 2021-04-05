<?php
require "User.php";

$servername = "localhost";
$username = "root";
$password = "";
$db = "webpii";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $user1 = new User(99999, "Dummy", "Dummy");
} else {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            #print_r($row);
            $user1 = new User($row["UserID"], $row["Name"], $row["Surname"]);
        }
    } else {
        echo "0 results";
    }
}