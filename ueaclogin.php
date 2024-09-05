<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginpage.css">
</head>
<body>
    <?php include_once 'navbar.php'?>
    <div class="container">
        <div class="newstudent-div-space">
            <div class="main-content">  
                <div class="left-section">
                    <div class="image-container">
                        <img src="assets//images//library.png" alt="Library">
                    </div>
                </div>
                <div class="right-section">
                        <div class="welcome-text">
                            <h1>Welcome</h1>
                            <h2>LOG IN</h2>
                        </div>
                        <form class="loginform">
                            <div class="inputgroup">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="10001" required>
                            </div>
                            <div class="inputgroup">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="button_primary Ss-btn_txt">Log in</button>
                        </form>
                        <div class="links">
                            <p>Don't have an account? <a href="#"><span>Sign Up <img src="assets/svgicons/outwardarrow_brown.svg" alt=""></span></a></p>
                            <a href="#">Forgot Password?</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>    