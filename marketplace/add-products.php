<?php include('header.php'); ?><html>
<head>
	<title>insert</title>

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
<div class="row text-center">
	<div class="container" >
		  <div class="report-header">
		<h1 class="recent-Articles">Add Products</h1>
		    </div>
	<form action="add-products.php" method="post" enctype="multipart/form-data">
		<label for="" > Product Name</label>
	<input type="text" name="name" placeholder="name" required><br><br>
	<label for=""> Product Price</label>
	<input type="number" name="price" placeholder="price" required><br><br>
	<label for=""> Product Quantity</label>
	<input type="number" name="quantity" placeholder="quantity" required><br><br>
	<label for=""> Product Category</label>
	<input type="text" name="category" placeholder="category" required><br><br>
	<label for=""> Product Description</label>
	<textarea name="details" placeholder="details"></textarea><br><br>
	<label for=""> Product Image</label>
   <input type="file" name="image"  placeholder="image"><br><br>
	<input type="submit" name="submit" value="insert" style = "font-size:25px"><br><br>
	</form>
<button><a href="products.php">show all products</a></button>
	</div>
</div>
</div>
</div>
</body>
</html>
<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
   $image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
   $path = "images/".$image_name;
  	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$category = $_POST['category'];
	$details = $_POST['details'];
	$sql = "INSERT INTO `products` VALUES
   ('$id','$name','$price','$quantity','$category','$details', '$image_name')";
	$data=mysqli_query($con,$sql);
   if(move_uploaded_file($image_temp, $path)){
      echo "image uploaded";
   } else {
      echo "failed to upload image";}
	if ($data) {
		echo "insert";
		header('location: products.php');
	}else
	{
		echo "sorry";
	}
}
?>
