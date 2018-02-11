<?php
    include('../session.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM events where id='$id'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
    <form action="event_editlogic.php" method="post"> 
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        Event Name: <input type="text" name="event_name" value="<?php print $row['event_name']; ?>">
        <br>
        Event Content: <input type="text" name="event_content" value="<?php print $row['event_content']; ?>">
        <br>
        Event Date: <input type="text" name="event_date" value="<?php print $row['event_date']; ?>">
        <br>
        <input type="submit" value="Submit"> 
    </form>
</body>

</html>