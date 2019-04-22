<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("https://images.unsplash.com/photo-1545086421-168708d4f603?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1791&q=80");
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3 style="color : white">Contact Form</h3>

<div class="container">
  <form  action="<?php echo base_url().'home/aksi'; ?>" method="post">
    <label for="fname">Nama Toko</label>
    <input type="text" id="nama_toko" name="nama_toko" placeholder="nama toko">

    <label for="lname">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="alamat anda">

     <label for="lnotelp">No Telpon</label>
    <input type="text" id="notelp" name="notelp" placeholder="nomor telepon anda">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
