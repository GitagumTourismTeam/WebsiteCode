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
    $id = mysqli_real_escape_string($db, $_GET['id']);

    // Process Data
    $sql="SELECT * FROM events where id='$id'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $file_name =  $row['photo_file'];
    unlink('../../img/uploaded/'.$file_name);

    // delete from database
    $sql = "DELETE FROM events where id='$id'";
    $result = mysqli_query($db, $sql);
    
    // Go back To Events table
    header('Location:index.php');
?>
