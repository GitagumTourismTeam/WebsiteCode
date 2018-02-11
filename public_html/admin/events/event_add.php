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
        <form action="event_addlogic.php" method="post"> 
            Event Name: <input type="text" name="event_name">
            <br>
            Event Content: <input type="text" name="event_content">
            <br>
            Event Date: <input type="text" name="event_date">
            <br>
            <input type="submit" value="Submit"> 
        </form>
    </body>

    </html>