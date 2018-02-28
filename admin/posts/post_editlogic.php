<?php
    include('../session.php');
    
    // Get Data
    $id = $_POST['id'];
    $post_title = $_POST['post_title'];
    $post_context = $_POST['post_context'];
    $post_date = $_POST['post_date'];

    // Process Data
    $sql = "UPDATE posts SET post_title='$post_title', post_context='$post_context', post_date='$post_date' where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Posts table
    header('Location:index.php');
?>