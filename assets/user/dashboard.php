<?php
session_start();
if (empty($_SESSION['username'])) {
?>
  <script type="text/javascript">
    alert("Harap Login Terlebih Dahulu !");
    window.location.href = '../../index.php?pesan=belum_login';
  </script>
<?php
}
    $nama       = ""; 
    $no_wa      = "";
    $alamat     = "";
    $tanggal    = "";
    $paket      = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="icon" href="../images/icon.png">
  <title>Beauty Makeup</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top w-100 css-navbar">
    <div class="container">
      <a class="navbar-brand" href="#" target="_blank">
        <img src="../images/Logo.png" alt="logo" height="35px">
      </a>
      <div class="fixed-end logout">
        <a href="../connection/logout_user.php" class="log" data-toggle="tooltip" title="Keluar"><i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i></a>
      </div>
    </div>
  </nav>
  <!--Batas Navbar-->
  <!--Konten-->
  <div class="content">
    <h3 style="margin-left: 25px; margin-right: 25px; margin-top: 25px;">Selamat Datang di Beauty Makeup</h3>
    <p style="margin-left: 25px; margin-right: 25px;">Sedang mencari jasa make up? Kami solusinya!
      <br>
      Beauty Makeup menyediakan jasa make up untuk segala keperluan anda dengan memberikan beberapa pilihan paket dengan harga yang bervariatif. Scrol kebawah untuk melihat paketnya!
    </p><br>
    <!--Paket Make Up-->
    <h4 style="margin-left: 25px; margin-right: 25px;">Paket Beauty Makeup</h4>
    <div class="row">
      <div class="card" style="width: 30%;">
        <img src="../images/kids.png" class="card-img-top" alt="Kids Make Up">
        <div class="card-body">
          <h5 class="card-title">Kids Make Up</h5>
          <p class="card-text">Paket ini cocok untuk digunakan oleh anak-anak<br>Harga mulai dari Rp. 75.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
      <div class="card" style="width: 30%;">
        <img src="../images/graduation.png" class="card-img-top" alt="Graduation Make Up">
        <div class="card-body">
          <h5 class="card-title">Graduation Make Up</h5>
          <p class="card-text">Paket ini cocok untuk wisuda atapun perp.isahan sekolah<br>Harga mulai dari Rp. 150.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
      <div class="card" style="width: 30%;">
        <img src="../images/bridesmaid.png" class="card-img-top" alt="Bridesmaid Make Up">
        <div class="card-body">
          <h5 class="card-title">Bridesmaid Make Up</h5>
          <p class="card-text">Paket ini cocok untuk acara pengiringan pengantin<br>Harga mulai dari Rp. 200.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
      <div class="card" style="width: 30%;">
        <img src="../images/enggagement.png" class="card-img-top" alt="Enggagement Make Up">
        <div class="card-body">
          <h5 class="card-title">Enggagement Make Up</h5>
          <p class="card-text">Paket ini cocok digunakan untuk acara tunangan <br>Harga mulai dari Rp. 300.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
      <div class="card" style="width: 30%;">
        <img src="../images/photoshoot.png" class="card-img-top" alt="Photoshoot Make Up">
        <div class="card-body">
          <h5 class="card-title">Photoshoot Make Up</h5>
          <p class="card-text">Paket ini cocok untuk melakukan photoshoot agar tampak profesional<br>Harga mulai dari Rp. 450.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
      <div class="card" style="width: 30%;">
        <img src="../images/wedding.png" class="card-img-top" alt="Wedding Make Up">
        <div class="card-body">
          <h5 class="card-title">Wedding Make Up</h5>
          <p class="card-text">Paket ini cocok digunakan untuk acara pernikahan.<br>Harga mulai dari Rp. 700.000</p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div><br>
    <!--Batas Paket Make Up-->
    <!--Form Pemesanan-->
    <h4 style="margin-left: 25px; margin-right: 25px; margin-top: 25px;">Form Pemesanan</h4>
    <p style="margin-left: 25px; margin-right: 25px;">Jika anda tertarik dengan jasa kami, silahkan isi form pemesana di bawah ini!</p>
    <div style="margin-left: 25px; margin-right: 25px; margin-top: 25px;">
      <form action="../connection/order.php" method="POST">
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="no_wa" class="col-sm-2 col-form-label">No. WhatsApp</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="no_wa" name="no_wa" value="<?php echo $no_wa ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Booking</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="paket" class="col-sm-2 col-form-label">Paket</label>
          <div class="col-sm-10">
            <select class="form-control" name="paket" id="paket">
              <option value="">- Pilih Paket -</option>
              <option value="Kids Make Up" <?php if ($paket == "Kids Make Up") echo "selected" ?>>Kids Make Up</option>
              <option value="Graduation Make Up" <?php if ($paket == "Graduation Make Up") echo "selected" ?>>Graduation Make Up</option>
              <option value="Bridesmaid Make Up" <?php if ($paket == "Bridesmaid Make Up") echo "selected" ?>>Bridesmaid Make Up</option>
              <option value="Enggagement Make Up" <?php if ($paket == "Enggagement Make Up") echo "selected" ?>>Enggagement Make Up</option>
              <option value="Photoshoot Make Up" <?php if ($paket == "Photoshoot Make Up") echo "selected" ?>>Photoshoot Make Up</option>
              <option value="Wedding Make Up" <?php if ($paket == "Wedding Make Up") echo "selected" ?>>Wedding Make Up</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <input type="submit" name="pesan" value="Pesan" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>