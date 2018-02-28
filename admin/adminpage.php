<?php
   include('session.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
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
            <h1>Gitagum Admin Page</h1>
        </div>
        <a href="#dummy" class="dummy"></a>
        <a href="#" class="active">Home Page</a>
        <a href="places/">Places</a>
        <a href="posts/">Posts</a>
        <a href="events/">Events</a>
        <a href="downloadables/">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>

    <div class="containernav">
        <img src="img/a.jpg" id="backimage">
    </div>

</body>
</html>