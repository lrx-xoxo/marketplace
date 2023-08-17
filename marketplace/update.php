<!DOCTYPE html>

<?php include('header.php'); ?>

<html>
<head>
	<title>update</title>
   <style>
     td {

    text-align: center;
    vertical-align: middle;
  }

th{
  background-color: #ededed;
}

   </style>
</head>
<body>
	<header>

		<div class="logosec">
			<div class="logo">Marketplace</div>
			<img src= "images/bars-solid.svg"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src= "images/magnifying-glass-solid.svg"
      class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="images/table-columns-solid.svg"
            class="nav-img"
							alt="dashboard">

						<h3> Dashboard</h3>
					</div>

					<div class="option2 nav-option" href="index.html">

						<img src = "images/shop-solid.svg"
            	class="nav-img"
							alt="products">
						<h3 ><a href="products.php"> Products </a></h3>

					</div>

					<div class="nav-option option3">
						<img src=
"images/chart-simple-solid.svg"
							class="nav-img"
							alt="report">
						<h3> Report</h3>
					</div>

					<div class="nav-option option4">
						<img src= "images/credit-card-regular.svg"
							class="nav-img"
							alt="orders">
						<h3> Orders </h3>
					</div>

					<div class="nav-option option5">
						<img src= "images/id-card-solid.svg"
            	class="nav-img"
							alt="profile">
						<h3> Profile</h3>
					</div>

					<div class="nav-option option6">
						<img src= "images/gear-solid.svg"
							class="nav-img"
							alt="settings">
						<h3> Settings</h3>
					</div>

					<div class="nav-option logout">
						<img src=
"images/right-from-bracket-solid.svg"
							class="nav-img"
							alt="logout">
						<h3>Logout</h3>
					</div>

				</div>
			</nav>
		</div>

    <div class="report-container">
      <div class="report-header">
        <h1 class="recent-Articles">Update Products</h1>
      </div>


<form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>"><br><br>
	<input type="text" name="name" placeholder="name" value="<?php echo
   $_GET['name']; ?>"><br><br>
	<input type="text" name="price" placeholder="price" value="<?php echo
   $_GET['price']; ?>"><br><br>
	<input type="text" name="quantity" placeholder="quantity" value="<?php echo
   $_GET['quantity']; ?>"><br><br>
	<input type="text" name="category" placeholder="category" value="<?php echo
   $_GET['category']; ?>"><br><br>
  	<textarea type="text" name="details" placeholder="details" rows="5" cols="20" value="<?php echo
   $_GET['details']; ?>"></textarea><br><br>
   <input type="file" name="image" placeholder="image" value="<?php echo
   $_GET['image']; ?>"><br><br>

	<input type="submit" name="submit" value="update">
</form>

<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$name = $_GET['name'];
	$price = $_GET['price'];
	$quantity = $_GET['quantity'];
	$category = $_GET['category'];
	$details = $_GET['details'];
   $image = $_GET['image'];
 	$sql="UPDATE products SET name='$name' , price='$price', quantity='$quantity' ,
   cat='$category', details='$details', image='$image'  WHERE id='$id'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:products.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>
</div>
</div>
</body>
</html>
