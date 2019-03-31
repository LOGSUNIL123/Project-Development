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
<table align="center">
<form action="deletestudent.php" method="post">
   <tr>
   	<th>Enter Standard</th><td><input type="number" name="standard" placeholder="Enter standard" required=""></td>
    <th>Enter Student Name</th><td><input type="text" name="stname" placeholder="Enter Student Name" required=""></td>
    <td colspan="2"><input type="submit" name="submit" value="search"></td>
   </tr>
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top: 10px;">
	<tr style="background-color:#000; color: #fff;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edit</th>
	</tr>

<?php
   if(isset($_POST['submit']))
   {
   	  include('../dbcon.php');
       $stnd =  $_POST['standard'];
       $stname= $_POST['stname'];

   	  $query="SELECT * FROM `student` WHERE `standard`='$stnd' AND  `name` LIKE '%$stname%'";

   	  $run=mysqli_query($con,$query);
   	  if(mysqli_num_rows($run)<1)
   	   {
   	  	echo "<tr><td colspan='5'>Record Is Not Found !!!!</td></tr>";
   	   }
   	  else
   	    {
         $count=0;
   	  	while ($data = mysqli_fetch_assoc($run)) 
   	  	{
   	  		$count++;
   	  	   ?>
			    <tr align="center">
					 <td><?php echo $count; ?></td>
					 <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px; "/></td><td><?php echo $data['name'];?></td>
					<td><?php echo $data['rollno'];?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
				</tr>
             <?php	
   	  	}
   	  }

   }
?>


</table>

