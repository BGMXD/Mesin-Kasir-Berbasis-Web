<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://pyscript.net/snapshots/2024.9.2/core.css"/>
        <script type="module" src="https://pyscript.net/snapshots/2024.9.2/core.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/star-wars" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/new-gothic-style" rel="stylesheet">
</head>
<body>
    <div class="menubar">
        <header>
            <nav>
                <ul>
                    <a href="../index.html"><li>home</li></a>
                    <a href="About Store/AboutStore.html"><li>about store</li></a>
                    <a href="Creator/Creator.html"><li>Creator</li></a>
                </ul>
            </nav>
        </header>
    </div>
    <div class="container" id="signUp" style="display:none ;">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <i class="fas  fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign-Up" name="signUp">
        </form>
        <p class="or">
            ---------or---------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Accout?</p>
            <button id="signInButton">sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="" method="post">

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign-In" name="signIn">
        </form>
        <p class="or">
            ---------or---------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have Account Yet?</p>
            <button id="signUpButton">sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>