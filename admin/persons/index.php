<?php
    require('../session.php');

    $sql = "SELECT * FROM persons";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/Person.css">
    <link rel="shortcut icon" href="../img/lege.ico" />
    <title>Admin-Downloadables</title>
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
        <a href="../posts/">Announcements</a>
        <a href="../events/">Events</a>
        <a href="../persons/" class="active">Persons</a>
        <a href="../downloadables/">Downloadables</a>
        <a href="../logout.php"> Logout </a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <table>
        <caption>Person</caption>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Details</th>
                <th scope="col">Role</th>
                <th scope="col">Photo</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tbody>
            <tr>
                <td data-label="Name"><?php echo $row["person_name"] ?></td>
                <td data-label="Position"><?php echo $row["person_position"] ?></td>
                <td data-label="Details"><?php echo $row["person_desc"] ?></td>
                <td data-label="Person Role Number"><?php echo $row["person_role"] ?></td>
                <td data-label="Photo"><?php echo $row["photo_file"] ?></td>
                <td data-label="Option"><button class="edit-button" onclick="location.href='person_edit.php?id=<?php echo $row['id']?>'">Edit</button><button class="delete-button" onclick="location.href='person_delete.php?id=<?php echo $row['id']?>'">Delete</button></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <div class="ass">
        <button onclick="document.getElementById('id01').style.display='block'" class="add-button">New People</button>
    </div>
</body>
<div id="id01" class="modal">

    <form class="modal-content animate" action="person_addlogic.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label for="name"><b>Name:</b></label>
            <input type="text" placeholder="Name" name="person_name">
            <label id="pos" for="position"><b>Position:</b></label>
            <input type="text" placeholder="Position" name="person_position">
            <label id="abo" for="about"><b>About:</b></label>
            <input type="text" placeholder="About" name="person_desc">
            <input type="file" value="Browse" name="file">
        </div>

        <div class=" container ">
            <button type="button" onclick="document.getElementById( 'id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="upload">Upload</button>
        </div>
    </form>
</div>

</html>