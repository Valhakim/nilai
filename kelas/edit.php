<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas</title>
</head>
<body>
    <h1>Edit Data Kelas</h1>
    <?php
     require_once("../config.php");
     $id = $_GET['id'];
     $sql = "SELECT * FROM kelas WHERE id=$id";
     $query = mysqli_query($config, $sql);
     $r = mysqli_fetch_assoc($query);
    ?>
    <form action="update.php" method="post">

        <div>
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" value="<?= $r['kelas'] ?>" required>
        </div>
        <div>
          <label for="Kapasitas">Kapasitas</label>
          <input type="number" name="kapasitas" value="<?= $r['kapasitas'] ?>" >
        </div>
        <div>
          <label for="Terisi">Terisi</label>
          <input type="number" name="terisi" value="<?= $r['terisi'] ?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $r['id'] ?>">
          <input type="reset">
          <button type="submit" name="update">Update</button>
        </div>
     

    </form>
</body>
</html>