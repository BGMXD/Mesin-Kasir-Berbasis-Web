<?php
session_start();
include 'connect.php';

$host = "localhost";
$user = "root";
$pass = "";
$db = "starweb";

$dbConnection = new Connect($host, $user, $pass, $db);
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
    <section>
    <p class="greetings">
        <!-- memanggil database "hello firstName lastName" -->
        <?php
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = "SELECT firstName, lastName FROM users WHERE email = ?";
        $params = [$email];
        $result = $dbConnection->query($query, $params);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo 'Hello ' . $row['firstName'] . ' ' . $row['lastName'];
            }
        } else {
            echo "User not found";
        }
    }

    $dbConnection->close();
    ?>
    </p>
    <p class="menuText" style="text-transform:none ;">Terimakasih sudah menggunakan website kami, silahkan pilih menu di bawah untuk melihat informasi lebih lanjut.</p>
        <div class="hero">
            <div class="menuContainer">
                <a href="Menu/New Transaction/NewTransaction.html">
                    <div class="menuStyleB">
                    <img src="Image/new transaciton.png" alt=""></a>
                    <p class="menuText">New Transaction</p>
                    </div>
                <a href="Menu/Manage Stock/ManageStock.html">
                    <div class="menuStyleA">
                    <img src="Image/manage stock.png" alt="">
                    <p class="menuText">Manage Stock</p>
                    </div>
                </a>
                <a href="Menu/History/History.html">
                    <div class="menuStyleB">
                    <img src="Image/history transaction.png" alt="">
                    <p class="menuText">History</p>
                    </div>
                </a>
                <a href="Menu/Calculator/Calculator.html">
                    <div class="menuStyleA">
                    <img src="Image/calculator.png" alt="">
                    <p class="menuText">Calculator</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
        <a href="logout.php">
            <button class="logout">LogOut</button>
        </a>
</body>
</html>