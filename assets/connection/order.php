<?php
session_start();

include 'config.php';
$sukses     = "";
$error      = "";

if (isset($_POST['pesan'])) {
    $nama       = $_POST['nama'];
    $no_wa      = $_POST['no_wa'];
    $alamat     = $_POST['alamat'];
    $tanggal    = $_POST['tanggal'];
    $paket      = $_POST['paket'];

    if ($nama && $no_wa && $alamat && $tanggal && $paket) { { //insert
            $sql1   = "INSERT INTO pesanan (nama, no_wa, alamat, tanggal, paket) values ('$nama', '$no_wa', '$alamat', '$tanggal','$paket')";
            $q1     = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "berhasil";
            } else {
                $error  = "gagal";
            }
        }
    } else {
        $error = "Silahkan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Order</title>
</head>

<body>
    <?php
    if ($error) {
    ?>
        <script type="text/javascript">
            alert("Pembelian gagal!");
            window.location.href = '../user/dashboard.php';
        </script>
    <?php
    }
    ?>
    <?php
    if ($sukses) {
    ?>
        <script type="text/javascript">
            alert("Pembelian berhasil! Admin akan segera menghubungi kamu via WhatsApp");
            window.location.href = '../user/dashboard.php';
        </script>
    <?php
    }
    ?>
</body>

</html>