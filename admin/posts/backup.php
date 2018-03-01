<?php
    require('../session.php');

    $sql = "SELECT * FROM posts";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/Announcements.css">
    <link rel="shortcut icon" href="../img/lege.ico" />
    <title>Admin-Announcements</title>
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
        <a href="../posts/" class="active">Announcements</a>
        <a href="../events/">Events</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <table>
        <caption>Announcements</caption>
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Context</th>
                <th scope="col">Date</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tbody>
            <tr>
                <td data-label="Title"><?php echo $row['post_title'] ?></td>
                <td data-label="Context"><?php echo $row['post_context'] ?></td>
                <td data-label="Date"><?php echo $row['post_date'] ?></td>
                <td data-label="Option"><button class="edit-button">Edit</button> <button onclick="document.getElementById('id02').style.display='block'" class="delete-button">Delete</button></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <div class="ass">
        <button onclick="document.getElementById('id01').style.display='block'" class="add-button">New Announcement</button>
    </div>
</body>

<div id="id01" class="modal">

    <form class="modal-content animate" action="post_addlogic.php" method="post">
        <div class="container">
            <label for="uname"><b>Title</b></label>
            <input type="text" placeholder="Enter Title" name="post_title" required>

            <label for="psw"><b>Context</b></label>
            <input type="text" placeholder="Enter Context" name="post_context" required>

            <label for="psw"><b>Date</b></label>
            <input type="text" placeholder="Enter Date" name="post_date" required>

            <button type="submit" class="submit-but">Submit</button>
        </div>

        <div class="container">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php">
        <div class="container">
            <h1>Are you sure?</h1>
        </div>

        <div class=" container ">
            <input type="hidden" name=id value=''>
            <button type="button" onclick="document.getElementById( 'id02').style.display='none'" class="cancelbut">Cancel</button>
            <button type="submit" class="delete">Delete</button>
        </div>
    </form>
</div>

</html>