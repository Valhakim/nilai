<?php 
if(isset($_POST ['simpan'])) {
   require_once("../config.php");
   $kelas = $_POST['kelas'];
   $kapasitas = $_POST['kapasitas'];
   $terisi = $_POST['terisi'];

   $sql = "INSERT INTO kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi'";
   $query = mysqli_query($config, $sql);
   if($query) {
       header('location: index.php');
     }
     else {
         echo "Data gagal disimpan";
     }

} // made by muhammad fadel