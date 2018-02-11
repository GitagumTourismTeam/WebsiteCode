<?php
    require('../session.php');

    $sql = "SELECT * FROM events";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Places Table
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- John CSS -->
    <link rel="stylesheet" href="../../css/JohnCssApi.css">
</head>
<body>
<table id="johnTable1">
        <tr>
            <th>Event Name</th>
            <th>Event Content</th>
            <th>Event Date</th>
            <th>Option</th>
            <th><a href="event_add.php">Add Places</a></th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["event_name"]. "</td>";
                    echo "<td>". $row["event_content"]. "</td>";
                    echo "<td>". $row["event_date"]. "</td>";
                    echo "<td>". '<a href="event_edit.php?id='.$row["id"].'">Edit</a>'. "<br>" .'<a href="event_delete.php?id='.$row["id"].'">Delete</a>'. "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>