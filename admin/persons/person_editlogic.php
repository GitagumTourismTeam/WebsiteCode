<?php
    include('../session.php');
    
    // Get Data
    $id = $_POST['id'];
    $person_name = $_POST['person_name'];
    $person_position = $_POST['person_position'];
    $person_desc = $_POST['person_desc'];
    $old_file = $_POST['old_file'];
    if($_FILES['file']['error'] > 0 )
    {
        $sql = "UPDATE persons SET person_name='$person_name', person_position='$person_position', person_desc='$person_desc' where id=$id";
        $result = mysqli_query($db, $sql);
    }
    else
    { 
        $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc      = $_FILES['file']['tmp_name'];
        $file_size     = $_FILES['file']['size'];
        $file_type     = $_FILES['file']['type'];
        $folder        = "../../img/uploaded/";
        $new_size      = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file    = str_replace(' ', '-', $new_file_name);
        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "UPDATE persons SET person_name='$person_name', person_position='$person_position', person_desc='$person_desc', photo_file='$final_file' where id=$id";
            $result = mysqli_query($db, $sql);
            unlink('../../img/uploaded/'.$old_file);
        }
    }
    
    // Go back To Places table
    header('Location:index.php');
?>