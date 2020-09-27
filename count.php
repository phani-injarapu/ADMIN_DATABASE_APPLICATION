<?PHP

include 'conn.php';
	$sql="SELECT count(id) AS total FROM generate where course = 'Photography' ";
	$result=mysqli_query($conn,$sql);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;			

?>