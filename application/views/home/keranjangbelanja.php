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
                    <td width="10%">Hapus</td>
                </tr>
                <?php $i = 1; $total = 0;?>
                <?php foreach($keranjang as $data): ?>
                    <tr >
                        <td ><?php echo $i++; ?></td>
                        <td ><img src ="<?php echo base_url('assets/img/'); echo $data['foto'];?>"></td>
                        <td ><?php echo $data['nama_menu'] ?></td>
                        <td >Rp. <?php echo $data['harga'] ?></td>
                        <td ><?php echo $data['qty'] ?></td>
                        <td >Rp. <?php echo $data['qty'] * $data['harga']; ?></td>
                        <td ><a href="<?php base_url('shopping/hapusKeranjang')?>" class="btn btn-sm btn-danger"  onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a></td>
                    </tr>
                    <?php $total = $total + ($data['qty'] * $data['harga']); ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><b>Order Total: Rp. <?php echo $total ?></b></td>
                    <td colspan="4" align="right">
                    <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
                    <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
                    <a href="<?php echo base_url('shopping/checkout');?>"  class ='btn btn-sm btn-primary'>Check Out</a>
                </tr>

          </table>
    </div>
  </div>
</section>

