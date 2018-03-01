<?php
  include("config.php");
  // send query

  $places = "SELECT * from places";

  $result = mysqli_query($db, $places);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Gitagum-Tourism</title>
    <link rel="stylesheet" href="css/tour.css">
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

<body>
    <form class="form1">
        <!-- navbar div -->
        <div class="navbar" id="navibar">
          <div class="navbarlogo">
              <img src="img/LOGO.png">
              <h1>Gitagum</h1>
          </div>
          <a href="#dummy" class="dummy"></a>
          <a href="index.php">Home</a>
          <a href="tourism.php" class="active">Tourism</a>
          <a href="announcements.php">Announcement</a>
          <a href="About.html">About</a>
          <a href="downloadables.php?id=1">Downloadables</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
          <div class="containernav"> </div>
        </div>

        <div id="tourism-front">
            <h1>Discover Gitagum</h1>
        </div>
        
        <!-- slideshow -->
        <div class="slideshow">
                <input checked type=radio name="slider" id="slide1" />
                <input type=radio name="slider" id="slide2" />
                <input type=radio name="slider" id="slide3" />
                <input type=radio name="slider" id="slide4" />
                <input type=radio name="slider" id="slide5" />
              
                <div class="slider-wrapper">
                  <div class=inner>
                    <article>
                      <div class="info bottom-left">
                        <h3>Off the coast of Gitagum</h3></div>
                      <img src="img/stock5.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>Some Ferris Wheel</h3></div>
                      <img src="img/stock4.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>A Lake or something I Dunno</h3></div>
                      <img src="img/stock3.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>Buncha Trees</h3></div>
                      <img src="img/stock2.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>Lots of Branches</h3></div>
                      <img src="img/f.jpg" />
                    </article>
                  </div>
                  <!-- .inner -->
                </div>
                <!-- .slider-wrapper -->
              
                <div class="slider-prev-next-control">
                  <label for=slide1></label>
                  <label for=slide2></label>
                  <label for=slide3></label>
                  <label for=slide4></label>
                  <label for=slide5></label>
                </div>
                <!-- .slider-prev-next-control -->
              
                <div class="slider-dot-control">
                  <label for=slide1></label>
                  <label for=slide2></label>
                  <label for=slide3></label>
                  <label for=slide4></label>
                  <label for=slide5></label>
                </div>
                <!-- .slider-dot-control -->
        </div>

        <div class="row">

          <div id="head">
            <h1>See the sights</h1>
          </div>
          <?php

            foreach($result as $row){

            echo '<div class="box-1 card">';
              echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
                echo '<div class="data">';
                  echo '<div class="content">';
                    echo '<h1 class="title">'. $row["place_name"] .'</h1>';
                    
                    echo '<p class="text">'. $row["place_information"] .'</p>';
                    
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            
            }
            ?>
        </div>

        <div id="descript-box">
          <div id="descript">
            <p class="main">Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray.</p>
            <p class="sub">Pop-up single-origin coffee succulents raw denim iPhone gochujang.</p>
          </div>
        </div>
        
        <div class="footertour">
            <p>INSERT FOOTER STUFF HERE</p>
        </div>
    </form>
</body>

</html>