<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>HELP!</title>
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

.card border-success{
	border-color: orange !important;
	border-radius: 10px !important;
}
.bg-image {
  /* The image used */
  background-image: url("img.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height:auto; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;

  background-size: cover;
}

/* Position text in the middle of th
;
e page/image */
.bg-text {
  background-color:#F2F2F2; /* Fallback color */
  color:#5B5A5A;
  font-weight: bold;
  border: 3px solid pink;
  position: absolute;
  border-radius: 15px 50px;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  height:50%;
  text-align: center;
  left: 600px;
  top: 300px;
 }
.card-title
{
display: inline-block;

}
.name
{
text-align: left;
left: 199px;
top:35px;
position: relative;
}
.id
{
text-align:right;
right: 199px;
top: -150px;
position: relative;
}
</style>

</head>
<body >
	<div class="box bg-image">
	<div style="float:right; position:absolute; right:0;">
		<img src="img.png" width="100%"; height="98%";>
	</div>
<header>	<div>
		<nav class="navbar ">
			<ul class="right-menu ml-auto" style="float:right; top:-20px; margin-right: 4%">
			<li><a class="nav-link" href="index.html" style="text-decoration-style: none;color: white;"><i class="fa fa-login">
				<b>LOGIN</b></i></a></li>
    		</ul>
		</nav>
	<div class="input-group">
		 	<div class="sear">
    			<input type="text" class="form-control" placeholder="Certificate no."><i class="fa fa-search fa-2x" aria-hidden="true"></i>
    		</div>
  </div>
</div>
  
<a class="navbar-brand" href="sac.png"><img src="sac.png"></a>

  <div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="addprigram.php">Programs Details</a>
  		<a href="Generate.php">Generate Certificate</a>
      <a href="updating.php">Update Password</a>
      <a href="dashboard.php"> DASHBOARD</a>
 	 	<a href="help.php">Help</a>
<a href="index.php" class="fa fa-sign-out">Log out</a>

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
 </div>  
<section>
	<center>
		<div class="bg-image"></div>
    	<div class="bg-text">
	
  
    <div class="card-body" >
      <div style="position: relative;top: 50px" ><CENTER><tr><td>FEEL FREE TO TALK WITH US</td></tr></CENTER></div>
      <center>
    <div style="position: relative;top: 100px;" >
    <table  cellpadding="10" cellspacing="" >


      <tr><td>I.V.V.S PHANEENDRA  &nbsp &nbsp &nbsp    123456789 &nbsp &nbsp &nbsp ganesh90302629@gmail.com</td></tr>
       <tr><td>GREAT GANESH        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 123456789 &nbsp &nbsp &nbsp ganesh90302629@gmail.com</td></tr>
        <tr><td>GREAT GANESH       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  123456789 &nbsp &nbsp &nbsp ganesh90302629@gmail.com</td></tr>
      </table>
      </center>
        </div><div><a href="Generate.php" style="cursor: pointer;font-size: 22px !important ;position: relative;top: 150px;left: 0%"><i class="fa fa-remove"></i></a></div>

     
</div>



</center>
     </div>
</div>
</section>

</body>
</html>

<?PHP
session_start();
$user = $_SESSION['admin'];
if($user!=1)
{
  header('location:index.php');
}




?>

