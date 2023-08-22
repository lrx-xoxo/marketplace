<style media="screen">
  .message{
    margin: auto;
  
  }
</style>
<?php
    session_start();

     if(!isset($_SESSION['confirm_order']) || empty($_SESSION['confirm_order']))
     {
         header('location:index.php');
         exit();
     }

    require('connection.php');


	$pageTitle = 'Thank You';

    include('header2.php');
?>
<div class="message">
    <div class="">
        <h1>Thank you!</h1>
        <p>
            Your order has been placed.
            <?php unset($_SESSION['confirm_order']);?>
        </p>
    </div>
</div>
