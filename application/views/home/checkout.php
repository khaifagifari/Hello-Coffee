

  <section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css') ?>">

<body>

<h2>Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container2">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Full name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Zip">
              </div>
            </div>
          </div>
<!-- 
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div>
        <input type="submit" value="Continue to checkout" class="btn2">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container3">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a >Kopi sachet</a> <span class="price" style="color: black"><b>Rp. 15.000</b></span></p>
      <p><a >Kopi basi</a> <span class="price" style="color: black"><b>Rp. 10.000</b></span></p>
      <p><a >Kopi mas fadhil</a> <span class="price" style="color: black"><b>Rp. 24.000</b></span></p>
      <p><a >Kopi ai sia noob</a> <span class="price" style="color: black"><b>Rp. 20.200</b></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rp. 2.000.000</b></span></p>
    </div>
  </div>
</div>

</body>
</div>
</div>
</section>