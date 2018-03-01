<?php
    include('../session.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>File Uploading With PHP and MySql</title>
    <link rel="stylesheet" href="..css/downloadbles.css" type="text/css" /> 
</head>

<body>
    <div id="header">
        <label>File Uploading With PHP and MySql</label>
    </div>
    <div id="body">
        <form action="downloadables_addlogic.php" method="post" enctype="multipart/form-data">
            <input type="text" name="file_name" required> 
            <select name="department">
                <option value="1">Department 1</option>
                <option value="2">Department 2</option>
                <option value="3">Department 3</option>
                <option value="4">Department 4</option>
            </select>
            <input type="file" name="file" />
            <button type="submit" name="btn-upload">upload</button>
        </form>
        <br />
        <br />
        <?php
            if (isset($_GET['success'])) {
        ?>
        <label>File Uploaded Successfully...
        <a href="view.php">click here to view file.</a>
        </label>
        <?php
            } else if (isset($_GET['fail'])) {
        ?>
        <label>Problem While File Uploading !</label>
        <?php
            } else {
        ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
            }
        ?> 
    </div>
</body>

</html>