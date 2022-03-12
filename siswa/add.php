<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Pesat</title>
    <link rel="shortcut icon" href="../gambar/unnamed.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Data Siswa
                </h1>
                <hr>
                <a href="index.php" class="btn btn-primary" style="float: right;">Kembali</a> <br></br>
            </div>
            <form action="save.php" method="post">
                <div class="mb-2">
                    <label for="nis" class="form-label">Nomor Induk Siswa*</label>
                    <input type="number" name="nis" class="form-control" required autofocus>
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Siswa*</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir (Kabupaten/Kota)</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="kelas_id" class="form-label">Kelas*</label>
                    <select name="kelas_id" required class="form-control">
                        <option value="">Pilih Kelas</option>
                        <?php
                        require_once('../config.php');
                        $sql = "SELECT * FROM kelas";
                        $result = mysqli_query($config, $sql);
                        while ($r = mysqli_fetch_assoc($result)){
                            echo "<option value='" . $r['id'] . "'>" . $r['kelas'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <input type="reset" class="btn btn-md btn-warning">
                    <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>