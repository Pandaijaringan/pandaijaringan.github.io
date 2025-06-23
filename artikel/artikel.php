<?php
// Deklarasikan judul
$title = "Artikel-Pandai Jaringan";
$favicon = "";
// deklarasikan url 
// $url = "http://" .$_SERVER['SERVER_ADDR']. "/web_responsif/";
$url = "http://localhost/web_responsif/";
// Sertakan file header
include_once(__DIR__ . "/../includes/header.php");
// </header> 
?>
<!-- Isi konten -->
<main>
    <section class="halaman_artikel">
        <div class="header_artikel">
            <h2>Artikel</h2>
            <select name="urutkan" id="urutkan">
                <option value="">--Silahkan dipilih--</option>
                <option value="Nama">Nama</option>
                <option value="Tanggal dipublikasilan">Tanggal dipublikasikan</option>
                <option value="Populer">Terpopuler</option>
                <option value=""></option>
            </select>
        </div>
    </section>
 </main>
 <!-- Footer -->
  <?php
  include_once(__DIR__ . "/../includes/footer.php");
  ?>
