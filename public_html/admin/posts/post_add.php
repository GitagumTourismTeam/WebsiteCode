<?php
    include('../session.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <form action="post_addlogic.php" method="post"> 
            Post Title: <input type="text" name="post_title">
            <br>
            Post Context: <input type="text" name="post_context">
            <br>
            Post Date: <input type="text" name="post_date">
            <br>
            <input type="submit" value="Submit"> 
        </form>
    </body>

    </html>