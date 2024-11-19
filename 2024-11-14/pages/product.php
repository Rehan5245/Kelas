<?php
    $sql = "SELECT * FROM produk";
    // echo $sql
    $hasil = mysqli_query($koneksi, $sql);
    $baris = mysqli_num_rows($hasil);
    echo $baris;
    if ($baris == 0) {
        echo"<h1>";
        
    }
?>
<div class="produk">
    <h1>produk</h1>
    <div class="detail-produk">
        <img src="/images/1299537.jpg" alt="">
    </div>   
</div>