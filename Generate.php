<?PHP
	session_start();	
	if(!isset($_SESSION['admin'])){
		echo "<script>alert('Login with your Account first!..');</script>";
		echo "<script>window.location='index.php';</script>";
	}
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>GENERATE CERTIFICATE</title>
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
		<img src="img.png" width="100%"; height="100%";>
	</div>
<header>
	<div>
		<nav class="navbar">
			
		</nav>
	<div class="input-group">
		 	<div class="sear">
				<form action="certificate.php" method="get">
					<input type="text" class="form-control" name="ID" placeholder="Certificate no."><i class="fa fa-search fa-2x" aria-hidden="true"></i>
				</form>
			</div>
  </div>
</div>
  
<a class="navbar-brand" href="sac.png"><img src="sac.png"></a>

  <div id="mySidenav" class="sidenav">
  	<div id="userr"><a href = "index.php"class="fa fa-user-o" style="top:1% !important;">admin@gmail.com</a></div>  
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><hr>
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


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
 </header>
 <section>  
 <center>
<div class="container" style="left:10% !important;">
 	<div class="mform2">
 		    	<h1>Details Of Certificate</h1><br>	
        	<form class="mform" method="post" action="genrating.php">
    			<input type="text" id ="fname" class="mfo" name="name" placeholder="Name" required><br><br>
    			<input type="text" id ="email" class="mfo" name="email" placeholder="Email" required><br><br>
    			<select id = "selll" class="mfo" name="course" style="color:#FF008C !important;cursor: pointer;">
    				<option>--Select--</option>
					<?PHP
					include 'conn.php';
				$query="SELECT * FROM `program` ORDER BY `sno` DESC"; 
				$sql = mysqli_query($conn, $query);
				while($row=mysqli_fetch_array($sql)){
					echo "<option value='".$row['course']."'>".$row['course']."</option>";
				}
				?>
				</select><br><br>    			

    			<button type="submit" class="butt" hidefocus="true" onclick = "passvalues();">Proceed</button>
    		</form>
    	
    </div>

    </div>
    </center>
    <script>
function passvalues()
{
var firstname = document.getElementById("fname").value;
localStorage.setItem("fnam",firstname);

var cours = document.getElementById("selll").value;
localStorage.setItem("co",cours);

var email = document.getElementById("email").value;
localStorage.setItem("email",email);
var d = document.getElementById("seel").value;
localStorage.setItem("du",d);

}
</script>
</section>

</body>
<footer>
	<center>
<i class="fa fa-copyright" style="position: absolute; !important;bottom: 5% !important;left:45%!important;">copy right 2019</i>
<div class="contain" style="position: absolute; !important;bottom: 5% !important;left:85%!important;">
	<a href="help.php">Contact us</a>
	</div>
</center>

</footer>
</html>



