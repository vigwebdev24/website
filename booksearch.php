<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <link rel="stylesheet" href="css/booksearch.css">
    <link rel="stylesheet" href="./css/home.css">
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
                            <h1>Book Search</h1>
                        </div>
                        <form class="loginform">
                            <div class="inputgroup">
                                <label for="username">Book Title</label>
                                <input type="text" id="username" name="username" placeholder="Enter name" required>
                            </div>
                            <div class="inputgroup">
                                <label for="password">Author Name</label>
                                <input type="password" id="password" name="password" placeholder="Enter name" required>
                            </div>
                            <div class="inputgroup">
                                <label for="password">Edition</label>
                                <input type="password" id="password" name="password" placeholder="Enter name" required>
                            </div>
                            <button type="submit" class="button_primary Ss-btn_txt">Search</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>    