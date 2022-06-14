<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Team</title>
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
        <br><br><br><br><br><br><br>
        <button style="color: white;" type="button" class="btn btn-header btn-play"><a href="https://drive.google.com/drive/folders/1RQ5eED8dhKM5CkhIes7NJ31pdPm_YLdZ?usp=sharing">&#9658;</a></button>
    </header>
    <section class="contact section bd-container">
        <h2 class="section-header">Anggota Kelompok</h2>

         <div class="contact_container bd-grid">

            <div class="contact_content">
                <img src="assets/img/contact-aldi.png" alt="" class="contact_img">
                <h3 class="contact_name">Kristian Aldi Ambalembang</h3>
                <h3 class="contact_name">20021106058</h3>
            </div>

            <div class="contact_content">
                <img src="assets/img/contact-tamara.png" alt="" class="contact_img">
                <h3 class="contact_name">Tamara Patricia Marcus</h3>
                <h3 class="contact_name">20021106013</h3>
            </div>

            <div class="contact_content">
                <img src="assets/img/contact-syalfa.png" alt="" class="contact_img">
                <h3 class="contact_name">Syalfa Aura Khairunnisa</h3>
                <h3 class="contact_name">20021106170</h3>
            </div>

            <div class="contact_content">
                <img src="assets/img/contact-matius.png" alt="" class="contact_img">
                <h3 class="contact_name">Matius Putu Kusuma Latuserimala</h3>
                <h3 class="contact_name">20021106132</h3>
            </div>

        </div>
    </section>
    <div class="for_footer">
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
    </div>
</body>
</html>