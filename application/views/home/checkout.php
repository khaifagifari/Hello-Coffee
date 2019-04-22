

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
        </div>
        <input type="submit" value="Continue to checkout" class="btn2">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container3">
        <?php   
          $total = 0;
          $harga =0;
        foreach($keranjang as $data){
            $total = $total + $data['qty'];
        }?>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo  $total ?></b></span></h4>
      <?php foreach($keranjang as $data): ?>
      <p><a ><?php echo $data['nama_menu'] ?>(<?php echo $data['qty']?>)   </a> <span class="price" style="color: black"><b>Rp. <?php echo $data['qty'] * $data['harga']; ?></b></span></p>
      <hr>
      <?php $harga = $harga + ($data['qty'] * $data['harga']); ?>
       <?php endforeach; ?>
      <p>Total <span class="price" style="color:black"><b>Rp. <?php echo $harga ?>  </b></span></p>
    </div>
  </div>
</div>

</body>
</div>
</div>
</section>