<?php include('header.php') ?>
<html>

<body>
    <div class="main">
<?php
include ('connection.php');
$sql ="select * from products";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
   <div class="report-container">
	<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>price</th>
<th>quantity</th>
<th>category</th>
<th>details</th>
<th>image</th>
<th>update</th>
<th>delete</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['price']."</td>
				<td>".$result['quantity']."</td>
				<td>".$result['cat']."</td>
				<td>".$result['details']."</td>
          	<td>".$result['image']."</td>

				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & gmail=$result[gmail] & number=$result[number] &address=$result[address]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found <br>
   <a href = 'index.php'> Home</a>";

}
?>
</table>
</div>
</div>
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['firstname']." ".$result['lastname']." ".$result['gmail']."  ".$result['number']."  ".$result['address']."<br>";_----->

