<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">

        <h2>Daftar Belanja</h2>

            <table class="table table-dark">
                <tr >
                    <td width="2%">No</td>
                    <td width="20%">Gambar</td>
                    <td width="33%">Item</td>
                    <td width="17%">Harga</td>
                    <td width="8%">Qty</td>
                    <td width="20%">Jumlah</td>
                </tr>
                <?php $i = 1; $total = 0;?>
                <?php foreach($keranjang as $data): ?>
                    
                                            
                    <tr >
                        <td ><?php echo $i++; ?></td>
                        <td ><img src ="<?php echo base_url('assets/img/'); echo $data['foto_kopi'];?>"></td>
                        <td ><?php echo $data['nama_menu'] ?></td>
                        <td >Rp. <?php echo number_format($data['harga'], 0,",","."); ?></td>
                        <td ><input type="text" class="form-control input-sm" name=""  value="<?php echo $data['qty'] ?>" /></td> 
                        <td >Rp. <?php echo number_format($data['qty'] * $data['harga'], 0,",","."); ?></td>
                    </tr>
                    <?php $total = $total + ($data['qty'] * $data['harga']); ?>
             
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><b>Order Total: Rp. <?php echo number_format($total, 0,",","."); ?></b></td>
                    <td colspan="4" align="right">
                    <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
                    <!-- <button class='btn btn-sm btn-success'  type="submit">Update Cart</button> -->
                    <a href="<?php echo base_url('shopping/checkout/'.$_SESSION['id_user']);?>"  class ='btn btn-sm btn-primary'>Check Out</a>
                </tr>
            </table>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="post" action="<?php echo base_url('shopping/hapusAll/'.$_SESSION['id_user']);?> ">
                <div class="modal-header">

                    <h4 class="modal-title" style="color: black">Konfirmasi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color:black"> Anda yakin mau mengosongkan Shopping Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-default">Ya</button>
        </div>
            </form>
        </div>
        </div>
    </div>
  </div>       
  </div>
  
</section>

