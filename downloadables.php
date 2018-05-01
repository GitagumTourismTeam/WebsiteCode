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
    require("config.php");
    $department = $_GET['id'];
    $cssclass = 'class="current"'; 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gitagum-Downloads</title>
    <link rel="stylesheet" type="text/css" href="css/downlow.css">
    <link rel="shortcut icon" href="img/lege.ico" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        function callOut() {
            var x = document.getElementById("navibar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

</head>

<body>
    <div class="navbar" id="navibar">
        <div class="navbarlogo">
            <img src="img/LOGO.png">
            <h1>Gitagum</h1>
        </div>
        <a href="#dummy" class="dummy"></a>
        <a href="index.php">Home</a>
        <a href="tourism.php">Tourism</a>
        <a href="announcements.php">News & Events</a>
        <a href="About.php">About</a>
        <a href="downloadables.php?id=1" class="active">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>

    <div class="sidenav">
        <nav>
            <ul>
                <li <?php echo ($department == '1') ? $cssclass : "" ?>><a href="downloadables.php?id=1"><span>Department</span><span>1</span></a></li>
                <li <?php echo ($department == '2') ? $cssclass : "" ?>><a href="downloadables.php?id=2"><span>Department</span><span>2</span></a></li>
                <li <?php echo ($department == '3') ? $cssclass : "" ?>><a href="downloadables.php?id=3"><span>Department</span><span>3</span></a></li>
                <li <?php echo ($department == '4') ? $cssclass : "" ?>><a href="downloadables.php?id=4"><span>Department</span><span>4</span></a></li>
                <li <?php echo ($department == '5') ? $cssclass : "" ?>><a href="downloadables.php?id=5"><span>Department</span><span>5</span></a></li>
            </ul>
        </nav>
    </div>
    <div class="downcontent">
        <div class="main">
            <?php
                $sql="SELECT * FROM file_system where department='$department'";
                $result = mysqli_query($db, $sql);
                while($row=mysqli_fetch_array($result))
                {
            ?>
            <div class="widget">
                <a href="uploads/<?php echo $row['file_location'] ?>" target="_blank" download>
                    <div class="title"><?php echo $row['file_name'] ?></div>
                    <div class="chart">
                    <?php 
                        if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'){
                            echo '<img src="icon/doc.png">';
                        }
                        if($row['file_type'] == 'application/pdf'){
                            echo '<img src="icon/pdf.png">';
                        }
                        if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
                            echo '<img src="icon/xlsx.png">';
                        }
                        if($row['file_type'] == 'image/png'){
                            echo '<img src="icon/png.png">';
                        }
                        if($row['file_type'] == 'image/jpeg'){
                            echo '<img src="icon/jpg.png">';
                        }
                    ?>
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    </div>
</body>

</html>