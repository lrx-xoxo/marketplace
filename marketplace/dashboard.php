<!DOCTYPE html>
<?php include("auth_session.php"); ?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Marketplace</title>
<script src="https://kit.fontawesome.com/aa63bab8a8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet"
		href="css/style.css">
	<link rel="stylesheet"
		href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />


    <style media="screen">

      /* Main CSS Here */


* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
:root {
--background-color1: #fafaff;
--background-color2: #ffffff;
--background-color3: #ededed;
--background-color4: #E7edee;
--primary-color: #76b5c5;
--secondary-color: #5e919e;
--Border-color: #6aa3b1;
--one-use-color: #66a3bd;
--two-use-color: #66b5bd;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(64, 108, 119, 1);
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: 27px;
font-weight: 600;
color: rgb(37, 150, 190);
}

.icn {
height: 30px;
}
.menuicn {
cursor: pointer;
}

.searchbar,
.message,
.logosec {
display: flex;
align-items: center;
justify-content: center;
}

.searchbar2 {
display: none;
}

.logosec {
gap: 60px;
}

.searchbar input {
width: 250px;
height: 42px;
border-radius: 50px 0 0 50px;
background-color: var(--background-color3);
padding: 0 20px;
font-size: 15px;
outline: none;
border: none;
}
.searchbtn {
width: 50px;
height: 42px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 0px 50px 50px 0px;
background-color: #C9E7EE;
cursor: pointer;
}

.message {
gap: 40px;
position: relative;
cursor: pointer;
}
.circle {
height: 7px;
width: 7px;
position: absolute;
background-color: #fa7bb4;
border-radius: 50%;
left: 19px;
top: 8px;
}
.dp {
height: 40px;
width: 40px;
background-color: #626262;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
}
.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}
.dpicn {
height: 42px;
}

.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
background-image:
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
width: 5px;
}
.main::-webkit-scrollbar-track {
background-color: #9e9e9eb2;
}

.box-container {
display: flex;
justify-content: space-evenly;
align-items: center;
flex-wrap: wrap;
gap: 50px;
}
.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(64, 108, 119, 1);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}
.nav-option:hover {
border-left: 5px solid #a2a2a2;
background-color: #dadada;
cursor: pointer;
}
.nav-img {
height: 30px;
width: 35px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option1 {
border-left: 5px solid #2596be;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option1:hover {
border-left: 5px solid #2596be;
background-color: var(--Border-color);
}
.box {
height: 130px;
width: 230px;
border-radius: 20px;
box-shadow: 3px 3px 10px rgba(41, 134, 166, 1);
padding: 20px;
display: flex;
align-items: center;
justify-content: space-around;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}
.box:hover {
transform: scale(1.08);
}

.box:nth-child(1) {
background-color: var(--one-use-color);
}
.box:nth-child(2) {
background-color: var(--two-use-color);
}
.box:nth-child(3) {
background-color: var(--one-use-color);
}
.box:nth-child(4) {
background-color: var(--two-use-color);
}

.box img {
height: 50px;
}
.box .text {
color: white;
}
.topic {
font-size: 13px;
font-weight: 400;
letter-spacing: 1px;
}

.topic-heading {
font-size: 30px;
letter-spacing: 3px;
}

.report-container {
min-height: 300px;
max-width: 1200px;
margin: 70px auto 0px auto;
background-color: #ffffff;
border-radius: 30px;
box-shadow: 3px 3px 10px rgb(188, 188, 188);
padding: 0px 20px 20px 20px;
}
.report-header {
height: 80px;
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 20px 10px 20px;
border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Activities {
font-size: 30px;
font-weight: 600;
color: #609DAD;
}

.button {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #609DAD;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
margin: auto;
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: 1120px;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
margin: auto;
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
}

.label-tag {
width: 100px;
text-align: center;
background-color: rgb(0, 177, 0);
color: white;
border-radius: 4px;
}

    </style>
</head>

<body>

	<!-- for header part -->
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
						<h3> <a href="order.php">Orders </a> </h3>
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
						<h3><a href="logout.php">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">


			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading"></h2>
						<h2 class="topic">Views</h2>
					</div>

				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading"></h2>
						<h2 class="topic">Users</h2>
					</div>

				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading"></h2>
						<h2 class="topic">...</h2>
					</div>

				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading"></h2>
						<h2 class="topic">...</h2>
					</div>

				</div>
			</div>

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Activities">Recent Activities</h1>
          <a href="products.php" class = "button">View All</a>
					<!-- <button class="view" onclick="products.html">View All</button> -->
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Products</h3>
						<h3 class="t-op">Views</h3>
						<h3 class="t-op">Stock</h3>
						<h3 class="t-op">Status</h3>
					</div>

					<div class="items" style="text-algin:center;">
						<div class="item1">
							<h3 class="t-op-nextlvl">  73</h3>
							<h3 class="t-op-nextlvl">2.9k</h3>
							<h3 class="t-op-nextlvl">21</h3>
							<h3 class="t-op-nextlvl label-tag">Active</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">  72</h3>
							<h3 class="t-op-nextlvl">1.5k</h3>
							<h3 class="t-op-nextlvl">260</h3>
							<h3 class="t-op-nextlvl label-tag">Active</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">  71</h3>
							<h3 class="t-op-nextlvl">1.1k</h3>
							<h3 class="t-op-nextlvl">13</h3>
							<h3 class="t-op-nextlvl label-tag">Active</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">  70</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">420</h3>
							<h3 class="t-op-nextlvl label-tag">Active</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">  69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl label-tag">Active</h3>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>

	<script >
    let menuicn = document.querySelector(".menuicn");
    let nav = document.querySelector(".navcontainer");

    menuicn.addEventListener("click", () => {
	  nav.classList.toggle("navclose");
    })

  </script>
</body>
</html>
