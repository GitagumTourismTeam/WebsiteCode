<?php
    require('../session.php');

    $sql = "SELECT * FROM events";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Places Table
    </title>

    <!-- John CSS -->
    <link rel="stylesheet" href="../css/JohnCssApi.css">
    <link rel="stylesheet" type="text/css" href="../css/Istyle.css">

</head>
<body>
    <div class="navbar" id="navibar">
        <div class="navbarlogo">
            <img src="../img/LOGO.png">
            <h1>Gitagum Admin Page</h1>
        </div>
        <a href="#dummy" class="dummy"></a>
        <a href="../adminpage.php">Home Page</a>
        <a href="../places/">Places</a>
        <a href="../posts/">Posts</a>
        <a href="../events/" class="active">Events</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    <!-- Table -->
    <table id="johnTable1">
        <tr>
            <th>Event Name</th>
            <th>Event Content</th>
            <th>Event Date</th>
            <th>Photo File</th>
            <th>Option</th>
            <th><a href="event_add.php">Add Event</a></th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["event_name"]. "</td>";
                    echo "<td>". $row["event_content"]. "</td>";
                    echo "<td>". $row["event_date"]. "</td>";
                    echo "<td>". $row["photo_file"]. "</td>";
                    echo "<td>". '<a href="event_edit.php?id='.$row["id"].'">Edit</a>'. "<br>" .'<a href="event_delete.php?id='.$row["id"].'">Delete</a>'. "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>