<?php
require "konek.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE  FROM `data` WHERE id=$_GET[id]");
  if($query){
    echo '<script language = "javascript">
        alert("Data Berhasil Di Hapus") ;document.location = "data.php";</script>'; 
  } else {
    echo "Delete gagal";
  }
}
?>