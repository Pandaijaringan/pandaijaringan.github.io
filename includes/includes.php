<?php
  // Membaca konten dari file lain
  $fileContent = file_get_contents('http://localhost/web_responsif/index.html');

  // Mengambil baris tertentu (misalnya, baris ke-5 hingga ke-10)
  $lines = explode("\n", $fileContent);
  $selectedLines = array_slice($lines, 0, 64); // Mulai dari indeks 0 (baris ke-1) dan ambil 6 baris
  $htmlToImport = implode("\n", $selectedLines);

  // Menampilkan konten yang diimpor
  echo $htmlToImport;
?>