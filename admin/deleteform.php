<?php
 include('../dbcon.php');
      
  	  $id = $_REQUEST['sid'];

$query = "DELETE FROM `student` WHERE `id`=' $id';";

   $run=mysqli_query($con,$query);

    if($run==true)
    {
    	?>
    	<script>
    		alert("Data Deleted Successfuly");
    		window.open('deletestudent.php','_self');
    	</script>
    	<?php
      }
?>
