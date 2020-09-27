<?PHP
	include 'conn.php';	
	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['course'];
	$query = "SELECT * FROM `program` WHERE `course` = '$c'";
	$sql=mysqli_query($conn, $query);
	$row=mysqli_fetch_array($sql);
	
	$per=$row['periods'];
	
	$query = "INSERT INTO `generate` (`name`, `email`, `course`, `period`) VALUES ('$a', '$b', '$c', '$per')";
	
	$sql = mysqli_query($conn, $query);
	if($sql){
		echo "<script>alert('Details are added Succesfully');</script>";
		echo "<script>window.location='Generate.php';</script>";
	}else{
		echo "<script>alert('Details are not added');</script>";
		echo "<script>window.location='Generate.php';</script>";	
	}
	
?>