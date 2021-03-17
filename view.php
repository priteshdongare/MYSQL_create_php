<?php

include 'connection.php';

$Id = $_GET['Id'];

$q = " select * FROM `crud` WHERE Id = $Id ";

$query=mysqli_query($con, $q);


while($res = mysqli_fetch_array($query)){
    ?>
    <tr class="text-center">
    <td> <?php echo $res[0];  ?> </td>
    <td> <?php echo $res[1];  ?> </td>
    <td> <?php echo $res[2];  ?> </td>
    </tr>
    <?php } ?>