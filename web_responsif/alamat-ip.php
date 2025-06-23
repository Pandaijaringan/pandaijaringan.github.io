<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alamat IP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="icon" type="ip" href="https://www.google.com/imgres?q=IP%20Address%20png&imgurl=https%3A%2F%2Fcdn-icons-png.flaticon.com%2F512%2F6159%2F6159318.png&imgrefurl=https%3A%2F%2Fwww.flaticon.com%2Ffree-icon%2Fip-address_6159318&docid=Vqcs92fvc_ZvSM&tbnid=IWGCpj50lQ4JvM&vet=12ahUKEwivp7XTvuyLAxU4xTgGHb56ITYQM3oECBUQAA..i&w=512&h=512&hcb=2&ved=2ahUKEwivp7XTvuyLAxU4xTgGHb56ITYQM3oECBUQAA">
    <style>
        /* {
            background-color: black;
            color: wheat;
        }*/
        .title {
        /* Memberikan jarak antara header dengan judul konten */
        margin-top: 100px;
        }
        .title > h1 {
            text-align: center;
            border: solid 2px #02a9f7;
            background-color: #02a9f7;
            width: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            box-sizing: inherit;
            font-family: "Open Sans", sans-serif;
            color: #d4f0fc;
            font-size: 20pt;
            margin-bottom: 30px;
        }
        .title > img {
            height: auto;
            width: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
        }
        .konten-ip > p {
            font-family: "Poppins", sans-serif;
            font-size: 12pt;
        }
        .title > h3, .konten-ip > h3 {
            font-family: "Roboto", sans-serif;
            font-size: 16pt;
        }
    </style>
    <link rel="stylesheet" href="gaya.css">
    <!-- Koneksi phosfor icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css">
</head>
<body>
    <?php
    include "header.php";
    ?>
    <div class="title">
    <h1>IP Address</h1>
    <img id="ip-jpg" src="../tes2/img/ip.jpg" alt="ip">
    <h3>a. Apa itu IP address?</h3>
    </div>

    <div class="konten-ip">
        <!--Paragraf 1-->
        <p>Dikutip dari Wikipedia,  IP address adalah label numerik yang ditetapkan untuk setiap perangkat
            yang terhubung ke jaringan komputer yang menggunakan Protokol Internet untuk komunikasi.
           Alamat IP memiliki dua fungsi utama: host atau identifikasi antarmuka jaringan dan pengalamatan lokasi.</p>
        <h3>b. Fungsi IP address</h3>
        <!--Paragraf 2-->
        <p>IP address berfungsi agar seiap perangkat bisa terhubung
           satu sama lain. Alamat IP bisa dianalogikan sebagai <i>alamat rumah,</i>
           yang bisa dijadikan alamat pengirim atau penerima <i>paket</i> data.
        </p>
        <h3>c. IPv4 vs IPv6</h3>
         <!--Paragraf 3-->
         <p>Internet Protocol versi 4 (IPv4) mendefinisikan alamat IP sebagai nomor 32-bit. 
           Namun, karena pertumbuhan Internet dan menipisnya alamat IPv4 yang tersedia,
           versi baru IP (IPv6), menggunakan 128 bit untuk alamat IP, distandarisasi pada tahun 1998.
           Penyebaran IPv6 telah berlangsung sejak pertengahan 2000-an.</p>
        <h3>d. Format penulisan alamat IP</h3>
            <!--Paragraf 4-->
            <p>Alamat IP ditulis dan ditampilkan dalam notasi yang dapat dibaca manusia, seperti 172.16.254.1 di IPv4,
               dan 2001: db8: 0: 1234: 0: 567: 8: 1 di IPv6. Ukuran awalan perutean alamat ditetapkan dalam notasi CIDR 
               dengan suffixing alamat dengan jumlah bit signifikan, mis., 192.168.1.15/24, yang setara dengan subnet mask yang digunakan secara historis 255.255.255.0.</p>
    </div>
    <script src="script.js"></script>
</body>
</html>