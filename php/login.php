<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Page</title>
    <!-- ### Bootstrap ### -->
    <link rel="stylesheet" href="../style/bootstrap.css">
    <!-- ### Default CSS ### -->
    <link rel="stylesheet" href="../style/base.css">
    <!-- ### FONTS ### -->
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!-- ### JQuery ### -->
    <script src="script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <style>
        #login-form {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <?php
    session_start();
    require 'DatabaseStuff.php';
    $conn = createConnection();
    if(isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            session_reset();
            $_SESSION['username'] = $result['username'];
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['isAdmin'] = $result['admin'];

            header('Location: ../index.php');
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col text-center d-flex justify-content-center">
                <div id="login-form" class="">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="usernameInput" class="form-label header">
                                <h3>Username</h3>
                            </label>
                            <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" name="username" required>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label header">
                                <h3>Password</h3>
                            </label>
                            <input type="password" class="form-control" id="passwordInput" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">ENTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>