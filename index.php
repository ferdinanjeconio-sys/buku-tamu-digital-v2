<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gala Event & Conference - Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: radial-gradient(circle, #1a2a3a 0%, #0d1622 100%); 
            color: #ffffff;
            margin: 0; 
            padding: 40px 20px; 
        }
        .container { 
            max-width: 750px; 
            margin: 0 auto; 
            background: rgba(255, 255, 255, 0.03); 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.6); 
            border: 1px solid #d4af37; 
            backdrop-filter: blur(10px);
        }
        h2 { 
            font-family: 'Cinzel', serif; 
            text-align: center; 
            color: #d4af37; 
            font-size: 30px;
            letter-spacing: 3px;
            margin-bottom: 5px;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .sub-title {
            text-align: center;
            font-size: 12px;
            letter-spacing: 4px;
            color: #b3c6d4;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        label { 
            font-weight: 600; 
            display: block; 
            margin-top: 20px; 
            color: #d4af37; 
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        input, select { 
            width: 100%; 
            padding: 12px 15px; 
            margin-top: 8px; 
            border: 1px solid rgba(212, 175, 55, 0.3); 
            border-radius: 6px; 
            box-sizing: border-box; 
            background: rgba(13, 22, 34, 0.8);
            color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 8px rgba(212<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gala Event & Conference - Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: radial-gradient(circle, #1a2a3a 0%, #0d1622 100%); 
            color: #ffffff;
            margin: 0; 
            padding: 40px 20px; 
        }
        .container { 
            max-width: 750px; 
            margin: 0 auto; 
            background: rgba(255, 255, 255, 0.03); 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.6); 
            border: 1px solid #d4af37; 
            backdrop-filter: blur(10px);
        }
        h2 { 
            font-family: 'Cinzel', serif; 
            text-align: center; 
            color: #d4af37; 
            font-size: 30px;
            letter-spacing: 3px;
            margin-bottom: 5px;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .sub-title {
            text-align: center;
            font-size: 12px;
            letter-spacing: 4px;
            color: #b3c6d4;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        label { 
            font-weight: 600; 
            display: block; 
            margin-top: 20px; 
            color: #d4af37; 
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        input, select { 
            width: 100%; 
            padding: 12px 15px; 
            margin-top: 8px; 
            border: 1px solid rgba(212, 175, 55, 0.3); 
            border-radius: 6px; 
            box-sizing: border-box; 
            background: rgba(13, 22, 34, 0.8);
            color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.4);
        }

button:hover{
    transform:translateY(-2px);
}
        
        .alert-info { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            padding: 15px; 
            border-radius: 6px; 
            font-weight: 600; 
            margin-bottom: 30px; 
            text-align: center; 
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 14px;
            letter-spacing: 1px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            background: rgba(13, 22, 34, 0.4);
        }
        th, td { 
            padding: 14px; 
            border-bottom: 1px solid rgba(255,255,255,0.05); 
            text-align: left; 
            font-size: 14px;
        }
        th { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        td { color: #e0e8f0; }
        .btn-admin { 
            display: inline-block; 
            background: transparent;
            color: #b3c6d4; 
            padding: 6px 15px; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 11px; 
            border: 1px solid rgba(255,255,255,0.2);
            letter-spacing: 1px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .btn-admin:hover {
            color: #d4af37;
            border-color: #d4af37;
            }
        .btn-warning{
             background:#f39c12;
             color:white;
             padding:5px 10px;
             text-decoration:none;
             border-radius:4px;
             font-size:12px;
             font-weight:bold;
             margin-right:5px;
            }
            btn-warning:hover{
             background:#d68910;
}
        .btn-danger{
             background:#e74c3c;
             color:white;
             padding:6px 12px;
             text-decoration:none;
             border-radius:5px;
             font-size:12px;
             font-weight:bold;
             display:inline-block;
}

            .btn-danger:hover{
             background:#c0392b;
}
        
    </style>
</head>
<body>

<div class="container">
    <div style="text-align: center;">
  <a href="admin.php" class="btn btn-outline-warning mb-3">
    🔒 Dashboard Admin
</a>
    </div>

    <h2>EXCLUSIVE GALA EVENT</h2>
    <div class="sub-title">Registrasi Kehadiran Delegasi & Tamu VIP</div>
    
    <form action="proses.php" method="POST">
        <label>Nama Lengkap & Gelar:</label>
<input
type="text"
name="nama_tamu"
class="form-control"
placeholder="Contoh: Dr. H. Sahrul, S.E., M.M."
required>

        <label>Kategori Klasifikasi Tamu:</label>
        <select name="hubungan">
            <option value="Tamu Kehormatan (VVIP)">Tamu Kehormatan (VVIP)</option>
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Peserta Khusus">Peserta Khusus</option>
        </select>

        <label>Jumlah Delegasi / Pendamping (Pax):</label>
        <select name="jumlah_pax">
            <option value="1">1 Orang</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
        </select>

        <label>Instansi / Alamat Asal:</label>
        <input
type="text"
name="instansi"
class="form-control"
placeholder="Contoh: Universitas Sarjanawiyata Tamansiswa"
required>

        <button type="submit"
        name="simpan"
        class="btn btn-success w-100">
    Konfirmasi Kehadiran Resmi
</button>
    </form>

    <hr style="margin: 40px 0 30px 0; border: 0; border-top: 1px solid rgba(212,175,55,0.2);">

    <h3 style="font-family: 'Cinzel', serif; text-align: center; color: #d4af37; letter-spacing: 2px; font-size: 18px;">Daftar Konfirmasi Kehadiran</h3>

    <?php
    $hitung = mysqli_query($koneksi, "SELECT COUNT(*) as total_form, SUM(jumlah_pax) as total_pax FROM buku_undangan");
    $stats = mysqli_fetch_assoc($hitung);
    ?>
     <div class="row mb-4">

    <div class="col-md-6 mb-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body text-center">
                <h5>Total Data Tamu</h5>
                <h1><?= $stats['total_form'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body text-center">
                <h5>Total Orang Hadir</h5>
                <h1><?= $stats['total_pax'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

</div>

<div class="table-responsive">

<table class="table table-dark table-striped table-hover table-bordered align-middle">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tamu / Delegasi</th>
            <th>Klasifikasi</th>
            <th>Pax</th>
            <th>Instansi / Asal</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM buku_undangan ORDER BY waktu_hadir DESC");
        $no=1;

        if(mysqli_num_rows($query)>0){

            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_tamu']}</td>
                        <td>{$row['hubungan']}</td>
                        <td>{$row['jumlah_pax']}</td>
                        <td>{$row['instansi']}</td>
                    </tr>";

                $no++;
            }

        }else{

            echo "<tr>
                    <td colspan='5' class<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gala Event & Conference - Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: radial-gradient(circle, #1a2a3a 0%, #0d1622 100%); 
            color: #ffffff;
            margin: 0; 
            padding: 40px 20px; 
        }
        .container { 
            max-width: 750px; 
            margin: 0 auto; 
            background: rgba(255, 255, 255, 0.03); 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.6); 
            border: 1px solid #d4af37; 
            backdrop-filter: blur(10px);
        }
        h2 { 
            font-family: 'Cinzel', serif; 
            text-align: center; 
            color: #d4af37; 
            font-size: 30px;
            letter-spacing: 3px;
            margin-bottom: 5px;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .sub-title {
            text-align: center;
            font-size: 12px;
            letter-spacing: 4px;
            color: #b3c6d4;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        label { 
            font-weight: 600; 
            display: block; 
            margin-top: 20px; 
            color: #d4af37; 
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        input, select { 
            width: 100%; 
            padding: 12px 15px; 
            margin-top: 8px; 
            border: 1px solid rgba(212, 175, 55, 0.3); 
            border-radius: 6px; 
            box-sizing: border-box; 
            background: rgba(13, 22, 34, 0.8);
            color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.4);
        }

button:hover{
    transform:translateY(-2px);
}
        
        .alert-info { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            padding: 15px; 
            border-radius: 6px; 
            font-weight: 600; 
            margin-bottom: 30px; 
            text-align: center; 
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 14px;
            letter-spacing: 1px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            background: rgba(13, 22, 34, 0.4);
        }
        th, td { 
            padding: 14px; 
            border-bottom: 1px solid rgba(255,255,255,0.05); 
            text-align: left; 
            font-size: 14px;
        }
        th { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        td { color: #e0e8f0; }
        .btn-admin { 
            display: inline-block; 
            background: transparent;
            color: #b3c6d4; 
            padding: 6px 15px; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 11px; 
            border: 1px solid rgba(255,255,255,0.2);
            letter-spacing: 1px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .btn-admin:hover {
            color: #d4af37;
            border-color: #d4af37;
            }
        .btn-warning{
             background:#f39c12;
             color:white;
             padding:5px 10px;
             text-decoration:none;
             border-radius:4px;
             font-size:12px;
             font-weight:bold;
             margin-right:5px;
            }
            btn-warning:hover{
             background:#d68910;
}
        .btn-danger{
             background:#e74c3c;
             color:white;
             padding:6px 12px;
             text-decoration:none;
             border-radius:5px;
             font-size:12px;
             font-weight:bold;
             display:inline-block;
}

            .btn-danger:hover{
             background:#c0392b;
}
        
    </style>
</head>
<body>

<div class="container">
    <div style="text-align: center;">
  <a href="admin.php" class="btn btn-outline-warning mb-3">
    🔒 Dashboard Admin
</a>
    </div>

    <h2>EXCLUSIVE GALA EVENT</h2>
    <div class="sub-title">Registrasi Kehadiran Delegasi & Tamu VIP</div>
    
    <form action="proses.php" method="POST">
        <label>Nama Lengkap & Gelar:</label>
<input
type="text"
name="nama_tamu"
class="form-control"
placeholder="Contoh: Dr. H. Sahrul, S.E., M.M."
required>

        <label>Kategori Klasifikasi Tamu:</label>
        <select name="hubungan">
            <option value="Tamu Kehormatan (VVIP)">Tamu Kehormatan (VVIP)</option>
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Peserta Khusus">Peserta Khusus</option>
        </select>

        <label>Jumlah Delegasi / Pendamping (Pax):</label>
        <select name="jumlah_pax">
            <option value="1">1 Orang</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
        </select>

        <label>Instansi / Alamat Asal:</label>
        <input
type="text"
name="instansi"
class="form-control"
placeholder="Contoh: Universitas Sarjanawiyata Tamansiswa"
required>

        <button type="submit"
        name="simpan"
        class="btn btn-success w-100">
    Konfirmasi Kehadiran Resmi
</button>
    </form>

    <hr style="margin: 40px 0 30px 0; border: 0; border-top: 1px solid rgba(212,175,55,0.2);">

    <h3 style="font-family: 'Cinzel', serif; text-align: center; color: #d4af37; letter-spacing: 2px; font-size: 18px;">Daftar Konfirmasi Kehadiran</h3>

    <?php
    $hitung = mysqli_query($koneksi, "SELECT COUNT(*) as total_form, SUM(jumlah_pax) as total_pax FROM buku_undangan");
    $stats = mysqli_fetch_assoc($hitung);
    ?>
     <div class="row mb-4">

    <div class="col-md-6 mb-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body text-center">
                <h5>Total Data Tamu</h5>
                <h1><?= $stats['total_form'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body text-center">
                <h5>Total Orang Hadir</h5>
                <h1><?= $stats['total_pax'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

</div>

<div class="table-responsive">

<table class="table table-dark table-striped table-hover table-bordered align-middle">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tamu / Delegasi</th>
            <th>Klasifikasi</th>
            <th>Pax</th>
            <th>Instansi / Asal</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM buku_undangan ORDER BY waktu_hadir DESC");
        $no=1;

        if(mysqli_num_rows($query)>0){

            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_tamu']}</td>
                        <td>{$row['hubungan']}</td>
                        <td>{$row['jumlah_pax']}</td>
                        <td>{$row['instansi']}</td>
                    </tr>";

                $no++;
            }

        }else{

            echo "<tr>
                    <td colspan='5' class='text-center'>
                        Belum ada data.
                    </td>
                  </tr>";

        }
        ?>

    </tbody>

</table>

</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>='text-center'>
                        Belum ada data.
                    </td>
                  </tr>";

        }
        ?>

    </tbody>

</table>

</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>, 175, 55, 0.4);
        }

button:hover{
    transform:translateY(-2px);
}
        
        .alert-info { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            padding: 15px; 
            border-radius: 6px; 
            font-weight: 600; 
            margin-bottom: 30px; 
            text-align: center; 
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 14px;
            letter-spacing: 1px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            background: rgba(13, 22, 34, 0.4);
        }
        th, td { 
            padding: 14px; 
            border-bottom: 1px solid rgba(255,255,255,0.05); 
            text-align: left; 
            font-size: 14px;
        }
        th { 
            background: rgba(212, 175, 55, 0.1); 
            color: #d4af37; 
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        td { color: #e0e8f0; }
        .btn-admin { 
            display: inline-block; 
            background: transparent;
            color: #b3c6d4; 
            padding: 6px 15px; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 11px; 
            border: 1px solid rgba(255,255,255,0.2);
            letter-spacing: 1px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .btn-admin:hover {
            color: #d4af37;
            border-color: #d4af37;
            }
        .btn-warning{
             background:#f39c12;
             color:white;
             padding:5px 10px;
             text-decoration:none;
             border-radius:4px;
             font-size:12px;
             font-weight:bold;
             margin-right:5px;
            }
            btn-warning:hover{
             background:#d68910;
}
        .btn-danger{
             background:#e74c3c;
             color:white;
             padding:6px 12px;
             text-decoration:none;
             border-radius:5px;
             font-size:12px;
             font-weight:bold;
             display:inline-block;
}

            .btn-danger:hover{
             background:#c0392b;
}
        
    </style>
</head>
<body>

<div class="container">
    <div style="text-align: center;">
  <a href="admin.php" class="btn btn-outline-warning mb-3">
    🔒 Dashboard Admin
</a>
    </div>

    <h2>EXCLUSIVE GALA EVENT</h2>
    <div class="sub-title">Registrasi Kehadiran Delegasi & Tamu VIP</div>
    
    <form action="proses.php" method="POST">
        <label>Nama Lengkap & Gelar:</label>
<input
type="text"
name="nama_tamu"
class="form-control"
placeholder="Contoh: Dr. H. Sahrul, S.E., M.M."
required>

        <label>Kategori Klasifikasi Tamu:</label>
        <select name="hubungan">
            <option value="Tamu Kehormatan (VVIP)">Tamu Kehormatan (VVIP)</option>
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Peserta Khusus">Peserta Khusus</option>
        </select>

        <label>Jumlah Delegasi / Pendamping (Pax):</label>
        <select name="jumlah_pax">
            <option value="1">1 Orang</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
        </select>

        <label>Instansi / Alamat Asal:</label>
        <input
type="text"
name="instansi"
class="form-control"
placeholder="Contoh: Universitas Sarjanawiyata Tamansiswa"
required>

        <button type="submit"
        name="simpan"
        class="btn btn-success w-100">
    Konfirmasi Kehadiran Resmi
</button>
    </form>

    <hr style="margin: 40px 0 30px 0; border: 0; border-top: 1px solid rgba(212,175,55,0.2);">

    <h3 style="font-family: 'Cinzel', serif; text-align: center; color: #d4af37; letter-spacing: 2px; font-size: 18px;">Daftar Konfirmasi Kehadiran</h3>

    <?php
    $hitung = mysqli_query($koneksi, "SELECT COUNT(*) as total_form, SUM(jumlah_pax) as total_pax FROM buku_undangan");
    $stats = mysqli_fetch_assoc($hitung);
    ?>
     <div class="row mb-4">

    <div class="col-md-6 mb-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body text-center">
                <h5>Total Data Tamu</h5>
                <h1><?= $stats['total_form'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body text-center">
                <h5>Total Orang Hadir</h5>
                <h1><?= $stats['total_pax'] ?? 0; ?></h1>
            </div>
        </div>
    </div>

</div>

<div class="table-responsive">

<table class="table table-dark table-striped table-hover table-bordered align-middle">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tamu / Delegasi</th>
            <th>Klasifikasi</th>
            <th>Pax</th>
            <th>Instansi / Asal</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM buku_undangan ORDER BY waktu_hadir DESC");
        $no=1;

        if(mysqli_num_rows($query)>0){

            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_tamu']}</td>
                        <td>{$row['hubungan']}</td>
                        <td>{$row['jumlah_pax']}</td>
                        <td>{$row['instansi']}</td>
                    </tr>";

                $no++;
            }

        }else{

            echo "<tr>
                    <td colspan='5' class='text-center'>
                        Belum ada data.
                    </td>
                  </tr>";

        }
        ?>

    </tbody>

</table>

</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
