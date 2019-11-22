<div style="background: url('https://ae01.alicdn.com/kf/HTB1KcktSpXXXXc3XVXXq6xXFXXXR/Papan-latar-belakang-fotografi-kain-latar-belakang-Fotografia-kopi-kayu-untuk-anak-anak-foto-studio.jpg');" height: 650px; width: 100%; class="jumbotron rounded-0">
    <div class="mt-5">
        .
    </div>
    <div class="container bg-light text-dark mt-5 rounded">
       <!--  <?php if ($this->session->flashdata('flash')) : ?> -->
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- <?php endif; ?> -->

        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center mt-3">Daftar Pesanan</h3>
                <?php if (empty($transaksi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Sedang tidak ada pesanan...
                </div>
                <?php endif; ?>

                <table class="table mt-5 text-dark">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">TANGGAL PEMESANAN</th>
                            <th class="text-center" scope="col">FULL NAME</th>
                            <th class="text-center" scope="col">EMAIL</th>
                            <th class="text-center" scope="col">ADDRESS</th>
                            <th class="text-center" scope="col">CITY</th>
                            <th class="text-center" scope="col">ZIP</th>
                            <th class="text-center" scope="col">STATE</th>
                            <th class="text-center" scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $i = 0; ?>
                            <?php foreach ($transaksi as $data) { ?>
                        <tr>
                            <td class="text-center"><?= $data['tanggal_transaksi']; ?></td>
                            <td class="text-center"><?= $data['full_name']; ?></td>
                            <td class="text-center"><?= $data['email']; ?></td>
                            <td class="text-center"><?= $data['address']; ?></td>
                            <td class="text-center"><?= $data['city']; ?></td>
                            <td class="text-center"><?= $data['zip']; ?></td>
                            <td class="text-center"><?= $data['state']; ?></td>
                            <td class="text-center">

                            <div id="tanggal_pemesanan<?php echo $i ?>" value="<?php echo $data['tanggal_transaksi'] ?>"></div>
                            <div id="nama_pesanan<?php echo $i ?>" value="<?php echo $data['nama_menu'] ?>"></div>
                            <div id="jumlah<?php echo $i ?>" value="<?php echo $data['qty'] ?>"></div>
                            <div id="harga_total<?php echo $i ?>" value="<?php echo $data['qty']*$data['harga'] ?>"></div>
                            <div id="id_transaksi<?php echo $i ?>" value="<?php echo $data['id_transaksi']?>"></div>
                            <div id="foto_kopi<?php echo $i ?>" value="<?php echo $data['foto_kopi']?>"></div>

                            <button data-toggle="modal" data-id="<?php echo $i ?>" data-target="#modalDetail" class="badge badge-warning float-center detail_transaksi" id="<?php echo $i ?>">Detail</button>
                            </td>
                        </tr>
                            <?php $i++; ?>
                        <?php } ?>
                    </tbody>
                </table>


                <div class="modal fade text-dark openModal" id="modalDetail"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <div class="profile-img">
                                <img src="" id="profile-img" style="object-fit: cover; width:230px; height: 230px;"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal Pemesanan :</label>
                            <input type="text" class="form-control" name="tanggal_pemesanan" id="tanggal_pemesanan" readonly>
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Nama Pesanan :</label>
                            <input type="text" class="form-control" value="" name="nama_pesanan" id="nama_pesanan" readonly>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jumlah :</label>
                            <input type="text" class="form-control" value="" name="jumlah" id="jumlah" readonly>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Harga Total :</label>
                            <input type="text" class="form-control" value="" name="harga_total" id="harga_total" readonly>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <form action="#tes" id="form_tolak" name="form_tolak">
                        <button type="submit" class="btn btn-danger">Tolak Pesanan</button>
                        </form>
                        <form action="#teslagi" id="form_terima" name="form_terima">
                        <button type="submit" class="btn btn-primary">Terima Pesanan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div> 
    </div>
</div>

<script type="text/javascript">
    $(document).on("click", " .detail_transaksi", function () {
     var id = $(this).data('id');
     var tanggal_pemesanan = document.getElementById('tanggal_pemesanan'+id).getAttribute('value');
     var nama_pesanan = document.getElementById('nama_pesanan'+id).getAttribute('value');
     var jumlah = document.getElementById('jumlah'+id).getAttribute('value');
     var harga_total = document.getElementById('harga_total'+id).getAttribute('value');
     var id_toko = <?php echo json_encode($_SESSION['id_toko']); ?>;
     var id_transaksi = document.getElementById('id_transaksi'+id).getAttribute('value');
     var foto_kopi = document.getElementById('foto_kopi'+id).getAttribute('value');

     $(".modal-body #tanggal_pemesanan").val( tanggal_pemesanan );
     $(".modal-body #nama_pesanan").val( nama_pesanan );
     $(".modal-body #jumlah").val( jumlah );
     $(".modal-body #harga_total").val( harga_total );
     var url_terima = "/Hello-Coffee/detail_toko/terimaTransaksi/"+id_toko+"/"+id_transaksi;
     var url_tolak = "/Hello-Coffee/detail_toko/tolakTransaksi/"+id_toko+"/"+id_transaksi;
     var url_foto = '/Hello-Coffee/assets/img/'+foto_kopi;
     document.getElementById("form_terima").action=url_terima; 
     document.getElementById("form_tolak").action=url_tolak; 
     document.getElementById("profile-img").src=url_foto; 
     $('#modalDetail').modal('show');
});
</script>