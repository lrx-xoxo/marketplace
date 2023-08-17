<?php
include("header2.php");?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" href="style.css" />

<?php

session_start();
include('connection.php');


    if(isset($_GET['product']) && $_GET['product']!='')
  	{
      $sql ="select * from products where id = '".$_GET['product']."'";
      $data =mysqli_query($con,$sql);

      while ($result = mysqli_fetch_array($data)) {

        $imgUrl = 'images/'.$result["image"];
        $pid = $result["id"];
        $pname = $result["name"];
        $pdetails = $result['details'];
        $pprice = $result['price'];

      }
   }

    else
    {
      $error = '404! No record found';
      header('location:index.php');
      exit;
    }

    if(isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == 'add to cart'){

      $productID = $_POST['product_id'];
      $productQty = $_POST['product_qty'];
      $sql ="select * from products where id = '".$_POST['product_id']."'";
      $data =mysqli_query($con,$sql);

      while ($result = mysqli_fetch_array($data)) {
        $totalPrice = number_format($productQty * $result['price'],2);
        $cartArray = [
            'product_id' =>$productID,
            'qty' => $productQty,
            'product_name' =>$result['name'],
            'product_price' => $result['price'],
            'total_price' => $totalPrice,
            'product_img' =>$result['image']
        ];
      }

      if(isset($_SESSION['cart_items']) && !empty($_SESSION['cart_items']))
      {

          $productIDs = [];
          foreach($_SESSION['cart_items'] as $cartKey => $cartItem)
          {
              $productIDs[] = $cartItem['product_id'];
              if($cartItem['product_id'] == $productID)
              {
                  $_SESSION['cart_items'][$cartKey]['qty'] = $productQty;
                  $_SESSION['cart_items'][$cartKey]['total_price'] = $calculateTotalPrice;
                  break;
              }
          }

          if(!in_array($productID,$productIDs))
          {
              $_SESSION['cart_items'][]= $cartArray;
          }

          $successMsg = true;

      }
      else
      {

          $_SESSION['cart_items'][]= $cartArray;
          $successMsg = true;
      }


    echo $cartArray;
    }
        ?>

        <div class="main" >

        <div class="container">
     <div class="left-column">
         <img src="<?php echo $imgUrl;?>" width="200"  >
     </div>
     <div class="right-column product-description" >
         <h1><?php echo $pname ?></h1>
         <p><?php echo $pdetails ?></p>
         <h4>$<?php echo $pprice?></h4>

         <form class="form-inline" method="POST">
             <div class="form-group mb-2">
                 <input type="number" name="product_qty" id="productQty" class="form-control" placeholder="Quantity" min="1" max="1000" value="1">
                 <input type="hidden" name="product_id" value="<?php echo $pid ?>">
             </div>
             <div class="form-group mb-2 ml-2">

                 <button type="submit" class="btn btn-primary" name="add_to_cart" value="add to cart" >       Add to Cart         </button>

             </div>
         </form>

     </div>
 </div>

</div>



           <?php


    ?>
