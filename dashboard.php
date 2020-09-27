
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
<style>


</style>

</head>
	<!------Nave bar---->
	<body>
	<div class="box">
	
	<div style="float:right; position:absolute; right:0;">
		<img src="img.png" width="100%"; height="100%";>
	</div>
</div>
<nav class="navbar">
	<form>
	<input class="butt" style="position: absolute; margin-left: 40%;width: 5%!important;box-shadow: none!important;background-color:pink;text-align: center !important;color: #FF008C;" type="button" value="Back" onClick="javascript:history.go(-1)" />
</form>
			
		</nav>
	<nav class="navbar"><a class="navbar-brand" href="index.php"><img src="sac.png"></a></nav><br><br><br>
	<div class="gg" style="position: absolute; margin-left: 5%;">
	<center><div class="dashboard">
		<h3 style="color: purple">COURSE CERTIFICATES</h3>
	</div><br></center>
	<div class="searchbar">
		 <form class="search" action="dashboard.php" method="GET" style="margin:auto;max-width:300px">
 		 <input class="mfo" style="width: 400px !important; height: 40px !important;" type="text" placeholder="Enter Your Name" name="ID">

 		 <button class="mfo" style="width: 400px !important; height: 40px !important;" type="submit" ><i  class="fa fa-search" style="color: purple!important;"></i></button>


		 </form>
	</div><br><h3 style="color: pink; margin-left:60%;">or</h3><br>
	<div class="searchbar">
		 <form class="search" action="dashboard.php" method="POST" style="margin:auto;max-width:300px">
 		 <select name="course" class="mfo" style="width: 400px !important; height: 40px !important;color: #FF008C;">
 		 	<option>Select your Course</option>
					<?PHP
					include 'conn.php';
					$query="SELECT * FROM `program` ORDER BY `sno` DESC"; 
					$sql = mysqli_query($conn, $query);
					while($row=mysqli_fetch_array($sql)){
						echo "<option value='".$row['course']."'>".$row['course']."</option>";
					}
				?>
 		 </select>
 		 	<input class="mfo"style="width: 400px !important; height: 40px !important;" type="submit" value="Search">
		 </form>
	</div>
	<center></center></div>
<div class="table">
	<table align="center" border="1" cellpadding="10" cellspacing="0" style="border-color: #f5f6fc;position: absolute;top:40%;left:40%;">
		<tr style="background-color: #f5f6fc;color: #FF008C;"><th>ID </th><th>Student Name</th><th>Course</th><th>Email</th><th>Duration</th><th>print</th></tr>
			<?PHP
				if(isset($_POST['course']))
				{
					$a=$_POST['course'];	
					$query="SELECT * FROM `generate` WHERE `course` = '$a'"; 
					$sql = mysqli_query($conn, $query);
					while($row=mysqli_fetch_array($sql)){
						echo "<tr><td>".$row['sno']."</td><td>".$row['name']."</td><td>".$row['course']."</td><td>".$row['email']."</td><td>".$row['period']."</td><td><a href='certificate.php?ID=".$row['sno']."'>view</a></td></tr>";

					}
				}
				if(isset($_GET['ID']))
				{
					$a=$_GET['ID'];	
					$query="SELECT * FROM `generate` WHERE `name` = '$a'"; 
					$sql = mysqli_query($conn, $query);
					while($row=mysqli_fetch_array($sql)){
						echo "<tr><td>".$row['sno']."</td><td>".$row['name']."</td><td>".$row['course']."</td><td>".$row['email']."</td><td>".$row['period']."</td><td><a href='certificate.php?ID=".$row['sno']."'>view</a></td></tr>";
					}
				}

			?>
	</table>
</div>
</center>

	<!--<div class="print">
		<button >Print</button>
	</div>-->
</body>
</html>
