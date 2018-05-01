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

      $result = mysqli_query($db, $events);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Gitagum-Events</title>
    <link rel="stylesheet" href="css/archive.css">
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
          <a href="tourism.php">Tourism</a>
          <a href="announcements.php" class="active">News & Events</a>
          <a href="About.php">About</a>
          <a href="downloadables.php">Downloadables</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
          <div class="containernav"> </div>
        </div>


        <div class="containernav">
            <img src="img/archive.jpg" id="backimage">
        </div>

        <div id="descript-box">
          <div id="descript">
            <p class="main">Event Archives</p>

          </div>
        </div>

        <div class="footerarchive">
        <p>City Government of the Municipality of Gitagum<br>
© 2018 All rights reserved.<br><br>

This website was created in partnership with Xavier University-Ateneo de Cagayan<br>
through the Community Service Learning Program (CSLP)<br>
in their 2nd semester of the Service Learning Program 2018.</p>
        </div>

        <div class="archive">
        <?php

            foreach($result as $row) {

            echo '<a href="event.php?id='. $row["id"] .'">';
            
            echo '<h1>'. $row["event_name"] .'</h1>';
            echo '<p>'. $row["event_date"] .'</p>';

            echo '</a>';
            }
        ?>
        </div>

        
    </form>
</body>

</html>