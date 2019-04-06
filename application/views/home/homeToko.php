<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
  <title>Haslo Coffee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="mt-5">
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top pl-5" style="background-color: black;">
        <a class="navbar-brand" href="#">Hello Coffee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto pr-5 mt-2 mt-lg-0 text-uppercase">
            <<!-- ?php 
              $username = $_SESSION['username'];
            ?> -->
            <li class="nav-item ">
              <a class="nav-link" style="color: white;" ><!-- <?php echo $username ?> --></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url(); ?>home/hapus/" style="color: white;" onclick="return confirm('Apakah anda yakin menghapus akun ini?');" >Hapus Akun</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#te" style="color: white;" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu"  style="color: white;">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>home"  style="color: white;">logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <div class="jumbotron text-white" style="background-image: url('https://images.unsplash.com/photo-1545086421-168708d4f603?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1791&q=80'); height: 700px; width: 100%">
    <div class="container">
      <h1>Hello Coffee</h1>      
      <p>Best coffee in ur area.</p>
    </div>
  </div>

  <section style="min-height: 920px;" id="menu" class="pt-3">
    <div class="container-fluid text-center text-capitalize">
      <h3 class="pt-5">Our Menus</h3>      
      <h5>You can choose anything u want</h5>
      <div class="row mt-4">
        <div  class="card-deck text-center" ">
          <div class="col-md-3">
            
            <!-- <?php 
                foreach ($mahasiswa as $mhs) { ?>
                <td class="text-center"><?= $mhs['nama']; ?></td>
                <td class="text-center"><?= $mhs['nim']; ?></td>
                <td class="text-center"><?= $mhs['email']; ?></td>
                <td class="text-center"><?= $mhs['jurusan']; ?></td>
                <td class="text-center">
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
                </td>
            </tr>
            <?php } ?> -->


            <div class="card">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1506372023823-741c83b836fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Cappucino</h5>
                <a class="card-text">Rp.15000</a>
                </br>
                <td class="text-center">
                    <a href="<?= base_url(); ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                    <a href="<?= base_url(); ?>" class="badge badge-success float-center" ?>ubah</a>
                </td>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
    <div class="h4 title text-center">Hello Coffee</div>
    <div class="text-center text-muted">
      <p>&copy; Hello coffee. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>