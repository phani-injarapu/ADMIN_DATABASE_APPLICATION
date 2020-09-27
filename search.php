
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "jquer-2.1.4.js"></script>
<script src = "jspdf.min.js"></script>
<link rel = "stylesheet" type = "text/css" >

</head>
<body >
	<div class="box">
	<div style="float:right; position:absolute; right:0;">
		<img src="img.png" width="100%"; height="98%";>
	</div>
<header>
<body>
	<nav>


	
	</nav>	

	<center>
	<div class="main">
		<br><br>
		<div class="bar">
			<h2 class="h2">Students Info</h2>
		</div>
		<?PHP
			include 'connect.php';
			if(isset($_GET['ID'])){
				$a = $_GET['ID'];
				$sql = "SELECT * FROM `outpass` WHERE `sno` = '$a'";
				$query = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($query);
				
				
				echo "<div class='sub'>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		           </div>";
			}else{
				header('location:index.php');
			}
		?>


<div style="top:-248px; position:relative; margin-left:50px;display: inline-flex;">
	<div>
		<table class="table"> 
		<tr> <th colspan="3">STUDENT OUT PASS</th></tr>
		<tr>
			<td><h4> ID-Number: &nbsp &nbsp  <?php echo $row['sno']; ?><p></h4>
			<td><p>Student Name:  &nbsp &nbsp <?php echo $row['studentname']; ?></p></td>
		</tr>
		<tr>
			<td><h4>Branch:  &nbsp &nbsp <?php echo $row['branch']; ?><h4></td>
			<td><h4>Roll Number: &nbsp &nbsp  <?php echo $row['roll']; ?><h4></td>	
		</tr>
		<tr>
			<td><h4>Year: &nbsp &nbsp <?php echo $row['studying']; ?><h4></td>
			<td><h4> Leaveing Date/Time:  &nbsp &nbsp<?php echo $row['leaving']; ?><h4></td>
		</tr>
		<tr>
			<td><h4>Return Date/Time:&nbsp &nbsp  <?php echo $row['arraival']; ?><h4></td>
			<td><h4>Place/Address: &nbsp &nbsp <?php  echo $row['place']; ?><h4></td>
		</tr>
		<tr>
			<td><h4>Phonenumber: &nbsp &nbsp <?php  echo $row['phone']; ?><h4></td>
			<td><h4>Reason:&nbsp &nbsp  <?php  echo $row['reason']; ?> <h4></td>
		</tr>
		<tr>
			<td><h4>Issued Time/Date: &nbsp &nbsp <?php  echo $row['datm']; ?> <h4></td>
			<td><h4></h4></td>	
		</tr>
		
		</table>
	</div>
</div>
</center>
</body>
</html>