  <section class="our-webcoderskull padding-lg">

<link rel="stylesheet" href="<?php echo base_url('assets/css/stylefaq.css') ?>">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h1>FAQ Section</h1>

  <div class="container5">
    <!-- Accordion Starts-->
    <div class="acc">
      <h3>Pertanyaan 1 : Apakah itu hello coffee ?</h3>
      <div class="content">
        <div class="content-inner">
          <p>Hello coffee adalah sebuah situs pemesanan kopi yang berbasis website</p>
        </div>
      </div>
    </div>

    <!-- Accordian -->
    <div class="acc">
      <h3>Pertanyaan 2: Kenapa saya harus mengakses laman ini?</h3>
      <div class="content">
        <div class="content-inner">
          <p>Karena dengan website hello coffee ini memudahkan konsumen untuk melakukan transaksi pemesanan kopi, selain itu website hello coffee juga menawarkan tampilan website yang interaktf</p>
        </div>
      </div>
    </div>

    <!-- Accordian -->
    <div class="acc">
      <h3>Pertanyaan 3: Kenapa mas fadhil ganteng?</h3>
      <div class="content">
        <div class="content-inner">
          <p>Emang telah kodrat nya tidak bisa diubah walaupun dosen berkehendak          </p>
        </div>
      </div>
    </div>

    <!-- Accordian -->
    <div class="acc">
      <h3>Pertanyaan 4: Apakah cibarusah termasuk kota yang hancur?</h3>
      <div class="content">
        <div class="content-inner">
          <p>Ya betul sekali cibarusah merupakah salah satu kota yang masuk guinness of world records kedalam kategori penduduknya yg memiliki iq dibawah rata-rata</p>
        </div>
      </div>
    </div>
  </div>


</section>


 <script> 
 

      $('.acc h3').click(function(){
            $(this).next('.content').slideToggle();
            $(this).parent().toggleClass('active');
            $(this).parent().siblings().children('.content').slideUp();
            $(this).parent().siblings().removeClass('active');
      });

</script>


