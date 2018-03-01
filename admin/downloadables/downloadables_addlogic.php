<?php
    require('../session.php');
    if (isset($_POST['btn-upload'])) {
        $file_nickname = $_POST['file_name'];
        $department = $_POST['department'];
        $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc      = $_FILES['file']['tmp_name'];
        $file_size     = $_FILES['file']['size'];
        $file_type     = $_FILES['file']['type'];
        $folder        = "../../uploads/";
        $new_size      = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file    = str_replace(' ', '-', $new_file_name);
        $file_date = date("Y-m-d H:i:s");
        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "INSERT INTO file_system (file_name, file_location, file_type, file_size, department, file_date) values ('$file_nickname','$final_file','$file_type','$file_size','$department','$file_date')";
            $result = mysqli_query($db, $sql);
?>
<script>
alert('successfully uploaded');
window.location.href='index.php?success';
</script>
<?php
    } else {
?>
<script>
alert('error while uploading file');
window.location.href='index.php?fail';
</script>
<?php
    }
}
?> 