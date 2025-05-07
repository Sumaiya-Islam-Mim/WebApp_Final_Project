<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $conn = new mysqli("localhost", "root", "", "bullet-journal");

    if ($conn->connect_error) {
        throw new Exception("Could not connect to database.");
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "<h3 style='color:green;'>✅ Login successful!</h3>";
            // Or redirect: header("Location: dashboard.html");
        } else {
            header("Location: login.html?error=wrongpass");
            exit();
        }
    } else {
        header("Location: login.html?error=noaccount");
        exit();
    }

} catch (Exception $e) {
    header("Location: login.html?error=db");
    exit();
}
?>



