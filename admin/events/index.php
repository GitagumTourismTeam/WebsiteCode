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
    require('../session.php');

    $sql = "SELECT * FROM events";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/Events.css">
    <link rel="shortcut icon" href="../img/lege.ico" />
    <title>Admin-Events</title>
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
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="navbar" id="navibar">
        <div class="navbarlogo">
            <img src="../img/LOGO.png">
            <h1>Admin</h1>
        </div>
        <a href="#dummy" class="dummy"></a>
        <a href="../places/">Place</a>
        <a href="../posts/">Announcements</a>
        <a href="../events/" class="active">Events</a>
        <a href="../persons/">Persons</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="../logout.php"> Logout </a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <table>
        <caption>Events</caption>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Photo File </th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tbody>
            <tr>
                <td data-label="Name"><?php echo $row["event_name"] ?></td>
                <td data-label="Content"><?php echo $row["event_content"] ?></td>
                <td data-label="Date"><?php echo $row["event_date"] ?></td>
                <td data-label="Photo File"><?php echo $row["photo_file"] ?></td>
                <td data-label="Option"><button class="edit-button" onclick="location.href='event_edit.php?id=<?php echo $row['id']?>'">Edit</button><button class="delete-button" onclick="location.href='event_delete.php?id=<?php echo $row['id']?>'">Delete</button></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <div class="ass">
        <button onclick="document.getElementById('id01').style.display='block'" class="add-button">New Event</button>
    </div>
</body>

<div id="id01" class="modal">

    <form class="modal-content animate" action="event_addlogic.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="event_name" required>

            <label for="psw"><b>Content</b></label>
            <input type="text" placeholder="Enter Content" name="event_content" required>

            <label for="psw"><b>Date</b></label>
            <input type="text" placeholder="Enter Date" name="event_date" required>
            <input type="file" value="Browse" name="file">
        </div>
        <div class="container">
            <button type="submit" class="submit-but">Submit</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

</html>