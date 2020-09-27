<?PHP
	include 'conn.php';
	session_start();
	
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
	
	
	$a=mysqli_real_escape_string($conn,$_POST['username']);
	$b=mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql="SELECT * FROM `admin` WHERE `admin` = '$a'";
	
	
	$query = mysqli_query($conn, $sql);
	
	
	$row = mysqli_fetch_array($query);
	
	if($row['password']==$b)
	{
			$_SESSION['admin']=$row['sno'];
			header('location:Generate.php');
		}

	else
	{
		echo "<script>alert('Password is incorrect.');</script>";
		echo "<script>window.location='index.php';</script>";
	}
}else
{
	echo "<script>alert('Please Check Your Username and Password');</script>";
		echo "<script>window.location='index.php';</script>";


}

?>