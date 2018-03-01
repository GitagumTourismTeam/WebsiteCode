<?php
    include('../session.php');
    
    // Get Data
    $id = $_POST['id'];
    $event_name = $_POST['event_name'];
    $event_content = $_POST['event_content'];
    $event_date = $_POST['event_date'];
    $old_file = $_POST['old_file'];
    if($_FILES['file']['error'] > 0 )
    {
        $sql = "UPDATE events SET event_name='$event_name', event_content='$event_content', event_date='$event_date' where id=$id";
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
            $sql = "UPDATE events SET event_name='$event_name', event_content='$event_content', event_date='$event_date', photo_file='$final_file' where id=$id";
            $result = mysqli_query($db, $sql);
            unlink('../../img/uploaded/'.$old_file);
        }
    }
    
    // Go back To Events table
    header('Location:index.php');
?>