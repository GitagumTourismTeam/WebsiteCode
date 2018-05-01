<!-- 
    <Gitagum Website Source To make Gitagum Website Run>
    Copyright (C) 2018  <John Neijzen, Swello Lee, Isaiah Galorport, Fidel Ivan Racines, Jerome Bao, Joseph Barnido, Paul Simbajon>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
-->

<?php
    require("../config.php");
    session_start();
    $error = "";
	
	function verify_password_hash($strPassword, $strHash)
{
    if (function_exists('password_verify')) {
        // php >= 5.5
        $boolReturn = password_verify($strPassword, $strHash);
    } else {
        $strHash2 = crypt($strPassword, $strHash);
        $boolReturn = $strHash == $strHash2;
    }
    return $boolReturn;
}
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT * FROM users WHERE user_login = '$myusername'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if (verify_password_hash($mypassword, $row['user_pass'])) {
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