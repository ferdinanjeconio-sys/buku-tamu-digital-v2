<?php
include 'koneksi.php';

$id = intval($_GET['id']);

$data = mysqli_query($koneksi, "SELECT * FROM buku_undangan WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama_tamu']);
    $hubungan  = mysqli_real_escape_string($koneksi, $_POST['hubungan']);
    $jumlah    = mysqli_real_escape_string($koneksi, $_POST['jumlah_pax']);
    $instansi  = mysqli_real_escape_string($koneksi, $_POST['instansi']);

    mysqli_query($koneksi,"UPDATE buku_undangan SET
        nama_tamu='$nama',
        hubungan='$hubungan',
        jumlah_pax='$jumlah',
        instansi='$instansi'
        WHERE id='$id'
    ");

    echo "<script>
        alert('Data berhasil diubah');
        window.location='admin.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#1b2430;
        }

        .card{
            border-radius:15px;
        }

        .card-header{
            font-size:22px;
            font-weight:bold;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    Edit Data Tamu
                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nama Tamu</label>
                            <input
                                type="text"
                                name="nama_tamu"
                                class="form-control"
                                value="<?= $row['nama_tamu']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>

                            <select name="hubungan" class="form-select">

                                <option value="Tamu Kehormatan (VVIP)"
                                <?=($row['hubungan']=="Tamu Kehormatan (VVIP)")?"selected":"";?>>
                                Tamu Kehormatan (VVIP)
                                </option>

                                <option value="Dosen"
                                <?=($row['hubungan']=="Dosen")?"selected":"";?>>
                                Dosen
                                </option>

                                <option value="Mahasiswa"
                                <?=($row['hubungan']=="Mahasiswa")?"selected":"";?>>
                                Mahasiswa
                                </option>

                                <option value="Peserta Khusus"
                                <?=($row['hubungan']=="Peserta Khusus")?"selected":"";?>>
                                Peserta Khusus
                                </option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Pax</label>

                            <input
                                type="number"
                                name="jumlah_pax"
                                class="form-control"
                                value="<?= $row['jumlah_pax']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Instansi / Asal</label>

                            <input
                                type="text"
                                name="instansi"
                                class="form-control"
                                value="<?= $row['instansi']; ?>"
                                required>
                        </div>

                        <div class="d-grid gap-2">

                            <button
                                type="submit"
                                name="update"
                                class="btn btn-success">

                                💾 Simpan Perubahan

                            </button>

                            <a href="admin.php" class="btn btn-secondary">
                                ← Kembali ke Dashboard
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>