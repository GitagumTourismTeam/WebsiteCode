<?php
    include('../session.php');
    
    // Get Data
    $post_title = $_POST['post_title'];
    $post_context = $_POST['post_context'];
    $post_date = $_POST['post_date'];
    $pinned = $_POST['pinned'];
    $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc      = $_FILES['file']['tmp_name'];
    $file_size     = $_FILES['file']['size'];
    $file_type     = $_FILES['file']['type'];
    $folder        = "../../img/uploaded/";
    $new_size      = $file_size / 1024;
    $new_file_name = strtolower($file);
    $final_file    = str_replace(' ', '-', $new_file_name);
    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $sql = "INSERT INTO posts (post_title, post_context, post_date, pinned, photo_file) values ('$post_title','$post_context','$post_date','$pinned','$final_file')";
        $result = mysqli_query($db, $sql);
    }

    // Go back To Posts table
    header('Location:index.php');
?>