<?PHP 
	include 'conn.php';
	session_start();	
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
	}
	if (isset($_GET['q'])) {
		$a=$_GET['q'];
	$query = "DELETE FROM `program` WHERE `sno`='$a' ";
	$sql=mysqli_query($conn,$query);
	if ($sql) {
		echo "<script>alert('Program Deleted Successfully');</script>";
		echo "<script>window.location='addprogram.php';</script>";
	}
	else{
		echo "Problem Arraived";
	}
	}
	else {
		header('location:index.php');
	}
	
?>