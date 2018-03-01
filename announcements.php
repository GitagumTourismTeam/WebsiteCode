<?php
  include("config.php");
  // send query

  $events = "SELECT * from events";

  $events2 = "SELECT * from events ORDER BY id DESC";

  $announce = "SELECT * from posts where pinned = '1'";

  $announce2 = "SELECT * from posts ORDER BY id DESC";

  $result = mysqli_query($db, $events);

  $result2 = mysqli_query($db, $announce);

  $result3 = mysqli_query($db, $announce2);

  $result4 = mysqli_query($db, $events2);
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
    <form class="form1">
        <!-- navbar div -->
        <div class="navbar" id="navibar">
          <div class="navbarlogo">
              <img src="img/LOGO.png">
              <h1>Gitagum</h1>
          </div>
          <a href="#dummy" class="dummy"></a>
          <a href="index.php">Home</a>
          <a href="tourism.php">Tourism</a>
          <a href="announcements.php" class="active">Announcement</a>
          <a href="About.html">About</a>
          <a href="downloadables.php?id=1">Downloadables</a>
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
                    <?php
                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';
              
                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';

                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';

                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';

                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';

                    $row = $result2->fetch_assoc();
                    echo '<article>';
                      echo '<div class="info bottom-left">';
                        echo '<h2>'. $row["post_title"] .'</h2>';
                        echo '<h3>'. $row["post_context"] .'</h3>';
                        echo '<h4>'. $row["post_date"] .'</h4>';
                        echo '</div>';
                        echo '<img src="img/Overlay.png" class="overlay"/>';
                        echo '<img src="img/uploaded/'.$row["photo_file"].'" class="img"/>';
                    echo '</article>';
                    ?>
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
                  $row = $result3->fetch_assoc();
                  echo '<li class="anim1">';
                    echo '<div class="name">'. $row["post_title"] .'</div>';
                    echo '<div class="content">'. $row["post_context"] .'</div>';
                    echo '<div class="date">'. $row["post_date"] .'</div>';
                  echo '</li>';

                  $row = $result3->fetch_assoc();
                  echo '<li class="anim2">';
                    echo '<div class="name">'. $row["post_title"] .'</div>';
                    echo '<div class="content">'. $row["post_context"] .'</div>';
                    echo '<div class="date">'. $row["post_date"] .'</div>';
                  echo '</li>';

                  $row = $result3->fetch_assoc();
                  echo '<li class="anim3">';
                    echo '<div class="name">'. $row["post_title"] .'</div>';
                    echo '<div class="content">'. $row["post_context"] .'</div>';
                    echo '<div class="date">'. $row["post_date"] .'</div>';
                  echo '</li>';

                  $row = $result3->fetch_assoc();
                  echo '<li class="anim4">';
                    echo '<div class="name">'. $row["post_title"] .'</div>';
                    echo '<div class="content">'. $row["post_context"] .'</div>';
                    echo '<div class="date">'. $row["post_date"] .'</div>';
                  echo '</li>';

                  $row = $result3->fetch_assoc();
                  echo '<li class="anim5">';
                    echo '<div class="name">'. $row["post_title"] .'</div>';
                    echo '<div class="content">'. $row["post_context"] .'</div>';
                    echo '<div class="date">'. $row["post_date"] .'</div>';
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
          <?php

          $row = $result4->fetch_assoc();
          
          echo '<div class="box-1 card">';
            echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
              echo '<div class="data">';
                echo '<div class="content">';
                  echo '<h1 class="title">'. $row["event_name"] .'</h1>';
                  
                  echo '<p class="text">'. $row["event_content"] .'</p>';
          
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';

          $row = $result4->fetch_assoc();

          echo '<div class="box-2 card">';
          echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
            echo '<div class="data">';
              echo '<div class="content">';
                echo '<h1 class="title">'. $row["event_name"] .'</h1>';
                
                echo '<p class="text">'. $row["event_content"] .'</p>';
        
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        $row = $result4->fetch_assoc();

        echo '<div class="box-3 card">';
          echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
            echo '<div class="data">';
              echo '<div class="content">';
                echo '<h1 class="title">'. $row["event_name"] .'</h1>';
              
                echo '<p class="text">'. $row["event_content"] .'</p>';
      
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        ?>

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