<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>CERTIFICATE!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

<style>
.col-xl{
	width: 300px !important;
}
.idd{
	margin-top:19%;
	font-size: 30px;
}
.container{
	margin-left: -2% !important;
	margin-top: 0% !important;
	width:100% !important;
	margin-right: -100% !important;
	position: fixed !important;
}
#container {
    width: 300px;
    background-color: #ffcc33;
    margin: auto;
	position:absolute !important;
}
#first {
    width: 100px;
    float: left;
    height: 300px;
        background-color: blue;
}
#second {
    width: 200px;
    float: left;
    height: 300px;
    background-color: green;
}
.gs{
	position: absolute;
	left: 145;

}
.sk{
	position: absolute;
	right: 145;
}
</style>
<style type="text/css" media="print">
  @page { 
  	size: landscape; 
  		margin:0;
  		padding: 0;
  	}

</style>

<body>
	<?PHP 
		include 'conn.php';
		if(isset($_GET['ID'])){
			$q = $_GET['ID'];
			$sql = "SELECT * FROM `generate` WHERE `sno` = '$q'";
			$query=mysqli_query($conn, $sql);
			$row=mysqli_fetch_array($query);
			if($row['sno']!=$q){
				header('location:generate.php');
			}
		}else{
			header('location:generate.php');
		}
	?>
	<div id="printableArea">
	<div class="container" style="background-color:#f5f6fc;position: absolute !important;">

<img src="cback2.png" style="width:1100px; height:1000px;position: absolute;margin-left: 5%;margin-top: 4%;">

<div style="width:1600px; height:900px;position: absolute; text-align:center;margin-left: 3%;margin-top: 1%;">
	<div style="width:1500px; height:1000px;position: absolute; text-align:center;border: 20px solid purple;margin-left: 1%;margin-top: 2%;">


		<img src="sac.png" width="300px" height="300px">
		<div style="font-size: 30px; position:relative;top:-15%;left: 25%;">
		<span style="font-size:50px"><b><i>ID:</i></b></span>    <span></span>                                             
		 <?PHP echo "<b style='color:#FF004C;font-size:50px'>".$row['sno']."</b>";?></div>

       <span style="font-size:100px; font-weight:bold;color:#080071"><i>COURSE CERTIFICATE</i></span>
       <br><br>
       <span style="font-size:40px; color:black"><b>THIS CERTIFICATE IS AWARDED TO </b></span>
       <b><span id="name"></span></b><br>
		<?PHP echo "<br><b style='color:#FF004C;font-size:40px'>".$row['name']."</b><br><br>";?>
       <span style="font-size:40px"><b>FOR SUCCESSFULLY COMPLETING THE COURSE </b></span>
       <span></span>
		<?PHP echo "<br><b style='color:#FF004C;font-size:40px'>".$row['course']."</b><br><br>";?>
       <span style="font-size:40px"><b>IN THE DUE PERIOD OF&nbsp&nbsp</b></span>
       <span> </span>
      <?PHP echo "<b style='color:#FF004C;font-size:40px'>".$row['period']."</b>";?>
      <span style="font-size:40px"><b>&nbsp&nbspDays</b></span>
	
	<div class="row">
		<div class="col-sm">
		<div class="gs">
	<br><br><span style="font-size:35px; color:#080071;"><b><i>GIRISH</i></b></span><br>
	<span style="font-size:20px; color:#080071;"><b><i>Course Director</i></b></span><br><br></div>
		</div>
		<div class="sk">
		<div class="col-sm">
		<br><br><span style="font-size:35px; color:#080071;"><b><i>SURESH KUMAR</i></b></span><br>
		<span style="font-size:20px; color:#080071;"><b><i>SAC Incharge</i></b></span><br></div>
		</div>
</div>



</div>

</div>

</div>
</div>

<script type="text/javascript">

	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>