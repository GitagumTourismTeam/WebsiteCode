<?php
    require('../session.php');

    $sql = "SELECT * FROM posts";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Posts Table
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- John CSS -->
    <link rel="stylesheet" href="../../css/JohnCssApi.css">
</head>
<body>
<table id="johnTable1">
        <tr>
            <th>Post Title</th>
            <th>Post Context</th>
            <th>Post Date</th>
            <th>Option</th>
            <th><a href="post_add.php">Add Post</a></th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["post_title"]. "</td>";
                    echo "<td>". $row["post_context"]. "</td>";
                    echo "<td>". $row["post_date"]. "</td>";
                    echo "<td>". '<a href="post_edit.php?id='.$row["id"].'">Edit</a>'. "<br>" .'<a href="post_delete.php?id='.$row["id"].'">Delete</a>'. "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>