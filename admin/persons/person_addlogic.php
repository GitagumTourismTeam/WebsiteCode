<?php
    include('../session.php');
    
    // Get Data
    $person_name = $_POST['person_name'];
    $person_position = $_POST['person_position'];
    $person_desc = $_POST['person_desc'];
    if($_FILES['file']['error'] > 0 )
    {
        $sql = "INSERT INTO persons (person_name, person_position, person_desc) values ('$person_name','$person_position','$person_desc')";
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
            $sql = "INSERT INTO persons (person_name, person_position, person_desc, photo_file) values ('$person_name','$person_position','$person_desc','$final_file')";
            $result = mysqli_query($db, $sql);
        }
    }
    // Go back To Places table
    header('Location:index.php');
?>