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

  $events = "SELECT * from events ORDER BY id DESC";

  $people = "SELECT * from persons ORDER BY id ASC";

  $result1 = mysqli_query($db, $events);

  $result2 = mysqli_query($db, $people);

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Gitagum-Home</title>
  <link rel="stylesheet" href="css/Istyle.css">
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
      <a href="index.php" class="active">Home</a>
      <a href="tourism.php">Tourism</a>
      <a href="announcements.php">News & Events</a>
      <a href="About.php">About</a>
      <a href="downloadables.php?id=1">Downloadables</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
      <div class="containernav"> </div>
    </div>
    <div class="containernav">
      <img src="img/stock4.jpg" id="backimage"> </div>
    <div id="home-front">
      <h1>It's more fun in Gitagum!</h1>
    </div>
    <div id="tourlink">
      <a href="tourism.php">
        <h2>Visit us</h2>
      </a>
    </div>
    <div class="history">
      <h1>A Brief History of Gitagum</h1>
      <p> Cultural Development
        <br>
        <br> During the Spanish regime, the people in the place were all non-christians. Particularly their names were A LOT,
        LAHOYLAHOY, and LAUS. Gitagum at the time was a thick forest, there wild pigs and wild chickens. Mostly the people
        do not know how to read and write. Gitagum a sitio and part Cagayan Misamis (Misamis Oriental). Some people from
        Tagnipa (El Salvador), Alubijid and other neighboring places have applied the place for homestead and then settled
        the place. The people who have first settled the place were, Leodegario Patenio, Rosales Fabricante, Luis Balacuit,
        Juan Buray, Juan Taroy and Damaso Paculba. The non-christian people (natives) has moved the mountain because they
        do not like to get nearer with the Christians, however, there are still few natives who were friendly to the settlers.
        Leodegario Patenio has an idea that Gitagum must be a barrio. One time, one of the natives got sick and they could
        not do anything to help him. They invited the quack doctor in order that their patient must be treated. The doctor
        used the leaves TAGUM-TAGUM for treatment purposes. The patient got alright, and TAGUM-TAGUM could be easily found
        in the place and it was very common for treatment and that from very moment, the place was called “GITAGUM”.
        <br>
        <br> Political Development
        <br>
        <br> In the year 1907, the Municipal President of Cagayan, Misamis has made Gitagum into a barrio and be a part of
        said municipality. Leodegario Patenio was appointed as Barrio Lieutenant. The barrio lieutenant called a meeting
        of all the settlers. The settlers have built school building and all others. During their meeting, they discussed
        in connection of their barrio fiesta. They have agreed that their patron must be Santo Niño and to be held in every
        third Sunday of January in every year. When Alubijid became a municipality, Gitagum was part of said municipality.
        <br>
        <br>In year 1961, the people of Gitagum formed a barrio meeting. The purpose of the said meeting was to apply for a
        municipality. Two (2) prominent persons in the name of Mr. Benito Velasco and Mr. Custodio T. Damasing were the
        one who made the required papers and same personally submitted to Manila for favorable action and consideration.
        His Excellency Carlos P. Garcia, President of the Republic of the Philippines, has issued an Executive Order No.
        435, dated June 15, 1961, stating herein, that Gitagum must be a regular municipality. President Garcia has appointed
        the town officials for Gitagum, namely: Mr. Santiago L. Velasco as Municipal Mayor, Mr. Valeriano Dumagan as Vice
        Mayor and for Municipal Councilors: Mr. Lino Maagad, Mr. Teotimo Magdale, Mr. Bernardo Yamaro, Mr. Antonio Palasol,
        Mr. Leon Nob, and Mr. Carlos Micutuan. Mr. Custodio T, Damasing was appointed as Municipal Secretary. Gitagum was
        inaugurated on July 17, 1961. </p>
    </div>
    <div class="row">
      <div id="head">
        <h1>Current Events</h1>
      </div>
      <?php
          $row = $result1->fetch_assoc();

          echo '<div class="box-1 card">';
            echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
              echo '<div class="data">';
                echo '<div class="content">';
                  echo '<h2 class="title">'. $row["event_name"] .'</h2>';
                  
                  echo '<p class="text"><a href="event.php?id='. $row["id"] .'">Learn more...</a></p>';

                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';

          $row = $result1->fetch_assoc();

          echo '<div class="box-2 card">';
          echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
            echo '<div class="data">';
              echo '<div class="content">';
                echo '<h2 class="title">'. $row["event_name"] .'</h2>';
                
                echo '<p class="text"><a href="event.php?id='. $row["id"] .'">Learn more...</a></p>';

              echo '</div>';
            echo '</div>';
          echo '</div>';
          echo '</div>';

          $row = $result1->fetch_assoc();

          echo '<div class="box-3 card">';
          echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
            echo '<div class="data">';
              echo '<div class="content">';
                echo '<h2 class="title">'. $row["event_name"] .'</h2>';
              
                echo '<p class="text"><a href="event.php?id='. $row["id"] .'">Learn more...</a></p>';

              echo '</div>';
            echo '</div>';
          echo '</div>';
          echo '</div>';

        ?> </div>
    <div id="descript-box">
      <div id="vision">
        <p class="main">Development Vision of the Municipality</p>
        <p class="sub">“A micro agri-industrial, commercial, business, education, and tourism center of Western Misamis Oriental with
          God-loving, resilient and empowered citizenry, living in a safe balanced environment led by Professionalized
          Service Providers” </p>
      </div>
      <div id="mission">
        <p class="main">Mission Statement for the Municipality</p>
        <p class="sub">“In pursuit of this vision, we adhere to uplift the living condition of the people of Gitagum through sound legislation,
          effective delivery of basic services, strong linkages with line agencies, private sector, civil societies and
          active community participation”. </p>
      </div>
    </div>
    <div class="footertour">
      <p>City Government of the Municipality of Gitagum
        <br> © 2018 All rights reserved.
        <br>
        <br> This website was created in partnership with Xavier University-Ateneo de Cagayan
        <br> through the Community Service Learning Program (CSLP)
        <br> in their 2nd semester of the Service Learning Program 2018.</p>
    </div>
    <div class="row2">
      <div id="head2">
        <h1>Get to know the leaders</h1>
      </div>
      <?php
            $row = $result2->fetch_assoc();

            echo '<div class="box-12 card2">';
            echo '<div class="wrapper2" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
              echo '<div class="data2">';
                echo '<div class="content2">';
                  echo '<h1 class="title2">'. $row["person_name"] .'</h1>';
                  echo '<p class="text2"><span class="position">'. $row["person_position"] .'</span>'. $row["person_desc"] .'</p>';
                  
                echo '</div>';
              echo '</div>';
            echo '</div>';
            echo '</div>';

            $row = $result2->fetch_assoc();

            echo '<div class="box-22 card2">';
            echo '<div class="wrapper2" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
              echo '<div class="data2">';
                echo '<div class="content2">';
                  echo '<h1 class="title2">'. $row["person_name"] .'</h1>';
                  echo '<p class="text2"><span class="position">'. $row["person_position"] .'</span>'. $row["person_desc"] .'</p>';
                  
                echo '</div>';
              echo '</div>';
            echo '</div>';
            echo '</div>';

            $row = $result2->fetch_assoc();

            echo '<div class="box-32 card2">';
            echo '<div class="wrapper2" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
              echo '<div class="data2">';
                echo '<div class="content2">';
                  echo '<h1 class="title2">'. $row["person_name"] .'</h1>';
                  echo '<p class="text2"><span class="position">'. $row["person_position"] .'</span>'. $row["person_desc"] .'</p>';
                  
                echo '</div>';
              echo '</div>';
            echo '</div>';
            echo '</div>';

        ?> </div>
    <div class="more">
      <a href="About.php">
        <h1>Learn more</h1>
      </a>
    </div>
  </form>
</body>

</html>