<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Order Confirmation</title>
<style>
body, html {
    height: 100%;
    margin: auto;
}
* {
    box-sizing: border-box;
    -webkit-transition-property: all;
    -webkit-transition-duration: .2s;
    -moz-transition-timing-function: cubic-bezier(100, 50, 21, 6);
    -moz-transition-property: all;
    -moz-transition-timing-function: cubic-bezier(100, 50, 21, 6);
}
body {
    text-align: center;
    font-family: Raleway, sans-serif;
}
h1 {
    font-family: Raleway, sans-serif;
    font-weight: bold;
}
.btn {
    color: #999;
    background: rgba(32, 32, 32, 3);
    padding: 10px 20px;
    font-size: 12px;
    text-decoration: none;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.btn:hover {
    border: none;
    background: rgba(0, 0, 0, 0.5);
    background: #fff;
    padding: 20px 20px;
#000;
    color: #1b1b1b;
}
.footer {
    font-size: 8px;
    color: #fff;
    clear: both;
    display: block;
    letter-spacing: 5px;
    border: 1px solid #fff;
    padding: 5px;
    text-decoration: none;
    width: 210px;
    margin: auto;
    margin-top: 400px;
}
.bg-image {
    /* The image used */
    background-image: url("furnituredesign.jpg");
    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(8px);
    /* Full height */
    height: 100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/* Position text in the middle of the page/image */
.bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}
</style>
</head>
<body>
	
<nav>
  <ul class="menu" style="font-family: Raleway">
    <a href="webtmpl.html#home" class="btn">Home</a> <a href="webtmpl.html#about" class="btn">About</a> <a href="webtmpl.html#work" class="btn">Our Work</a> <a href="webtmpl.html#contact" class="btn">Contact</a>
  </ul>
</nav>
<div class="bg-image"></div>
<?php

include "dbConnOrds.php";

if ( isset( $_POST[ 'submitord' ] ) ) {
  $name = $_POST[ 'visitor_name' ];
  $email = $_POST[ 'visitor_email' ];
  $paymthd = $_POST[ 'payment_method' ];
  $pricingpl = $_POST[ 'pricing_plan' ];
  $phonenum = $_POST[ 'phonenumber' ];
  $message = $_POST[ 'visitor_message' ];

  $insert = mysqli_query( $db, "INSERT INTO `orders` (`name`, `email`, `payment_m`, `pricing_p`, `phone_num`, `message`) VALUES "
    . "('$name','$email','$paymthd','$pricingpl','$phonenum','$message')" );
  if ( $insert ) {
    mysqli_close( $db ); // Close connection
  }
}
?>
<div class="bg-text">
	
  <h1>Thank You <?php echo $_POST["visitor_name"]?>!</h1>
  <h2>We've got your order, you will get our response soon.</h2>
  <p>Here is the information you have submitted: </p>
  <ol>
    <li><em>Name: </em><?php echo $_POST["visitor_name"]?></li>
    <li><em>Email: </em><?php echo $_POST["visitor_email"]?></li>
    <li><em>Pricing Plan: </em><?php echo $_POST["pricing_plan"]?></li>
    <li><em>Payment Method: </em><?php echo $_POST["payment_method"]?></li>
    <li><em>Phone Number: </em><?php echo $_POST["phonenumber"]?></li>
    <li><em>Message: </em><?php echo $_POST["visitor_message"]?></li>
  </ol>
</div>
	
</body>
</html>