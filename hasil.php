<?php 
session_start(); 
$hasil = $_SESSION['hasil_diagnosa']; 
if ($hasil >= 0.9) { 
    $status = "Sangat mungkin"; 
} else if ($hasil >= 0.7) { 
    $status = "Mungkin"; 
} else if ($hasil >= 0.5) { 
    $status = "Kemungkinan kecil"; 
} else { 
    $status = "Tidak mungkin"; 
} 
$nama_penyakit = $_SESSION['nama_penyakit']
?> 
<!DOCTYPE html> 
<html> 
<head>
<link rel="icon" href="assets/images/logo.png">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
<title> Hasil Diagonosa  </title>    
    <meta name="viewport"   content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Diagnosa">
    <meta name="author" content="Ane">
    <meta name="keywords" content="Hasil Diagnosa">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>    
<title>Halaman Hasil Diagnosa</title> 
</head> 
<body> 
<header>
            <nav>
            <a href="index.php"><img src="assets/images/logo.png" alt="Logo Puskesmas Talawi"><b> Puskesmas Talawi</b></a>
                <ul>
                    <li> <a href="index.php"> Beranda </a></li>
                    <li> <a href="#kontak"> Kontak</a></li>
                </ul>
            </nav>
        </header>

    <main>
        
        <section id="hasil diagonsa" class="content">
    <h1>Hasil Diagnosa Anda</h1> 
    <h3>Berdasarkan gejala yang anda inputkan Hasil diagnosa Anda adalah <?php echo $status;?> menderita <?php echo $nama_penyakit; ?> dengan Persentase kepercayaan: <?php echo round($hasil * 100, 2); ?>%</h3> 
    <h3>Silahkan pelajari hasil diagnosa anda dengan klik link dibawah ini</h3>
        </section>
        <!---bagian blog-->
        <section id="blog">
                <h1 class="judul teks-tengah"> Macam Penyakit Paru</h1>
                <div class="container">
                     <!---artikel 1-->
                    <article class="card">
                        <img src="assets/images/ispa.png" class="blog-image" alt="ispa">
                        <section class="blog-desc">
                            <span> 26 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="ispa.html">Infeksi Saluran Penafasan Atas (ISPA)</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 1-->

                    <!--Artikel 2-->
                    <article class="card">
                        <img src="assets/images/asma.jpeg" class="blog-image" alt="asma">
                        <section class="blog-desc">
                            <span> 27 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="asma.html">Asma</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 2-->

                    <!--Artikel 3-->
                    <article class="card">
                        <img src="assets/images/bronkiolitis.png" class="blog-image" alt="bronkiolitis">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="bronkiolitis.html">Bronkiolitis</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 3-->

                    <!--Artikel 4-->
                    <article class="card">
                        <img src="assets/images/bronkitisakut.jpg" class="blog-image" alt="bronkitisakut">
                        <section class="blog-desc">
                            <span> 1 mei 2023</span>
                            <h3 class="teks-kiri">
                                <a href="bronkitisakut.html">Bronkitis Akut</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 4-->
                   
                    <!--Artikel 5-->
                    <article class="card">
                        <img src="assets/images/tuberkulosis.png" class="blog-image" alt="tuberkulosis">
                        <section class="blog-desc">
                            <span> 4 Mei 2023</span>
                            <h3 class="teks-kiri">
                                <a href="tbparu.html">Tuberkulosis Paru (TB Paru)</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 5-->

                    <!--Artikel 6-->
                    <article class="card">
                        <img src="assets/images/ppok.png" class="blog-image" alt="PPOK">
                        <section class="blog-desc">
                            <span> 7 Mei 2023</span>
                            <h3 class="teks-kiri">
                                <a href="ppok.html">Penyakit Paru Obstruktif Kronik (PPOK)</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 6-->

                    <!--Artikel 7-->
                    <article class="card">
                        <img src="assets/images/pneumonia.GIF" class="blog-image" alt="Pneumonia">
                        <section class="blog-desc">
                            <span> 10 Mei 2023</span>
                            <h3 class="teks-kiri">
                                <a href="pneumonia.html">Pneumonia</a> 
                            </h3>
                        </section>
                    </article>
                    <!--Artikel 7-->
                </div>
            </section>
            <!---bagian blog-->
            <section id="penutup" class="content">
                <h3>Apabila ingin berkonsultasi dan bertemu dengan dokter terkait hasil diagnosa anda silahkan isi form dibawah ini dan klik kirim pesan</h3> 
            </section>
    <section id="kontak">
                <h1 class="judul teks-tengah">Kontak Pendaftaran</h1>
                <div class="container">
                    <div style="width: 50%;text-align: left;">
                    <b> Telp :</b>
                    <p> (0754) 410444</p>

                    <b> Alamat :</b>
                    <p> Talawi Hilir, Talawi, Kota Sawahlunto
                    <p> Sumatera Barat </p>
                    
                    <b> Jam buka :</b>
                    <p> 24 Jam</p>
                    </div>
                    <form action="send.php" method="post" target="_blank">
                        <input type="text" name="name" placeholder="Nama"/>
                        <input type="text" name="usia" placeholder="Usia"/>
                        <input type="text" name="pesan" placeholder="Pesan Anda"/>
                    </textarea>
                    <br/>
                    <button type="submit" name="submit" class="btn btn-biru" > Kirim Pesan</button>
                    </form>
                </iv>
                </section>
                <!--Bagian Kontak-->
        </main>
        <footer>
            <p> Web Diagnosa Penyakit Paru - Puskesmas Talawi</p>
        </footer>
</body>
</html>