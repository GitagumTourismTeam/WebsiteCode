<?php
    include('../session.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM posts where id='$id'";
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
    <form action="post_editlogic.php" method="post"> 
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        Post Title: <input type="text" name="post_title" value="<?php print $row['post_title']; ?>">
        <br>
        Post Context: <input type="text" name="post_context" value="<?php print $row['post_context']; ?>">
        <br>
        Post Date: <input type="text" name="post_date" value="<?php print $row['post_date']; ?>">
        <br>
        <input type="submit" value="Submit"> 
    </form>
</body>

</html>