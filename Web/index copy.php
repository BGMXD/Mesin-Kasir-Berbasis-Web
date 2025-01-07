<?php
session_start();
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Web: Revenge Of The POS</title>
    <link rel="stylesheet" href="https://pyscript.net/snapshots/2024.9.2/core.css"/>
    <script type="module" src="https://pyscript.net/snapshots/2024.9.2/core.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/star-wars" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/new-gothic-style" rel="stylesheet">
</head>
<style>
</style>
<body>
    <header>
        <nav>
            <ul>
                <a href="index.php">
                    <li>home</li>
                </a>
                <a href="About Store/AboutStore.html">
                    <li>about store</li>
                </a>
                <a href="Creator/Creator.html">
                    <li>creator</li>
                </a>
            </ul>
        </nav>
    </header>
    <p class="menuText">
    Hello  <?php 
    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
    }
    ?>
    </p>
    <section class="hero">
        <div class="menuContainer">
            <a href="Menu/New Transaction/NewTransaction.html"><div class="menuStyleB">
                <img src="Image/new transaciton.png" alt=""></a>
                <p class="menuText">New Transaction</p>
            </div>
            <a href="Menu/Manage Stock/ManageStock.html"><div class="menuStyleA">
                <img src="Image/manage stock.png" alt=""></a>
                <p class="menuText">Manage Stock</p>
            </div>
            <a href="Menu/History/History.html"><div class="menuStyleB">
                <img src="Image/history transaction.png" alt="">
                <p class="menuText">History</p></a>
            </div>
            <a href="Menu/Calculator/Calculator.html"><div class="menuStyleA">
                <img src="Image/calculator.png" alt="">
                <p class="menuText">Calculator</p>
            </div></a>
        </div>
    </section>
        <a href="logout.php">
            <button class="logout">LogOut</button>
        </a>

</body>
</html>