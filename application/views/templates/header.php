<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello Coffee - The 1st Online Coffee Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/coffee9.jpg') ?>">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div id="navbar" class="wrapper sticky-top">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  HELLOCOFFEE
               </div>
               <div class="menu text-uppercase">
                  <ul>
                     <li><a href="<?php if($_SESSION['id_toko']!=0){echo base_url('timeline/toko');}else{echo base_url('timeline');} ?>">Home</a></li>
                     <li><a href="#menu">Menu</a></li>
                     <li><a href="<?php echo base_url('shopping/keranjang')?>">Keranjang</a></li>
                     <li><a href="<?php echo base_url('home/logout') ?>">Logout</a></li>
                     <li><a href="<?php echo base_url('Akun/pengaturanAkun/').($_SESSION['id_user']) ?>">akun</a></li>
                  </ul>
               </div>
            </nav>
         </header>
      </div>