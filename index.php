<?php
    require_once("config.php");

    $sql = "SELECT * from events";

    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gitagum-Home</title>
    <link rel="stylesheet" type="text/css" href="css/Istyle.css">
    <link rel="shortcut icon" href="img/lege.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 550) {
                    $(".navbar").css("background", "black");
                } else {
                    $(".navbar").css("background", "rgba(0, 0, 0, 0.432)");
                }
            })
        })
    </script>
    <!-- this uses jquery cause it got some simple methods to just to call into so it need internet to run -->
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                var scrolleddown = false;
                if ($(window).scrollTop() > 1) {
                    if (scrolleddown == false) {
                        scrolleddown = true;
                        $('.histcon').stop(true, false).animate({
                            top: '-15%'
                        }, 500, function() {
                            $(this).css("position", "absolute");
                        });
                    }
                } else {
                    scrolleddown = false;
                    $('.histcon').css("position", "fixed").stop(true, false).animate({
                        top: '99%'
                    }, 500)
                }
            });
        });
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
        <a href="index.php" class="active">Home</a>
        <a href="tourism.html">Tourism</a>
        <a href="announcements.php">Announcement</a>
        <a href="About.html">About</a>
        <a href="downloadables.php">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <div class="containernav">
        <img src="img/a.jpg" id="backimage">
    </div>
    <div class="histcon" class="histcon2">

        <h1>History</h1>
        <p>Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. Street art stumptown mixtape, four dollar toast celiac jianbing hell of raclette fam brooklyn
            everyday carry lumbersexual. Portland microdosing skateboard jean shorts vegan prism church-key biodiesel.
        </p>
        <p>
            Drinking vinegar hell of godard air plant trust fund, letterpress bushwick brooklyn palo santo tote bag pitchfork neutra affogato venmo. Franzen health goth stumptown chambray. Twee chambray mixtape single-origin coffee, pinterest fixie pok pok roof party
            small batch palo santo art party. Truffaut kickstarter fashion axe unicorn keffiyeh plaid raw denim hashtag.
        </p>
        <p>
            Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella selfies distillery
            cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS. Pour-over narwhal craft beer
            shoreditch keytar PBR&B microdosing pop-up authentic edison bulb poutine neutra VHS.
        </p>
        <p>
            Pop-up single-origin coffee succulents raw denim iPhone gochujang. 90's try-hard bitters snackwave put a bird on it, adaptogen quinoa everyday carry meditation semiotics jianbing wayfarers banjo glossier. Ramps brooklyn glossier yr hot chicken hella.
            IPhone fashion axe shabby chic fingerstache kinfolk be
        </p>
        <p>
            Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella selfies distillery
            cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS. Pour-over narwhal craft beer
            shoreditch keytar PBR&B microdosing pop-up authentic edison bulb poutine neutra VHS.
        </p>
        <p>
            Drinking vinegar hell of godard air plant trust fund, letterpress bushwick brooklyn palo santo tote bag pitchfork neutra affogato venmo. Franzen health goth stumptown chambray. Twee chambray mixtape single-origin coffee, pinterest fixie pok pok roof party
            small batch palo santo art party. Truffaut kickstarter fashion axe unicorn keffiyeh plaid raw denim hashtag.
        </p>
        <p>Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. Street art stumptown mixtape, four dollar toast celiac jianbing hell of raclette fam brooklyn
            everyday carry lumbersexual. Portland microdosing skateboard jean shorts vegan prism church-key biodiesel.
        </p>
    </div>
    <div class="announcementwrapper">
        <h1>Announcements</h1>
        <div class="scroll" id="nicestyle">
            <div id="scrolloverflow">
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. </h4>
                <p class="pdes">January 17, 2018 14:22</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>
                <h4 class="hdes">Forage vice cornhole yuccie affogato, biodiesel pabst. Fanny pack portland flannel mixtape, gochujang single-origin coffee street art etsy sriracha yr. </h4>
                <p class="pdes">January 14, 2018 15:23</p>

            </div>
        </div>
    </div>
    <div class="Events">
        <h1>Events</h1>

    </div>
    <div class="mandv">
        <div class="ro">
            <div class="colum">
                <h1>Mission</h1>
                <p id="mp">Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella
                    selfies distillery cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS.</p>
            </div>
            <div class="colum">
                <h1>Vision</h1>
                <p id="vp">Drinking vinegar hell of godard air plant trust fund, letterpress bushwick brooklyn palo santo tote bag pitchfork neutra affogato venmo. Franzen health goth stumptown chambray. Twee chambray mixtape single-origin coffee, pinterest fixie
                    pok pok roof party small batch palo santo art party. Truffaut kickstarter fashion axe unicorn keffiyeh plaid raw denim hashtag.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>INSERT FOOTER STUFF HERE</p>
    </div>
</body>

</html>