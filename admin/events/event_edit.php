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
    <form action="event_editlogic.php" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <input type="hidden" name="old_file" value="<?php print $row['photo_file']; ?>" />
        Event Name: <input type="text" name="event_name" value="<?php print $row['event_name']; ?>">
        <br>
        Event Content: <input type="text" name="event_content" value="<?php print $row['event_content']; ?>">
        <br>
        Event Date: <input type="text" name="event_date" value="<?php print $row['event_date']; ?>">
        <br>
        <input type="file" name="file"><span><?php echo $row['photo_file']?></span>
        <input type="submit" value="Submit"> 
    </form>
</body>

</html>