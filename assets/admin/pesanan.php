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
include '../connection/config.php';

$nama       = "";
$prodi      = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id         = $_GET['id'];
    $sql1       = "DELETE FROM pesanan WHERE id = '$id'";
    $q1         = mysqli_query($conn, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style/style_admin.css">
    <link rel="icon" href="../images/icon.png">
    <title>Pesanan</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar fixed-top" style="background-color: blueviolet;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="Logo" height="45">
            </a>
        </div>
        <div class="fixed-end logout">
            <a href="../connection/logout_admin.php" class="log" data-toggle="tooltip" title="Keluar"><i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i></a>
        </div>
    </nav>
    <!--SideBar-->
    <div class="row no-gutters" style="margin-top: 60px;">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard.php"><i class="bi bi-speedometer" style="margin-right: 10px;"></i>Dashboard</a>
                    <hr style="color: white;">
                </li>
                <!--Pesanan-->
                <li class="nav-item">
                    <a class="nav-link text-white" href="pesanan.php"><i class="bi bi-cart" style="margin-right: 10px;"></i>Pesanan</a>
                    <hr style="color: white;">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-4">
            <h3><i class="bi bi-cart" style="margin-right: 10px;"></i>PESANAN</h3>
            <hr>
            <div class="card mt-3">
                <div class="card-header text-white bg-secondary">
                    Data Pesanan
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal Booking</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No. WhatsApp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql2   = "SELECT * FROM pesanan ORDER BY tanggal asc";
                            $q2     = mysqli_query($conn, $sql2);
                            $urut   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id         = $r2['id'];
                                $tanggal    = $r2['tanggal'];
                                $nama       = $r2['nama'];
                                $no_wa      = $r2['no_wa'];
                                $alamat     = $r2['alamat'];
                                $paket      = $r2['paket'];
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <td scope="row"><?php echo $tanggal ?></td>
                                    <td scope="row"><?php echo $nama ?></td>
                                    <td scope="row"><?php echo $no_wa ?></td>
                                    <td scope="row"><?php echo $alamat ?></td>
                                    <td scope="row"><?php echo $paket ?></td>
                                    <td scope="row">
                                        <a href="pesanan.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin sudah done?')"><button type="button" class="btn btn-success">Done</button></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>