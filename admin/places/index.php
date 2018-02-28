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
        <a href="../places/" class="active">Places</a>
        <a href="../posts/">Posts</a>
        <a href="../events/">Events</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    </br>
    </br>
    </br>
    </br>
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