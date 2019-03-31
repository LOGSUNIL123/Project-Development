<?php
 include('../dbcon.php');
      $rno  = $_POST['rollno'];
  	  $name = $_POST['name'];
  	  $city = $_POST['city'];
  	  $pcont= $_POST['pcon'];
  	  $stand= $_POST['std'];
  	  $id = $_POST['sid'];
      // $imagename = $_FILES['img']['name'];
      // $tempname = $_FILES['img']['temp_name'];
      // $folder = "dataimg/".$imagename;
      // move_uploaded_file($tempname,"../dataimg/$imagename");
  	  

$query = "UPDATE `student` SET `rollno`=' $rno',`name`='$name',`city`='$city',`pcont`='$pcont',`standard`='$stand' WHERE `id` = $id";

   $run=mysqli_query($con,$query);

    if($run==true)
    {
    	?>
    	<script>
    		alert("Data Updated Successfuly");
    		window.open('updateform.php?sid=<?php echo $id;?>','_self');
    	</script>
    	<?php
      }
?>
