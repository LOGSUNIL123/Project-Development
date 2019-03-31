<?php
error_reporting(1);
  session_start();

      	if (isset($_SESSION['uid'])){
      	
      	      }
      	else
      	{
      		header('location: ../login.php');
      	}
?>
<?php
   include('header.php');
   include ('titlehead.php');
   include ('../dbcon.php');

   $sid = $_GET['sid'];
   $qry = "SELECT * FROM `student` WHERE `id`='$sid'";
   $run = mysqli_query($con,$qry);
   $data = mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedataquery.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width:70%; margin-top:40px;">
		<tr>
			<th>Rollno</th>
			<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>"></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>" ></td>
		</tr>		<tr>
			<th>City</th>
			<td><input type="text" name="city" value="<?php echo $data['city']; ?>" ></td>
		</tr>
		<tr>
			<th>Parents Contact No</th>
			<td><input type="text" name="pcon" value="<?php echo $data['pcont']; ?>" ></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="std" value="<?php echo $data['standard']; ?>" ></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="img" value="<?php echo $data['image']; ?>" ></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>

</body>
</html>