<?php
    include('../session.php');
    
    // Get Data
    $id = $_POST['id'];
    $event_name = $_POST['event_name'];
    $event_content = $_POST['event_content'];
    $event_date = $_POST['event_date'];

    // Process Data
    $sql = "UPDATE events SET event_name='$event_name', event_content='$event_content', event_date='$event_date' where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Events table
    header('Location:index.php');
?>