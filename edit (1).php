 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php
include_once("config.php");


if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

	
	$result = mysqli_query($mysqli, "UPDATE user SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

	
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<h3 align="center"><a href="index.php">Home</a></h3>
	<br/><br/>
	<div class="center">
<div class="container">
	<form name="update_user" method="post" action="edit.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?> class="form-control"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?> class="form-control"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?> class="form-control"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" class="btn btn-primary"  onclick="sample()"></td>
			</tr>
		</table>
	</form>
</div></div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script>
    function sample(){
        Swal.fire(
  'are you sure you want to edit?',
  'You clicked the button!',
  'success'
)
    }
    </script>

    </html>
