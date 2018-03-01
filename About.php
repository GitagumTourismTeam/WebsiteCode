<?php
    require_once("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gitagum-About</title>
    <link rel="stylesheet" type="text/css" href="css/aboutstyle.css">
    <link rel="shortcut icon" href="img/lege.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $(".navbar").css("background", "black");
                } else {
                    $(".navbar").css("background", "rgba(0, 0, 0, 0.432)");
                }
            })
        })
    </script>
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
        <a href="announcements.php">Announcement</a>
        <a href="About.html" class="active">About</a>
        <a href="downloadables.php?id=1">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <div class="containernav">
        <img src="img/c.jpg" id="backimage">
    </div>
    <div class="blackdiv">
        <h1 id="textblack">Be the change goji berries tapping</h1>
        <p id="parablack">Dakini the power of intention forest </p>
    </div>
    <div class="reddiv">
    </div>

    <div class="message">
        MAN I HATE NICKELBACK
    </div>
    <div class="photos">
    <?php
        $sql = "SELECT * from persons order by id ASC";
        $result = mysqli_query($db, $sql);
        while($row=mysqli_fetch_array($result))
        {
    ?>
        <div><img src="img/uploaded/<?php echo $row['photo_file']?>">
            <p><?php echo $row['person_name']?></p>
            <a href="#pop?id=<?php echo $row['id']?>"><img src="img/down.png" style="width:10%;"></a>
        </div> 
    <?php
        }
    ?>
    </div>
    <div class="sometext">
        <h1>"Improving lives around the community"</h1>
    </div>
    <div class="dontlook">
        <div class="cont">
            <img src="img/11.jpg">
            <h1>Cynthia</h1>
            <p>valuable truths stevia conflict resolution, the healing properties of hemp seed.</p>
            <h4>Learn More ></h4>
        </div>
        <div class="cont">
            <img src="img/12.jpg">
            <h1>Robhurts</h1>
            <p>valuable truths stevia conflict resolution, the healing properties of hemp seed.</p>
            <h4>Learn More ></h4>
        </div>
        <div class="cont">
            <img src="img/13.jpg">
            <h1>Roberts</h1>
            <p>valuable truths stevia conflict resolution, the healing properties of hemp seed.</p>
            <h4>Learn More ></h4>
        </div>
    </div>
    <div id="pop?id=1" class="poppy">
        <div class="pops">
            <h2>Mayor</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Test
            </div>
        </div>
    </div>
    <div id="pop?id=2" class="poppy">
        <div class="pops">
            <h2>vice mayor</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Test
            </div>
        </div>
    </div>
    <div class="footer">
        <p>INSERT FOOTER STUFF HERE</p>
    </div>
</body>

</html>