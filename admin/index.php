<?php
    require("../config.php");
    session_start();
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT * FROM users WHERE user_login = '$myusername'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if (password_verify($mypassword, $row['user_pass'])) {
            $_SESSION['login_user'] = $myusername;

            header("location: adminpage.php");
        }else {
            $error = "Your Login Name or Password is invalid";
         }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
        <link rel="shortcut icon" href="img/lege.ico" />
        <title>Admin</title>
        <script>
            $('.error-page').hide(0);

            $('.login-button , .no-access').click(function() {
                $('.login').slideUp(500);
                $('.error-page').slideDown(1000);
            });

            $('.try-again').click(function() {
                $('.error-page').hide(0);
                $('.login').slideDown(1000);
            });
        </script>
    </head>

    <body>
        <div class="login">
            <div class="login-header">
                <h1>Gitagum</h1>
            </div>
            <form action="" method="post">
                <div class="login-form">
                    <h3>Username:</h3>
                    <input type="text" name="username" placeholder="Username" /><br>
                    <h3>Password:</h3>
                    <input type="password" name="password" placeholder="Password" />
                    <br>
                    <input type="submit" value="Submit" class="login-button" />
                    <br>
                </div>
            </form>
        </div>
        <div class="error-page">
            <div class="try-again">Error: Try again?</div>
        </div>

    </body>

    </html>