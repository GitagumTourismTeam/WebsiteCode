<?php
    require('../session.php');

    $sql="SELECT * FROM file_system";
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
        <a href="../events/">Events</a>
        <a href="../downloadables/" class="active">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    <table id="johnTable1">
        <tr>
            <th>File Nickname</th>
            <th>File Name</th>
            <th>File Type</th>
            <th>File Size</th>
            <th>Department</th>
            <th>Date Time</th>
            <th>Option</th>
            <th><a href="downloadables_add.php">Add Downloadables</a></th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>";
                    if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
                        echo '<img src="../icon/xlsx.png">';
                    }
                    if($row['file_type'] == 'application/pdf'){
                        echo '<img src="../icon/pdf.png">';
                    }
                    if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'){
                        echo '<img src="../icon/doc.png">';
                    }
                    if($row['file_type'] == 'image/png'){
                        echo '<img src="../icon/png.png">';
                    }
                    if($row['file_type'] == 'image/jpeg'){
                        echo '<img src="../icon/jpg.png">';
                    }
                    echo '<a href="../../uploads/'.$row['file_location'].'" target="_blank" download>'.$row["file_name"]. "</a>" . "</td>";
                    echo "<td>" .$row["file_location"]. "</td>";
                    echo "<td>" .$row["file_type"]. "</td>";
                    echo "<td>". $row["file_size"]. "</td>";
                    echo "<td>". $row["department"]. "</td>";
                    echo "<td>". $row["file_date"]. "</td>";
                    echo "<td>".'<a href="downloadables_delete.php?id='.$row["id"].'">Delete</a>'. "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>