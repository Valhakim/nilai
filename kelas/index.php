<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Modul Anggota</title>
</head>
<body>
    <a href="..">Home</a> | <a href="../siswa">Siswa</a>
    <h1>Modul Kelas</h1>
    <a href="add.php">Tambah Data</a>
    <table cellspacing="0" cellpadding="5" border="1">
        <tr bgcolor="#ccc">
            <th>No</th>
            <th>Kelas</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Pilihan</th>
        </tr>
        <?php
        require_once("../config.php");
        $sql  = "SELECT * FROM kelas";
        $query = mysqli_query($config, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td> Data Kosong </td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td align='center'>$no</td>";
                    echo "<td>" . $r['kelas'] . "</td>";
                    echo "<td align='center'>" . $r['kapasitas'] . "</td>";
                    echo "<td align='center'>" . $r['terisi'] . "</td>";
                    echo '<td>
                    <a href="edit.php?id='.$r['id'].'">Edit</a> |
                    <a href="hapus.php?id='.$r['id'].'" onclick="return confirm(\'Yakim Akan Dihapus?\')">Hapus</a>
                    </td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
</body>
</html>