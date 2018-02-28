<?php
require("config.php");
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
            <table width="80%" border="1">
                <tr>
                    <th colspan="4">your uploads...
                        <label>
                            <a href="index.php">upload new files...</a>
                        </label>
                    </th>
                </tr>
                <tr>
                    <td>File Name</td>
                    <td>File Type</td>
                    <td>File Size(KB)</td>
                    <td>View</td>
                </tr>
                <?php
                    $sql="SELECT * FROM file_system";
                    $result = mysqli_query($db, $sql);
                    while($row=mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                        <td>
                            <?php echo $row['file_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['file_type'] ?>
                        </td>
                        <td>
                            <?php echo $row['file_size'] ?>
                        </td>
                        <td>
                            <a href="uploads/<?php echo $row['file_name'] ?>" target="_blank">view file</a>
                            <?php 
                                if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
                                    echo '<img src="icon/doc.png">';
                                }
                                if($row['file_type'] == 'application/pdf'){
                                    echo '<img src="icon/pdf.png">';
                                }
                                if($row['file_type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'){
                                    echo '<img src="icon/xlsx.png">';
                                }
                                if($row['file_type'] == 'image/png'){
                                    echo '<img src="icon/png.png">';
                                }
                                if($row['file_type'] == 'image/jpeg'){
                                    echo '<img src="icon/jpg.png">';
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </body>

    </html>