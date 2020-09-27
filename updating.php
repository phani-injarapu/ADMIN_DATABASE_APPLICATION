
<?PHP
	include 'conn.php';
	session_start();

	
	if (!isset($_SESSION['admin'])) {
		header('location:index.php');
	}
	else {
		$c=$_SESSION['admin'];
	}

	$a=$_POST['oldpass'];
	$b=$_POST['newpass'];
	$query="SELECT * FROM `admin` WHERE `sno`='$c' ";
	$sql=mysqli_query($conn,$query);
	$row =mysqli_fetch_array($sql);
	echo $row['password'];

	if ($row['password']==$a) {
	$query="UPDATE `admin` SET `password`='$b' WHERE `sno`='$c' "; 
	$sql=mysqli_query($conn,$query);
	if ($sql) {
		header('location:generate.php');
	}
}
	else {
		echo"<script>alert('Password is Incorrect');</script>";
	}


?>