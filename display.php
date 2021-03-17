<html>
<head>
 <title></title>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
    </script>

  <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br> <a href="indexs.php" class="btn btn-primary">ADD USER</a><br>
 <table  id="userTable" class=" table table-striped table-hover table-bordered">
 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Password </th>
 <th> Delete </th>
 <th> Update </th>
 <th>View</th>

 </tr >
</thead>
<tbody>
 <?php

include 'connection.php';
$q = "select * from crud";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Id'];  ?> </td>
 <td> <?php echo $res['Username'];  ?> </td>
 <td> <?php echo $res['Password'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="upadte.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Update </a> </button> </td>
 <td> <button class="btn-danger btn"> <a href="view.php?Id=<?php echo $res['Id']; ?>" class="text-white"> view </a>  </button> </td>

 </tr>

 <?php 
 }
  ?>
 </tbody>
 </table>  

 </div>
 </div>

 
</body>
</html>
