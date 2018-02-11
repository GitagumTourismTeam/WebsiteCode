<?php
    include('../session.php');
    
    // Get Data
    $post_title = $_POST['post_title'];
    $post_context = $_POST['post_context'];
    $post_date = $_POST['post_date'];

    // Process Data
    $sql = "INSERT INTO posts (post_title, post_context, post_date) values ('".$post_title."','".$post_context."','".$post_date."')";
    $result = mysqli_query($db, $sql);
    
    // Go back To Posts table
    header('Location:index.php');
?>