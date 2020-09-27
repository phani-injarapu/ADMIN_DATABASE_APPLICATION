<?PHP
	session_start();	
	if(!isset($_SESSION['admin'])){
		echo "<script>alert('Login with your Account first!..');</script>";
		echo "<script>window.location='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROGRAMS</title>
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

.col{
    padding-top: .75rem;
    padding-bottom: .75rem;
    background-color: #A5C2FE;
    border: 1px solid #FF008C;
    color:#236D91;
    font-size: 18px;
}
.row{
	margin-left: 10%;
	margin-right: 10%;
	border:2px solid #FF008C;
	border-radius: 2px !important;

}

</style>

</head>
<body >
	<div class="box">
	<div style="float:right; position:fixed; right:0;">
		<img src="img.png" width="100%"; height="98%";>
	</div>
<header>
	<div>
		<nav class="navbar">
			
		</nav>
	<div class="input-group">
		 	<div class="sear">
    			<input type="text" class="form-control" placeholder="Certificate no."><i class="fa fa-search fa-2x" aria-hidden="true"></i>
    		</div>
  </div>
</div>
  
<a class="navbar-brand" href="#"><img src="sac.png"></a>

  <div id="mySidenav" class="sidenav">
  	<div id="userr"><a href = "index.php"class="fa fa-user-o" style="top:5% !important;">admin@gmail.com</a></div> 		
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <hr style="color:red !important">
  		<a href="addprogram.php">Programs Details</a>
  		<a href="Generate.php">Generate Certificate</a>
  		<a href="update.php">Update Password</a>
  		<a href="dashboard.php"> Dashboard</a>
 <a href="logout.php" class="fa fa-sign-out">Log out</a>
</div>
	<div>
		<nav class="navbar">
			<ul class="right-menu ml-auto" style="float:left; top:30px; margin-right: 100%;position: fixed;"><li>
				<span style="font-size:30px;cursor:pointer;color: #FF008C;top:-20px;" onclick="openNav()">&#9776;</span>
 			</li>
			</ul>
		</nav>
	</div>
</div>
</header>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="row" style="position:absolute;width: 80%!important;">
    <div class='col'style="background-color: #f5f6fc !important; color: #FF008C"><b>COURSE</b></div>
	<div class='col'style="background-color: #f5f6fc !important; color: #FF008C"><b>DURATION</b></div>
	
	<div class='col'style="background-color: #f5f6fc !important;color: #FF008C"><b>REMOVE THE COURSE</b></i></a></div>
  </div><br><br><br>

<section>
	
		 <?PHP 
				include 'conn.php';
				$query="SELECT * FROM `program` ORDER BY `sno` DESC"; 
				$sql = mysqli_query($conn, $query);
				while($row=mysqli_fetch_array($sql)){
					
		 echo "

  <div class='row' style:'position:absolute;'>
    <div class='col'>".$row['course']."</div>
	<div class='col'>".$row['periods']."</div>

	<div class='col'><a href='delete.php?q=".$row['sno']."' id='remove'><i class='fa fa-remove'>Remove</i></a></div>
  </div><br>";
				}
?>
<center><br><br><br>
<div class="container">
<a href="add.php"><button class="butt" style="margin-left:30%;width: 8%;height:18%;">ADD</button></a>
</div><br><br><br><br>
</center>
</section>
</body>

</html>

