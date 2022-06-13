<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TOKOKU | About</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
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

        <section class="content-section container">
            <h2 class="section-header">ABOUT</h2>
            <img class="about-band-image" src="assets/img/service1.png">
            <p style="text-align: justify;">TOKOKU <br>
            Merupakan sebuah website Front-End yang disediakan agar pengunjung dapat melakukan pembelian barang barang elektronik terkhusunya Laptop. Website ini menyediakan fitur agar pembeli dapat melakukan pembelian barang secara online dengan lebih mudah. </p>
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