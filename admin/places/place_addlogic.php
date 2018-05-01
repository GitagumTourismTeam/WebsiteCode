<!-- 
    <Gitagum Website Source To make Gitagum Website Run>
    Copyright (C) 2018  <John Neijzen, Swello Lee, Isaiah Galorport, Fidel Ivan Racines, Jerome Bao, Joseph Barnido, Paul Simbajon>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
-->

<?php
    include('../session.php');
    
    // Get Data
    $place_name = mysqli_real_escape_string($db, $_POST['place_name']);
    $place_information = mysqli_real_escape_string($db, $_POST['place_information']);
    $place_location = mysqli_real_escape_string($db, $_POST['place_location']);
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