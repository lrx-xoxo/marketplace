<?php
	require_once 'connection.php';
	if(ISSET($_POST['update'])){
		$id = $_POST['id'];
		$image = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$category = $_POST['cat'];
		$exp = explode(".", $image);
		$end = end($exp);
		$name = time().".".$end;
		$path = "images/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `products` set `name` = '$name',
               `quantity` = '$quantity', `image` = '$name' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script>alert('User account updated!')</script>";
					header("location: index.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>
