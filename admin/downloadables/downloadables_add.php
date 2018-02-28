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