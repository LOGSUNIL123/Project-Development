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
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width:70%; margin-top:40px;">
		<tr>
			<th>Rollno</th>
			<td><input type="text" name="rollno" placeholder="Enter Your Roll No"></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Your Full Name" required=""></td>
		</tr>		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter Your City" required=""></td>
		</tr>
		<tr>
			<th>Parents Contact No</th>
			<td><input type="text" name="pcon" placeholder="Enter Parents Contact No" required=""></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="std" placeholder="Select Your Standard" required=""></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="img" required=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

</body>
</html>

<?php
  if (isset($_POST['submit']))
   {
  	  include('../dbcon.php');
      $rno  = $_POST['rollno'];
  	  $name = $_POST['name'];
  	  $city = $_POST['city'];
  	  $pcont= $_POST['pcon'];
  	  $stand= $_POST['std'];
      // $imagename = $_FILES['img']['name'];
      // $tempname = $_FILES['img']['temp_name'];
      // $folder = "dataimg/".$imagename;
      // move_uploaded_file($tempname,"../dataimg/$imagename");
  	  

$query = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`) VALUES ('$rno','$name','$city','$pcont','$stand')";

   $run=mysqli_query($con,$query);
    if($run==true)
    {
    	?>
    	<script>
    		alert("Data Inserted Successfuly");
    	</script>
    	<?php
      }
    }
?>

