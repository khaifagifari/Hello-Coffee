  <section class="our-webcoderskull padding-lg">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylefaq.css') ?>">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <h1>FAQ Section</h1>

    <div class="container5">

      <div class="acc">
        <h3>Pertanyaan 1 : Apakah itu hello coffee ?</h3>
        <div class="content">
          <div class="content-inner">
            <p>Hello coffee adalah sebuah situs pemesanan kopi yang berbasis website</p>
          </div>
        </div>
      </div>

      <div class="acc">
        <h3>Pertanyaan 2: Kenapa saya harus mengakses laman ini?</h3>
        <div class="content">
          <div class="content-inner">
            <p>Karena dengan website hello coffee ini memudahkan konsumen untuk melakukan transaksi pemesanan kopi, selain itu website hello coffee juga menawarkan tampilan website yang interaktf</p>
          </div>
        </div>
      </div>

      <div class="acc">
        <h3>Pertanyaan 3: Bagaimana cara memesan Kopi dihalaman website?</h3>
        <div class="content">
          <div class="content-inner">
            <p>User hanya tinggal memilih toko kopi yang berada di halama home, setelah itu user dapat memilih kopi yg ingin dipesa selanjutnya akan masuk kedalah halaman check out </p>
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

</div>
</body>
</section>

