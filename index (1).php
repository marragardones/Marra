<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Homepage</title>
</head>

<body> 
<br>
<div class="container">
<div class="btn-group">
  <a href="index.php" class="btn btn-primary active" aria-current="page">Home</a>
  <a href="add.php" class="btn btn-outline-success">Add New User</a>
  
</div>
</div>




    <br>
   
    <div class="container"><h2 align="center">Dashboard</h1><br/><br/></div>
                        
    <div class="container">
        <table class='table table-bordered table-striped'>
         <thead>
        <tr>
            <th>Name</th> 
            <th>Mobile</th> 
            <th>Email</th> 
            <th>Action</th>
    </tr>
     <?php                                 
    while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
            <a href="edit.php?id= <?php echo $row['id']; ?>" class='btn btn-primary'  onclick="sample()">Edit</a>
            <a href="delete.php?id= <?php echo $row['id']; ?>" class='btn btn-danger' onclick="sample()">Delete</a></td>
        </tr>
    <?php } 
?>

  <!--   <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo  "<td>
        <a href='edit.php?id=$user_data[id]'> Edit</a>
        <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?> -->
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script>
    function sample(){
        Swal.fire(
  'are you sure you want to delete?',
  'You clicked the button!',
  'success'
)
    }
    </script>

    </html>