
<!DOCTYPE html>
<html>
<head>
</head>
<center>
	<table class="tabu" border="1" cellpadding="5">
		<tr>
			<th>COURSE</th>
			<th>DURATION</th>
			<th>CONTACT</th>
			<th>HOW MANY ARE REGISTERED</th>
			<th>Delete</th>

		</tr>
			<?PHP 
				include 'conn.php';
				if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    				$page_no = $_GET['page_no'];
    			} else {
        			$page_no = 1;
        		}
        		$total = 5;
        		$offset = ($page_no-1) * $total;
				$previous_page = $page_no - 1;
				$next_page = $page_no + 1;
				$adjacents = "2";
				
				$sql="SELECT COUNT(*) As total_records FROM `program`";

				$result_count=mysqli_query($conn, $sql);
				$total_records = mysqli_fetch_array($result_count);
				$total_records = $total_records['total_records'];
				$total_no_of_pages = ceil($total_records / $total);
				$second_last = $total_no_of_pages - 1;


				$sql= "SELECT * FROM `program` LIMIT $offset, $total";
				$query= mysqli_query($conn, $sql);
				$row=mysqli_fetch_array($query);
				
				$curyear = date('Y');
				$curmonth = date('m');
				$curday = date('d');
				
				while($row=mysqli_fetch_array($query))
				{
					$year = substr($row['time'], 0,4);
					
					if($year==$curyear)
					{
						echo "<tr>
								<td>".$row['sno']."</td>
								<td>".$row['course']."</td>
								<td>".$row['periods']."</td>
								<td><a href='search.php?q=".$row['sno']."' target='blank'>Details</a></td>
								<td><a href='delete.php?q=".$row['sno']."' target='blank'>Delete</a></td>
							</tr>";
					}
				}
				
				
			?>
	</table>
	</center>
	<ul class="pagination" style="margin-left: 44%;margin-top: 3%;">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>
    
<li  <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
		
</body>
</html>