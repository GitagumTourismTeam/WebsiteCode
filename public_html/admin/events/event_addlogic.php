<?php
    include('../session.php');
    
    // Get Data
    $event_name = $_POST['event_name'];
    $event_content = $_POST['event_content'];
    $event_date = $_POST['event_date'];

    // Process Data
    $sql = "INSERT INTO events (event_name, event_content, event_date) values ('".$event_name."','".$event_content."','".$event_date."')";
    $result = mysqli_query($db, $sql);
    
    // Go back To Events table
    header('Location:index.php');
?>