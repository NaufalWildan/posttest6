<?php
require "konek.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ukuran = $_POST['ukuran'];
        $email = $_POST['email'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $tanggal = date('Y:m:d');

        $format_file = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $size = $_FILES['foto']['size'];
        $tipe = explode('.',$format_file);
        $tipe2 = $tipe[1];

        $rename = time() . '.' . $tipe2;
        $format_yang_diizinkan = array('jpg','png','jpeg');
        $max_size = 1000000;

        if(in_array($tipe2, $format_yang_diizinkan) === true){
            if($size < $max_size){
                move_uploaded_file($tmp_name, './file-foto/' . $rename);
                $query = mysqli_query($db,"INSERT INTO `data` (nama,ukuran,email,telpon,alamat,gambar,tanggal) VALUES ('$nama','$ukuran','$email','$telpon','$alamat','$rename','$tanggal')");
                if($query){
                    echo '<script language = "javascript">
                    alert("Data Berhasil Di Input") ;document.location = "index.html";</script>';    
                }
                else{
                    echo '<script language = "javascript">
                    alert("Data Gagal Di Input") </script>';    
                }
            }
        }
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toko Sepatu</title>
<link rel="stylesheet" href="stylesheet/stylebeli.css?5">
</head>

<body>
<div class="navbarcontainer">
    <div class="logo">
    <h1>Toko Sepatu</h1>
    </div>
    <div class="navbar">
    <ul>
        <li><img onclick="gantimodeterang()" class="sun" src="sun.png" alt=""></li>
        <li><img onclick="gantimodegelap()" class="moon" src="moon.png" alt=""></li>
        <a href="index.html"><li>Home</li></a>
        <a href=""><li>Promo</li></a>
        <a href="#tentang"><li>Tentang</li></a>
    </ul>
    </div>

</div>
<div class="main">
    <div class="form-class">
        <h2>Tambah Data Pembelian</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">Ukuran Sepatu</label><br>
            <input type="text" name="ukuran" class="form-text"><br>

            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text"><br>

            <label for="">Nomor HP</label><br>
            <input type="text" name="telpon" class="form-text"><br>

            <label for="alamat">Alamat</label><br>
            <textarea name="alamat" id="" cols="64" rows="10"></textarea><br>
            
            <label for="">Gambar</label><br>
            <input type="file" name="foto"><br>

            <button type="submit" name="submit">Submit</button>

        </form>
    </div>
</div>
<div class="footer">
    <h2 id="tentang">Tentang Kami</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ducimus nulla, consequatur omnis aliquid expedita, obcaecati vero recusandae quas exercitationem at eius est mollitia quis architecto veritatis ullam doloribus minima nemo vel a magni, dignissimos aliquam! Veniam, perspiciatis molestiae, fuga tempore tempora nulla quidem eligendi voluptatibus eos, neque asperiores nobis. Incidunt eius repudiandae enim sint! Deserunt, quod, magni laborum facere esse temporibus, molestias exercitationem quas quaerat ipsa iste! Iure, repellat.</p>
</div>



<script src="javascript.js"></script>
</body>
</html>