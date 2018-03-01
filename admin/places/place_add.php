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
        <form action="place_addlogic.php" method="post" enctype="multipart/form-data"> 
            Place Name: <input type="text" name="place_name">
            <br>
            Place Information: <input type="text" name="place_information">
            <br>
            Place Location: <input type="text" name="place_location">
            <br>
            <input type="file" name="file" />
            <input type="submit" value="Submit"> 
        </form>
    </body>

    </html>