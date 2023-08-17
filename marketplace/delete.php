<?php
include ('connection.php');
$id = $_GET['id'];
$sql ="DELETE FROM `products` WHERE id='$id'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:products.php');
}else
{
	echo "error";
}
 ?>
