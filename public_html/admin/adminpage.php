<?php
   include('session.php');
?>

<html>
<head>
    <title>Welcome </title>
</head>
<body>
    <h1>Welcome
        <?php echo $login_session; ?>
    </h1>
    <h2>
        <a href="places/">Add Edit Delete Places</a>
        <br>
        <a href="posts/">Add Edit Delete Posts</a>
        <br>
        <a href="events/">Add Edit Delete Events</a>
        <br>
        <a href="logout.php">Sign Out</a>
    </h2>
</body>
</html>