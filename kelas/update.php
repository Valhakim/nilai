<?php 
if(isset($_POST ['update'])) {
   require_once("../config.php");
   $id = $_POST['id'];
   $kelas = $_POST['kelas'];
   $kapasitas = $_POST['kapasitas'];
   $terisi = $_POST['terisi'];

   $sql = "UPDATE kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
   $query = mysqli_query($config, $sql);
   if($query) {
       header('location: index.php');
     }
     else {
         echo "Data gagal disimpan";
     }

} // made by muhammad fadel