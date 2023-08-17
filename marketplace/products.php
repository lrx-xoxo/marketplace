<!DOCTYPE html>
<?php include("auth_session.php"); ?>
<?php include('header.php');
       ?>

  <head>

<style media="screen">
.option2 {
border-left: 5px solid #2596be;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option2:hover {
border-left: 5px solid #2596be;
background-color: var(--Border-color);
}
td{
  text-align: center;
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

              <h3> <a href="dashboard.php"> Dashboard</a></h3>
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
              <h3> <a href="order.php">Orders </a></h3>
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
    <!-- <section class="content-header">

      <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">Product List</li>
      </ul>
    </section>
    <br> -->
    <div class="main">
      <?php
      include ('connection.php');
      $sql ="select * from products";
      $data =mysqli_query($con,$sql);
      $total=mysqli_num_rows($data);
      if ($total=mysqli_num_rows($data)) {
      	?>

    <div class="report-container">
      <div class="report-header">
        <h1 class="products-list">List of Products</h1>
        <a href="add-products.php">Add New Products</a>
      </div>

      <div class="control-group">
          <table name="booklist" id="dtable" width="1100" align="center" >
        <tr>
          <th>Product ID</th>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Product Category</th>
          <th>Product Quantity</th>
          <th>Product Details</th>
          <th>Product Image</th>
          <th>Function</th>
        </tr>

    <?php
  	while ($result = mysqli_fetch_array($data)) {
      $imageURL = 'images/'.$result["image"];
  		echo "	<tr class='tb1'>";
  		echo	"	<td>".$result['id']."</td>";
  		echo	"	<td>".$result['name']."</td>";
      echo  "  <td>".$result['price']."</td>";
  		echo	"	<td>".$result['cat']."</td>";
  		echo	"	<td>".$result['quantity']."</td>";
      echo "<td><a href='#details' data-toggle='modal' class='btn' data-id='".$result['id']."'> View</a></td>";
  		echo	"	<td><img src=".$imageURL." width= 100></td>";
  		echo	"	<td><a href='update.php?id=$result[id] & name=$result[name] &
      price=$result[price] & category=$result[cat] & quantity=$result[quantity]
      & details = $result[details] & image=$result[image]'> update </a> | <a href='delete.php?id=$result[id] '>delete </a></td>";
  		echo "	</tr>";
  	}
  }
  else
  {
   	echo "no record found <br>
     <a href = 'dashboard.php'> Home</a>";

  }
  ?>
</table>
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
