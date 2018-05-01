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

  $people = "SELECT * from persons ORDER BY person_role ASC";

  $result = mysqli_query($db, $people);

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Gitagum-About</title>
        <link rel="stylesheet" href="css/aboutstyle.css">
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
                <a href="announcements.php">News & Events</a>
                <a href="About.php" class="active">About</a>
                <a href="downloadables.php?id=1">Downloadables</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
                <div class="containernav"> </div>
            </div>
            <div class="containernav">
                <img src="img/temp.jpg" id="backimage"> </div>
            <div id="about-front">
                <h1>Leading the people onwards</h1>
            </div>
            <div class="row">
                <div id="head">
                    <h1>Board Members</h1>
                </div>
                <?php

            foreach($result as $row){

            echo '<div class="box-1 card">';
              echo '<div class="wrapper" style="background: url(img/uploaded/'.$row["photo_file"].') center/cover no-repeat;">';
                echo '<div class="data">';
                  echo '<div class="content">';
                    echo '<h1 class="title">'. $row["person_name"] .'</h1>';
                    echo '<p class="text"><span class="position">'. $row["person_position"] .'</span></br></br>'. $row["person_desc"] .'</p>';
                    
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            
            }
            ?> </div>
            <div id="descript-box">
                <div id="descript">
                    <p class="main">Ethical yuccie raw denim sriracha helvetica portland stumptown shored itch jianbing banjo cray.</p>
                    <p
                        class="sub">Pop-up single-origin coffee succulents raw denim iPhone gochujang.</p>
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
        </form>
    </body>

    </html>