<?php include("header2.php"); ?>

  <body>
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


      <div class="report-header">
        <h1 class="products-list">List of Products</h1>
      </div>

      <div class="products-view">

    <?php
  	while ($result = mysqli_fetch_array($data)) {
      $imageURL = 'images/'.$result["image"];

        ?>
        <div class="">
        <div class="card">
          <div class="card-image">
         <?php echo	"	<img src=".$imageURL." width= 150>" ?>
       </div>
         <div class="card-body">
                  <h5 class="card-name" >
                      <a href="single-product.php?product=<?php echo $result['id'] ?>" >
                            <?php echo $result['name']; ?>
                        </a>
                  </h5>
                  <div class="card-price">
                $ <?php echo $result['price']?>

              </div>
<!-- 
                  <p class="card-text">
                   <a href="single-product.php?product=<?php echo $result['id']?>" class="btn btn-primary btn-sm" style="font-size:15px">
                       View
                   </a>
               </p> -->
           </div>
       </div>
   </div>

  <?php
  	}

  }

  else
  {

   	echo "no record found <br>
     <a href = 'dashboard.php'> Home</a>";

  }
 ?>

</div>



  </div>




  </body>
