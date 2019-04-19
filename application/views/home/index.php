
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Welcome to Hello Coffee</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/Coffee9.jpg') ?>">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg1">
  <div class="container bg-transparent">
    <div class="row bg-transparent">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto bg-transparent">
        <div class="card card-signin my-5 bg-transparent">
          <div class="card-body bg-transparent">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="<?= base_url(); ?>home/">
              <div class="form-label-group">
                <input type="text" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
                <label for="email">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" name="login" style="">Sign in</button>
              <!-- <a href="<?= base_url(); ?>Timeline" class="btn btn-lg btn-primary btn-block text-uppercase ">Sign in</a> -->
              <p class="mt-4 text-center">belum punya akun?</p>
              <a class="btn btn-lg btn-danger btn-block text-uppercase" href="<?= base_url(); ?>registration" name="registrasi">Registrasi</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  