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

</head>

<body>
    <form class="form1">
        <!-- navbar div -->
        <div id="nav-announcements">
            <nav>
                <img src="img/LOGO.png">
                <div id="Titlegit">GITAGUM</div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="tourism.html">Tourism</a></li>
                    <li class="current"><a href="announcements.php">Announcements</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="downloadables.html">Downloadables</a></li>
                </ul>
            </nav>
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

        <!-- Recent Announcements -->
        <div id="text-sequence-2">
            <h1>Recent Announcements</h1>
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

        <div id="eventspage">
            <h2>Announcements list</h2>
            <div id="borderline-horizontal-black"></div>
        </div>

        <div id="event-calendar">
            <div id="awrap-calendar">
                <div class="scroll-calendar" id="nicestyle">
                    <div id="scrolloverflow">
                        <?php
                        foreach($result as $row) {

                        echo '<h4 class="hdes">'. $row["event_content"] .'</h4>';
                        echo '<p class="pdes">'. $row["event_date"] .'</p>';
                        
                        }
                        ?>
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