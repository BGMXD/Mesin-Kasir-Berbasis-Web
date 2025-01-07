<?php
include 'connect.php';

$host = "localhost";
$user = "root";
$pass = "";
$db = "starweb";

$dbConnection = new Connect($host, $user, $pass, $db);

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email = ?";
    $params = [$email];
    $result = $dbConnection->query($checkEmail, $params);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)";
        $params = [$firstName, $lastName, $email, $password];
        if ($dbConnection->query($insertQuery, $params) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $dbConnection->conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $params = [$email, $password];
    $result = $dbConnection->query($sql, $params);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}

// Tutup koneksi
$dbConnection->close();
?>
