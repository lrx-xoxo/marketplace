<!DOCTYPE html>
<?php include('header.php');
       ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Orders</title>

    <style media="screen">
    .option4 {
    border-left: 5px solid #2596be;
    background-color: var(--Border-color);
    color: white;
    cursor: pointer;
    }
    .option4:hover {
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
            <h3><a href="logout.php">Logout</a></h3>
          </div>

        </div>
      </nav>
    </div>

    <div class="main">
      <?php
      include ('connection.php');
      $sql ="select * from orders";
      $data =mysqli_query($con,$sql);
      $total=mysqli_num_rows($data);
      if ($total=mysqli_num_rows($data)) {
        ?>

    <div class="report-container">
      <div class="report-header">
        <h1 class="products-list">List of Orders</h1>

      </div>

      <div class="control-group">
          <table name="orderlist" id="dtable" width="1100" align="center" >
        <tr>
          <th>Order Id</th>
          <th>Product Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Total</th>

        </tr>

    <?php
    while ($result = mysqli_fetch_array($data)) {

      echo "	<tr class='tb1'>";
      echo	"	<td>".$result['id']."</td>";
      echo	"	<td>".$result['productID']."</td>";
      echo  "  <td>".$result['firstname']."</td>";
      echo	"	<td>".$result['lastname']."</td>";
      echo	"	<td>".$result['email']."</td>";
      echo	"	<td>".$result['address']."</td>";
      echo	"	<td>".$result['total_price']."</td>";
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

  </body>
</html>
