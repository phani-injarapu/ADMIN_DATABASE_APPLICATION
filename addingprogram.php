<?PHP
	include 'conn.php';
	
	$a=$_POST['course'];
	$b=$_POST['due'];
	
	echo $a;
	echo $b;
	
	$query = "INSERT INTO `program` (`course`, `periods`) VALUES ('$a', '$b')";
	$sql = mysqli_query($conn, $query);
	
	if($sql){
		echo "<script>alert('Added Succesfully!..');</script>";
		echo "<script>window.location='addprogram.php';</script>";
	}else{
		
	}
	
?>