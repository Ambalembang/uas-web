<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TOKOKU</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/styles.css" />
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </header>
        <section class="about sect bd-cont">
            <div class="about_cont bd-grid">
                <div class="about_data">
                    <h2 class="section-header about_initial">Rumahnya Laptop</h2>
                    <p class="about_description">Website tempatya laptop-laptop berkuliatas, harga terjangkau dan dapat dipercaya</p><br>
                    <a href="store.php" class="btn btn-primary">Belanja Sekarang <i style="color: white;" class='bx bx-right-arrow-circle'></i></a>
                </div>

                <img src="assets/img/GIF PEMRO.WEB (Presentation (169)).gif" alt="" class="about_img">
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


</p>