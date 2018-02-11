<?php
    include('../session.php');
    
    // Get Data
    $place_name = $_POST['place_name'];
    $place_information = $_POST['place_information'];
    $place_location = $_POST['place_location'];

    // Process Data
    $sql = "INSERT INTO places (place_name, place_information, place_location) values ('".$place_name."','".$place_information."','".$place_location."')";
    $result = mysqli_query($db, $sql);
    
    // Go back To Places table
    header('Location:index.php');
?>