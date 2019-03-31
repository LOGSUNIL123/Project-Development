<?php
  function showdetails($rollno,$stand){

     include('dbcon.php');
  	$sql ="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$stand'";

  	$run= mysqli_query($con,$sql);

  	if($data=mysqli_fetch_assoc($run))
  	{
        ?>
           <table align="center" border="1" style="margin-top: 20px; width: 50%">
           	<tr>
           		<th colspan="3">Student Details</th>
           	</tr>
           	<tr>
           		<td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"></td>
           		<th>Roll No</th>
           		<td><?php echo $data['rollno'] ?></td>
           	</tr>
           	<tr>
           		<th>Name</th>
           		<td><?php echo $data['name'] ?></td>
           	</tr>
           	<tr>
           		<th>Standard</th>
           		<td><?php echo $data['standard'] ?></td>
           	</tr>
           	<tr>
           		<th>Parents Contact No</th>
           		<td><?php echo $data['pcont'] ?></td>
           	</tr>
           	<tr>
           		<th>City</th>
           		<td><?php echo $data['city'] ?></td>
           	</tr>
           </table>

        <?php
  	}
  	else{
  		echo "<script>alert('No Record Found')</script>";
  	}
  }
?>