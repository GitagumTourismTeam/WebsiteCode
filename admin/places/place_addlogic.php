<?php
    include('../session.php');
    
    // Get Data
    $place_name = $_POST['place_name'];
    $place_information = $_POST['place_information'];
    $place_location = $_POST['place_location'];
    if($_FILES['file']['error'] > 0 )
    {
        $sql = "INSERT INTO places (place_name, place_information, place_location) values ('$place_name','$place_information','$place_location')";
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
            $sql = "INSERT INTO places (place_name, place_information, place_location, photo_file) values ('$place_name','$place_information','$place_location','$final_file')";
            $result = mysqli_query($db, $sql);
        }
    }
    
    // Go back To Places table
    header('Location:index.php');
?>