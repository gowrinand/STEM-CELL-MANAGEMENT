<?php
$TID = (isset($_POST['TID']) == TRUE) ? $_POST['TID'] : '';
$connection = mysqli_connect('localhost', 'root', '', 'stem cell management');
if (!$connection)
    die("failed to create connection" . mysqli_connect_error());
$query = "DELETE FROM `transplant_details` WHERE `TRANSPLANT_ID` = '$TID' ";
if (mysqli_query($connection, $query))
    echo "DATA DELETED";
else
    echo "ERROR";
