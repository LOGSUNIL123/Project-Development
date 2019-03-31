<?php
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
    // include ('titlehead.php');
?>
<div class="admintitle" align="center">
  <a href="logout.php" style="float:right;margin-right:30px;color: #fff;font-size:20px;">Logout</a>
  <!-- <h4 id="log"><a href="logout.php">Logout</a></h4> -->
  <h1>Welcome To Admin Dashboard</h1>
</div>
  <div class="dashboard">
 	<table border="1" width="50%" align="center">
 		<tr>
 			<td align="center">1.</td><td align="center" ><a href="addstudent.php">Insert Student Deatils</a></td>
 		</tr>
 		<tr>
 			<td align="center">2.</td><td align="center"><a href="deletestudent.php">Delete Student Deatils</a></td>
 		</tr>
 		<tr>
 			<td align="center">3.</td><td align="center"><a href="updatestudent.php">Update Student Deatils</a></td>
 		</tr>
 	</table>
</div>
</body>
</html>