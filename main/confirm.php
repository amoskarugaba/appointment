<?php include_once "includes/head.php"; ?>
<?php
  if(!isset($_GET['email'])){
    header("Location: payments.php");
  }
  $email = isset($_GET['email']);
 ?>

<main>
  <div id="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Bookings</a></li>
        <li><a href="#">Payments</a></li>
        <li>Payment Confirmed</li>
      </ul>
    </div>
  </div>
  <div class="container margin_120">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div id="confirm">
          <div class="icon icon--order-success svg add_bottom_15">
            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
              <g fill="none" stroke="#8EC343" stroke-width="2">
                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
              </g>
            </svg>
          </div>
        <h2>Thanks for your booking!</h2>
        <p>You'll receive a confirmation email at <?php echo $email; ?></p>
        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</main>
