<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TOKOKU | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/styles.css" />
        <script src="store.js" async></script>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="team.php">TEAM</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">TOKOKU</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Laptop</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Acer Swift 5</span>
                    <a href="detail/acer.php"><img class="shop-item-image" src="assets/img/product1.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.15000000</span>
                        <button class="btn btn-primary shop-item-button" type="button">+ KERANJANG</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">ASUS RoG G531GD</span>
                    <a href="detail/asus.php"><img class="shop-item-image" src="assets/img/product2.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.13000000</span>
                        <button class="btn btn-primary shop-item-button"type="button">+ KERANJANG</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Razer Blade 15 Gaming Laptop</span>
                    <a href="detail/razer.php"><img class="shop-item-image" src="assets/img/product3.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.26000000</span>
                        <button class="btn btn-primary shop-item-button" type="button">+ KERANJANG</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Lenovo IdeaPad Slim</span>
                    <a href="detail/lenovo.php"><img class="shop-item-image" src="assets/img/product4.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.15000000</span>
                        <button class="btn btn-primary shop-item-button" type="button">+ KERANJANG</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Perangkat Tambahan</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Keyboard Keychron K3</span>
                    <a href="detail/keyboard.php"><img class="shop-item-image" src="assets/img/product5.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.1150000</span>
                        <button class="btn btn-primary shop-item-button" type="button">+ KERANJANG</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Mouse Razer DeathAdder V2</span>
                    <a href="detail/mouse.php"><img class="shop-item-image" src="assets/img/product6.png"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp.999000</span>
                        <button class="btn btn-primary shop-item-button" type="button">+ KERANJANG</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Keranjang</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">BARANG</span>
                <span class="cart-price cart-header cart-column">HARGA</span>
                <span class="cart-quantity cart-header cart-column">JUMLAH</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rp.0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">BELI</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">TOKOKU</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="assets/logo/Youtube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="assets/logo/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
            <p class="footer_copy">&#169; 2022 Kelompok Pemograman Web. All Right Reserved</p>
        </footer>
    </body>
</html>

