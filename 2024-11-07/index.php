<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Sedati</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="" srcset=""></a>
            </div>
            <div class="sekolah">
                <h2>SMPN 2 Sedati</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=home">home</a></li>
                    <li><a href="?menu=galeri">galeri</a></li>
                    <li><a href="?menu=jadwal">jadwal</a></li>
                    <li><a href="?menu=kegiatan">kegiatan</a></li>
                    <li><a href="?menu=kontak">kontak</a></li>
                    <li><a href="?menu=sejarah">sejarah</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET["menu"])) {
                $menu = $_GET["menu"];
                echo $menu;

                if ($menu == "home") {
                    require_once("pages/home.php");
                }
                if ($menu == "galeri") {
                    require_once("pages/galeri.php");
                }
                if ($menu == "jadwal") {
                    require_once("pages/jadwal.php");
                }
                if ($menu == "kegiatan") {
                    require_once("pages/kegiatan.php");
                }
                if ($menu == "kontak") {
                    require_once("pages/kontak.php");
                }
                if ($menu == "sejarah") {
                    require_once("pages/sejarah.php");
                } else {
                    require_once("pages/home.php");
                }
            }
            ?>
        </div>
        <div class="footer">
            <p>web ini dibuat oleh saya</p>
        </div>
    </div>
</body>

</html>