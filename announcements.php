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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(window).scroll(function () {
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
        <a href="announcements.php" class="active">News & Events</a>
        <a href="About.php">About</a>
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
                
                ?> </div>
        </div>
      </div>
      <div id="eventspage">
        <div id="header">
          <h1>See what's happening</h1>
        </div>
        <div id="event-calendar">
          <div class="row">
            <?php

foreach($result4 as $row) {

  echo '<div class="article">';
  echo '<a href="event.php?id='. $row["id"] .'">';
      echo '<div class="article-image">';
          echo '<img src="img/uploaded/'. $row["photo_file"] .'"/>';
      echo '</div>';
      echo '<div class="article-body">';
          echo '<div class="article-date">';
              echo '<time>'. $row["event_date"] .'</time>';
          echo '</div>';
          echo '<div class="article-title">';
              echo '<h3>'. $row["event_name"] .'</h3>';
          echo '</div>';
      echo '</div>';
  echo '</a>';
echo '</div>';

}

?> </div>
        </div>
      </div>
      </div>
      <div class="more">
        <a href="archive.php">
          <h1>View more</h1>
        </a>
      </div>
      <div class="footerannounce">
        <p>City Government of the Municipality of Gitagum
          <br> © 2018 All rights reserved.
          <br>
          <br> This website was created in partnership with Xavier University-Ateneo de Cagayan
          <br> through the Community Service Learning Program (CSLP)
          <br> in their 2nd semester of the Service Learning Program 2018.</p>
      </div>
    </form>
  </body>

  </html>