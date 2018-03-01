<?php
    include('../session.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM places where id='$id'";
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
    <form action="place_editlogic.php" method="post"> 
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <input type="hidden" name="old_file" value="<?php print $row['photo_file']; ?>" />
        Place Name: <input type="text" name="place_name" value="<?php print $row['place_name']; ?>">
        <br>
        Place Information: <input type="text" name="place_information" value="<?php print $row['place_information']; ?>">
        <br>
        Place Location: <input type="text" name="place_location" value="<?php print $row['place_location']; ?>">
        <br>
        <input type="file" name="file"><span><?php echo $row['photo_file']?></span>
        <input type="submit" value="Submit"> 
    </form>
</body>

</html>