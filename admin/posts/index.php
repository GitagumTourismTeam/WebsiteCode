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
    <link rel="shortcut icon" href="lege.ico" />
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
</head>

<body>
    <div class="navbar" id="navibar">
        <div class="navbarlogo">
            <img src="../img/LOGO.png">
            <h1>Admin</h1>
        </div>
        <a href="#dummy" class="dummy"></a>
        <a href="../places/">Place</a>
        <a href="../annoucements/" class="active">Announcements</a>
        <a href="../events/">Events</a>
        <a href="../persons/">Persons</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="../logout.php"> Logout </a>
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
                <th scope="col">Pinned</th>
                <th scope="col">Photo File</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tbody>
            <tr>
                <td data-label="Title"><?php echo $row["post_title"] ?></td>
                <td data-label="Context"><?php echo $row["post_context"] ?></td>
                <td data-label="Date"><?php echo $row["post_date"] ?></td>
                <td data-label="Date"><?php echo $row["pinned"] ?></td>
                <td data-label="Photo File"><?php echo $row["photo_file"] ?></td>
                <td data-label="Option"><button class="edit-button" onclick="location.href='posts_edit.php?id=<?php echo $row['id']?>'">Edit</button><button class="delete-button" onclick="location.href='posts_delete.php?id=<?php echo $row['id']?>'">Delete</button></td>
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

    <form class="modal-content animate" action="posts_addlogic.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label for="uname"><b>Title</b></label>
            <input type="text" placeholder="Enter Title" name="uname" required>

            <label for="psw"><b>Context</b></label>
            <input type="text" placeholder="Enter Context" name="con" required>

            <label for="psw"><b>Date</b></label>
            <input type="text" placeholder="Enter Date" name="date" required>
            
            <input type="file" value="Browse" name="file">
            
        </div>

        <div class="container">
            <button type="submit" class="submit-but">Submit</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

</html>