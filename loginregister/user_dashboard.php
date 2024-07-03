<?php
include('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>
<link rel="stylesheet" href="style.css">

<h2>Welcome, <?php echo $username; ?></h2>
<p>This is your user dashboard.</p>
<a href="logout.php">Logout</a>
