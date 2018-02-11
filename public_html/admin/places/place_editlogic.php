<?php
    include('../session.php');
    
    // Get Data
    $id = $_POST['id'];
    $place_name = $_POST['place_name'];
    $place_information = $_POST['place_information'];
    $place_location = $_POST['place_location'];

    // Process Data
    $sql = "UPDATE places SET place_name='$place_name', place_information='$place_information', place_location='$place_location' where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Places table
    header('Location:index.php');
?>