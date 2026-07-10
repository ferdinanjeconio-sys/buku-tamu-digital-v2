<?php 
session_start();
include 'koneksi.php'; 


$KATA_SANDI_BENAR = "baksocenot"; 

if (isset($_POST['login_admin'])) {
    $sandi_input = $_POST['sandi'];
    if ($sandi_input === $KATA_SANDI_BENAR) {
        $_SESSION['admin_masuk'] = true;
    } else {
        echo "<script>alert('Sandi salah! Akses ditolak.'); window.location='admin.php';</script>";
        exit();
    }
}

if (isset($_GET['hapus']) && isset($_SESSION['admin_masuk'])) {
    $id_hapus = mysqli_real_escape_string($koneksi, $_GET['hapus']);
    mysqli_query($koneksi, "DELETE FROM buku_undangan WHERE id = '$id_hapus'");
    echo "<script>alert('Data berhasil dihapus!'); window.location='admin.php';</script>";
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Otoritas Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background: #0d1622; color: #fff; margin: 0; padding: 40px 20px; }
        .container { max-width: 900px; margin: 0 auto; background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 12px; border: 1px solid #d4af37; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .login-box { max-width: 400px; margin: 100px auto; background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; border: 1px solid #d4af37; text-align: center; box-shadow: 0 15px 30px rgba(0,0,0,0.5); }
        h2 { font-family: 'Cinzel', serif; color: #d4af37; text-align: center; letter-spacing: 2px; }
        input[type="password"] { width: 100%; padding: 12px; margin: 15px 0; border: 1px solid rgba(212,175,55,0.4); background: #050a10; color: #fff; border-radius: 4px; box-sizing: border-box; text-align: center; font-size: 16px; }
        .btn { background: linear-gradient(135deg, #c5a028, #d4af37); color: #0d1622; padding: 12px; border: none; width: 100%; border-radius: 4px; font-weight: bold; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; }
        .alert-info { background: rgba(212, 175, 55, 0.1); color: #d4af37; padding: 15px; border-radius: 4px; font-weight: bold; text-align: center; margin-bottom: 25px; border: 1px solid rgba(212,175,55,0.2); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; border-bottom: 1px solid rgba(255,255,255,0.05); text-align: left; }
        th { background: rgba(212,175,55,0.1); color: #d4af37; font-size: 12px; letter-spacing: 1px; text-transform: uppercase; }
        .btn-danger { background: #e74c3c; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .btn-nav { background: #27ae60; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 13px; display: inline-block; margin-bottom: 20px; }
        .btn-logout { background: transparent; color: #e74c3c; border: 1px solid #e74c3c; padding: 8px 15px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; float: right; }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['admin_masuk'])) { ?>
    <div class="login-box">
        <h2>SECURITY ACCESS</h2>
        <p style="color: #b3c6d4; font-size: 13px;">Otorisasi Sistem Manajemen Data</p>
        <form action="admin.php" method="POST">
            <input type="password" name="sandi" placeholder="••••••••" required autocomplete="off">
            <button type="submit" name="login_admin" class="btn">Buka Dashboard</button>
        </form>
        <br>
        <a href="index.php" style="color: #b3c6d4; font-size: 12px; text-decoration: none;">← Kembali Ke Utama</a>
    </div>
<?php exit(); } ?>

<div class="container">
    <h2>KONTROL MANAJEMEN ADMIN</h2>
    
    <a href="index.php" class="btn-nav">⬅️ UTAMA</a>
    <a href="admin.php?logout=true" class="btn-logout" onclick="return confirm('Keluar dari panel admin?')">LOGOUT SECURE</a>

    <?php
    $hitung = mysqli_query($koneksi, "SELECT COUNT(*) as total_form, SUM(jumlah_pax) as total_pax FROM buku_undangan");
    $stats = mysqli_fetch_assoc($hitung);
    ?>
    <div style="display:flex;gap:20px;flex-wrap:wrap;margin-bottom:25px;">

    <div style="flex:1;background:#27ae60;padding:20px;border-radius:10px;text-align:center;">
        <h3>Total Data Tamu</h3>
        <h1><?= $stats['total_form'] ?? 0; ?></h1>
    </div>

    <div style="flex:1;background:#2980b9;padding:20px;border-radius:10px;text-align:center;">
        <h3>Total Delegasi (Pax)</h3>
        <h1><?= $stats['total_pax'] ?? 0; ?></h1>
    </div>

</div>

<h3 style="color:#d4af37;margin-bottom:20px;">
Selamat Datang di Dashboard Admin
</h3><form method="GET" class="row g-2 mb-4">

    <div class="col-md-4">
        <input
            type="text"
            name="cari"
            class="form-control"
            placeholder="Cari nama tamu..."
            value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary">
            🔍 Cari
        </button>
    </div>

    <div class="col-auto">
        <a href="admin.php" class="btn btn-secondary">
            Reset
        </a>
    </div>

</form>

    <div class="table-responsive">

<table class="table table-dark table-hover table-bordered align-middle">

    <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu / Instansi</th>
                <th>Klasifikasi</th>
                <th>Jumlah Pax</th>
                <th>Instansi Asal</th>
                <th>Waktu Hadir</th>
                <th>Opsi Kendali</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['cari']) && $_GET['cari'] != "") {

    $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);

    $query = mysqli_query($koneksi,
        "SELECT * FROM buku_undangan
         WHERE nama_tamu LIKE '%$cari%'
         ORDER BY waktu_hadir DESC");

} else {

    $query = mysqli_query($koneksi,
        "SELECT * FROM buku_undangan
         ORDER BY waktu_hadir DESC");

}
            $no = 1;
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>
        <td>{$no}</td>
        <td><strong style='color:#fff;'>{$row['nama_tamu']}</strong></td>
        <td style='color:#b3c6d4;'>{$row['hubungan']}</td>
        <td>{$row['jumlah_pax']} orang</td>
        <td>{$row['instansi']}</td>
        <td>{$row['waktu_hadir']}</td>
        <td>

<a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>
✏ Edit
</a>

<a href='admin.php?hapus={$row['id']}'
class='btn btn-danger btn-sm'
onclick='return confirm(\"Hapus entri data ini secara permanen?\")'>
🗑 Hapus
</a>

</td>
      </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='6' style='text-align:center; color:#7f8c8d;'>Belum ada data masuk.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>