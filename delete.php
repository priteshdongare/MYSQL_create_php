<?php

include 'connection.php';

$Id = $_GET['Id'];

$q = " DELETE FROM `crud` WHERE Id = $Id ";

mysqli_query($con, $q)

header('location:display.php');

?>