<?php

include "../session2.php";
include "../koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenovo IdeaPad Slim</title>
    <link rel="stylesheet" href="../css/styles.css" />
</head>
<body>
    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <a href="../store.php">Kembali</a>
                <li><a href="../home.php">HOME</a></li>
                <li><a href="../store.php">STORE</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../team.php">TEAM</a></li>
            </ul>
        </nav>
        <h1 class="band-name band-name-large">TOKOKU</h1>
    </header>

<div class="product_info" id="product-info">
    <h2 class="product_name">Lenovo IdeaPad Slim</h2>
    <img src="../assets/img/product4.png" class="product_img" alt="">
    <p>Spesifikasi</p>
    <table class="table_info" border="1" cellpadding="8">
        <tr><td>AMD Ryzen™ 5 4500U</td></tr>
        <tr><td>14" FHD (1920 x 1080) IPS, 300 nits, 45% NTSC</td></tr>
        <tr><td>8GB Soldered DDR4-3200 512GB SSD M.2 2242 PCIe NVMe </td></tr>
        <tr><td>Integrated AMD graphics</td></tr>
        <tr><td>Speaker 2 x 2W yang terletak menghadap pengguna dengan Dolby Audio</td></tr>
        <tr><td>Privacy shutter, Finger Print</td></tr>
        <tr><td>Windows 10 Home+OHS 2019(Office Home Student)</td></tr>
    </table>
</div>
<footer class="main-footer">
    <div class="container main-footer-container">
        <h3 class="band-name">TOKOKU</h3>
        <ul class="nav footer-nav">
            <li>
                <a href="https://www.youtube.com" target="_blank">
                    <img src="../assets/logo/Youtube Logo.png">
                </a>
            </li>

            <li>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="../assets/logo/Facebook Logo.png">
                </a>
            </li>
        </ul>
    </div>
    <p class="footer_copy">&#169; 2022 Kelompok Pemograman Web. All Right Reserved</p>
</footer>
</body>
</html>