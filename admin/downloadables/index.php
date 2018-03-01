<?php
    require('../session.php');

    $sql = "SELECT * FROM file_system";
    $result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/down.css">
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
        <a href="../persons/">Persons</a>
        <a href="../downloadables/" class="active">Downloadables</a>
        <a href="../logout.php"> Logout </a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="callOut()">&#9776;</a>
        <div class="containernav"> </div>
    </div>
    <table>
        <caption>Downloadables</caption>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Type</th>
                <th scope="col">Size</th>
                <th scope="col">Department</th>
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
                <td data-label="Name"><?php echo $row['file_name'] ?></td>
                <td data-label="Location"><?php echo $row['file_location'] ?></td>
                <td data-label="Type"><?php echo $row['file_type'] ?></td>
                <td data-label="Size"><?php echo $row['file_size'] ?></td>
                <td data-label="Department"><?php echo $row['department'] ?></td>
                <td data-label="Date"><?php echo $row['file_date'] ?></td>
                <td data-label="Option"><button class="delete-button" onclick="location.href='downloadables_delete.php?id=<?php echo $row['id']?>'">Delete</button></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <div class="ass">
        <button onclick="document.getElementById('id01').style.display='block'" class="add-button">New Upload</button>
    </div>
</body>

<div id="id01" class="modal">

    <form class="modal-content animate" action="downloadables_addlogic.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label for="nickname"><b>Filename:</b></label>
            <input type="text" placeholder="File Name" name="file_name" required>
            <select name="department">
                    <option value="" selected disabled>Choose...</option>
                    <option value="1">Department 1</option>
                    <option value="2">Department 2</option>
                    <option value="3">Department 3</option>
                    <option value="4">Department 4</option>
                    <option value="5">Department 5</option>
            </select>
            <input type="file" value="Browse" name="file" required>
        </div>
        <div class=" container ">
            <button type="button" onclick="document.getElementById( 'id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="upload" name="btn-upload">Upload</button>
        </div>
    </form>
</div>

</html>