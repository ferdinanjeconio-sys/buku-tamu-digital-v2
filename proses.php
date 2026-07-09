<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

$nama_tamu  = mysqli_real_escape_string($koneksi, $_POST['nama_tamu']);
$hubungan   = mysqli_real_escape_string($koneksi, $_POST['hubungan']);
$jumlah_pax = mysqli_real_escape_string($koneksi, $_POST['jumlah_pax']);
$instansi   = mysqli_real_escape_string($koneksi, $_POST['instansi']);

$query = "INSERT INTO buku_undangan
(nama_tamu, hubungan, jumlah_pax, instansi)
VALUES
('$nama_tamu','$hubungan','$jumlah_pax','$instansi')";
    $insert = mysqli_query($koneksi, $query);

    if ($insert) {
        echo "<script>
                alert('Terima kasih atas kehadirannya!');
                window.location='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');
                window.location='index.php';
              </script>";
    }
}
?>