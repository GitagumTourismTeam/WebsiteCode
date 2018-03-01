<?php
  include("config.php");
  // send query

  $query = "SELECT * from events";

  $result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Gitagum-Announcements</title>
    <link rel="stylesheet" href="css/announce.css">
    <link rel="shortcut icon" href="img/lege.ico" />

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
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
    <form class="form1">
        <!-- navbar div -->
        <div class="navbar" id="navibar">
          <div class="navbarlogo">
              <img src="img/LOGO.png">
              <h1>Gitagum</h1>
          </div>
          <a href="#dummy" class="dummy"></a>
          <a href="index.php">Home</a>
          <a href="tourism.html">Tourism</a>
          <a href="announcements.php" class="active">Announcement</a>
          <a href="About.html">About</a>
          <a href="downloadables.php">Downloadables</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
          <div class="containernav"> </div>
        </div>

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
                        <h3>This will be a pinned post with all those cool text and stuff</h3></div>
                      <img src="img/a.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>This will also be a pinned announcement</h3></div>
                      <img src="img/c.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>A Lake or something I Dunno</h3></div>
                      <img src="img/f.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>Where am I going with this</h3></div>
                      <img src="img/a.jpg" />
                    </article>
              
                    <article>
                      <div class="info bottom-left">
                        <h3>Stock images for now and cooler custom images later</h3></div>
                      <img src="img/c.jpg" />
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

        <div id="borderline-horizontal"></div>
        <!-- List of recent Announcements -->
        <div class="content-slider">
            <div id="text-sequence-2">
                <h1>Recent Announcements</h1>
            </div>
            <div id="borderline-horizontal"></div>
            <div class="slider">
              <div class="mask">
                <?php 
                
                echo '<ul>';
                  $row = $result->fetch_assoc();
                  echo '<li class="anim1">';
                    echo '<div class="name">'. $row["event_name"] .'</div>';
                    echo '<div class="content">'. $row["event_content"] .'</div>';
                    echo '<div class="date">'. $row["event_date"] .'</div>';
                  echo '</li>';
                  $row = $result->fetch_assoc();
                  echo '<li class="anim2">';
                    echo '<div class="name">'. $row["event_name"] .'</div>';
                    echo '<div class="content">'. $row["event_content"] .'</div>';
                    echo '<div class="date">'. $row["event_date"] .'</div>';
                  echo '</li>';
                  $row = $result->fetch_assoc();
                  echo '<li class="anim3">';
                    echo '<div class="name">'. $row["event_name"] .'</div>';
                    echo '<div class="content">'. $row["event_content"] .'</div>';
                    echo '<div class="date">'. $row["event_date"] .'</div>';
                  echo '</li>';
                  $row = $result->fetch_assoc();
                  echo '<li class="anim4">';
                    echo '<div class="name">'. $row["event_name"] .'</div>';
                    echo '<div class="content">'. $row["event_content"] .'</div>';
                    echo '<div class="date">'. $row["event_date"] .'</div>';
                  echo '</li>';
                  $row = $result->fetch_assoc();
                  echo '<li class="anim5">';
                    echo '<div class="name">'. $row["event_name"] .'</div>';
                    echo '<div class="content">'. $row["event_content"] .'</div>';
                    echo '<div class="date">'. $row["event_date"] .'</div>';
                  echo '</li>';
                echo '</ul>';
                
                ?>
              </div>
            </div>
          </div>



        <div class="row">

          <div id="head">
           <h1>See what's happening</h1>
          </div>
          <div class="box-1 card">
            <div class="wrapper">
              <div class="data">
                <div class="content">
                  <h1 class="title">Reminder that event names should be kept short or things could get weird.</h1>
                  <!--========================================================================================================================================character limit=======-->
                  <p class="text">Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella selfies distillery
                                  cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS. Pour-over narwhal craft beer
                                  shoreditch keytar PBR&B microdosing pop-up authentic edison bulb poutine neutra VHS.</p>
          
                </div>
              </div>
            </div>
          </div>

          <div class="box-2 card">
            <div class="wrapper">
              <div class="data">
                <div class="content">
                  <h1 class="title">New donut shop opening downtown. People are going crazy.</h1>
                  <!--========================================================================================================================================character limit=======-->
                  <p class="text">Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella selfies distillery
                                  cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS. Pour-over narwhal craft beer
                                  shoreditch keytar PBR&B microdosing pop-up authentic edison bulb poutine neutra VHS.</p>
          
                </div>
              </div>
            </div>
          </div>

          <div class="box-3 card">
            <div class="wrapper">
              <div class="data">
                <div class="content">
                  <h1 class="title">Some sports team wins. It's a big deal.</h1>
                  <!--========================================================================================================================================character limit=======-->
                  <p class="text">Ethical yuccie raw denim sriracha helvetica portland stumptown shoreditch jianbing banjo cray. Drinking vinegar PBR&B franzen pug, hexagon microdosing air plant ennui gentrify. Green juice viral wolf, microdosing brooklyn gluten-free hella selfies distillery
                                  cliche lumbersexual pop-up. Artisan lo-fi synth fanny pack swag. Art party scenester semiotics, whatever hot chicken jean shorts artisan YOLO. YOLO woke hexagon, farm-to-table cornhole godard bicycle rights VHS. Pour-over narwhal craft beer
                                  shoreditch keytar PBR&B microdosing pop-up authentic edison bulb poutine neutra VHS.</p>
          
                </div>
              </div>
            </div>
          </div>

        </div>



        <div id="eventspage">
            <h2>Events list</h2>
            <div id="borderline-horizontal-black"></div>
        

        <div id="event-calendar">
            <div id="awrap-calendar">
                <div class="scroll-calendar" id="nicestyle">
                    <div id="scrolloverflow">
                        <?php
                        foreach($result as $row) {
                          echo '<div class="item">';
                          echo '<img src="img/Calendar-1.png"/>';
                          echo '<div class="contain">';
                          echo '<h4 class="hdes">'. $row["event_content"] .'</h4>';
                          echo '<p class="pdes">'. $row["event_date"] .'</p>';
                          echo '</div>';
                          echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        </div>
        
        <div class="footerannounce">
            <p>FOOTER STUFF GOES HERE</p>
        </div>
    </form>
</body>

</html>