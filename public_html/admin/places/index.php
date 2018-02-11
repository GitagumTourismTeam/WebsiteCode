<?php
    require('../session.php');

    $sql = "SELECT * FROM places";
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
            <th>Place Name</th>
            <th>Place Information</th>
            <th>Place Location</th>
            <th>Option</th>
            <th><a href="place_add.php">Add Places</a></th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["place_name"]. "</td>";
                    echo "<td>". $row["place_information"]. "</td>";
                    echo "<td>". $row["place_location"]. "</td>";
                    echo "<td>". '<a href="place_edit.php?id='.$row["id"].'">Edit</a>'. "<br>" .'<a href="place_delete.php?id='.$row["id"].'">Delete</a>'. "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>