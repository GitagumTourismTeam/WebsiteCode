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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
        <a href="tourism.html">Tourism</a>
        <a href="annoucements">Announcement</a>
        <a href="about.html">About</a>
        <a href="downloadables.php" class="active">Downloadables</a>
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