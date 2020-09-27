<?PHP
	session_start();

	if (isset($_SESSION['admin'])) {
		$a=$_SESSION['admin'];
		session_destroy();
		unset($_SESSION['admin']);
		echo "<script>alert('Do You Want To LogOut');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	else {
		header('location:index.php');
	}


?>