<?php
require "konek.php";

if(isset($_POST['id'])){
    $query = mysqli_query($db,"SELECT * FROM `data` WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    }
    if(isset($_POST['submit'])){
        $query = mysqli_query($db,"UPDATE `data` SET nama='$_POST[nama]',ukuran='$_POST[ukuran]',email='$_POST[email]',telpon='$_POST[telpon]',alamat='$_POST[alamat]' WHERE id=$_GET[id]");
        if($query){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Update") ;document.location = "data.php";</script>'; 
        } else {
            echo "Update gagal";
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
<link rel="stylesheet" href="stylesheet/styleedit.css?3">
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