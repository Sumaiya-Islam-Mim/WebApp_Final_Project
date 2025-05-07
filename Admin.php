

<?php
include('db.php');
check_login();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - Bullet Journal</title>
    <style>
        body { font-family: Arial; background: #fff3e0; text-align: center; margin-top: 50px; }
        .container { padding: 20px; }
        .logout { margin-top: 20px; display: inline-block; background: #ff7043; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
        .logout:hover { background: #f4511e; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
        <p>This is your Bullet Journal dashboard.</p>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>
</ht