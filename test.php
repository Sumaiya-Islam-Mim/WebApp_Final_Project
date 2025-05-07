<?php
$conn = mysqli_connect("localhost", "root", "", "bulletjournal");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "✅ Connected successfully to MySQL!";
?>