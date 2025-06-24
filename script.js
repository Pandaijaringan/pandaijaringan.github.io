// navbar titrik 3
// let searchContainer = document.querySelector(".search-container");
// let navbar = document.getElementById("navbar");
// Loading
const loading = document.querySelector(".loading");
function loader () {
  setInterval(loading.classList.add("hidden"), 1500);
}
function toogleMobileMenu(){
  [navbar, searchContainer].forEach(el => el.classList.toggle("hidden"));
}
// Fungsi yang dijalankan pertama kali saat mulai membuka halaman web
window.onload=function(){
  const titik3 = document.getElementById("titik3");
  loader();
  titik3.addEventListener("click", toogleMobileMenu, true);
  handleResponsiveMenu(); // panggil saat halaman dimuat
  window.addEventListener("resize", handleResponsiveMenu, true); // panggil saat resize
  filterData();
}

// navbar include
function initNavbar() {
  if (titik3 && navbar && searchContainer) {
    titik3.addEventListener("click", function () {
      navbar.classList.toggle("hidden");
      searchContainer.classList.toggle("hidden");
    });
  }
}

// Fungsi filter data 
function filterData () {
  const cari = document.getElementById("Cari");
  const $konten = document.querySelectorAll("section .wrapper-artikel .preview-artikel");
  cari.addEventListener("input", function(event) {
    event.preventDefault();
    // Ubah input yang diketik ke huruf kecil
    const keyword = cari.value.toLowerCase();
    // variabel $konten dijadikan per item
    $konten.forEach(konten => {
      const judul = konten.querySelector("h4").textContent.toLowerCase();
      if (judul.includes(keyword)) {
        konten.classList.remove("hidden");
      } else {
        konten.classList.add("hidden");
      }
    });
  });
}
// Fungsi untuk menampilan/menyembunyikan navigasi
function handleResponsiveMenu() {
  // Jangan hide saat input sedang fokus
  const cari = document.getElementById("Cari");
  if (window.innerWidth > 1000) {
    navbar.classList.remove("hidden");
    searchContainer.classList.remove("hidden");
  } else {
    // Jika input sedang fokus, jangan hide
    if (document.activeElement === cari) return;
    navbar.classList.add("hidden");
    searchContainer.classList.add("hidden");
  }
}
// </navbar>



// nav darkmode
// const darkMode = document.querySelector("#dark");
// console.log(darkMode);
// /nav darkmode

// Slideshow
let slideIndex = 0;
const slides = document.querySelectorAll(".slider-gambar img");

function showSlides() {
  slides.forEach((slide, index) => {
    slide.style.opacity = "0";
    slide.style.transition = "opacity 1s ease-in-out";
    slide.style.position = "absolute";
    slide.style.top = "0";
    slide.style.left = "0";
    slide.style.width = "100%";
    slide.style.height = "100%";
  });
  
  slides[slideIndex].style.opacity = "1";

  slideIndex = (slideIndex + 1) % slides.length;
}

setInterval(showSlides, 4000);
showSlides();
// // Slideshow

// dropdown
// Memilih elemen induk navigasi
const navItems = document.querySelectorAll("#navbar > .navbar-items");

navItems.forEach(item => {
  const dropdown = item.querySelector(".dropdown");
  item.addEventListener("mouseenter", function() {
    if (dropdown) dropdown.classList.remove("hidden");
  });

  item.addEventListener("mouseleave", function() {
    if (dropdown) dropdown.classList.add("hidden");
  });
});
// /dropdown

// Animasi saat discroll
const reveals = document.querySelectorAll('.reveal');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('active');
    } else {
      entry.target.classList.remove('active'); // opsional: hilangkan saat keluar layar
    }
  });
}, {
  threshold: 0.1, // seberapa banyak bagian elemen terlihat (10%)
});

reveals.forEach(el => observer.observe(el));
// </Animasi saat discroll

// Kotak pencarian
// Ambil elemen input dan semua konten artikel
/*const inputCari = document.getElementById("Cari");
const kontenArtikel = document.querySelectorAll(".konten-artikel");
console.log(inputCari);
console.log(kontenArtikel);
// Tambahkan event listener saat user mengetik
inputCari.addEventListener("input", function() {
  const keyword = inputCari.value.toLowerCase(); // Ambil keyword dan ubah ke huruf kecil
  console.log(keyword);
  kontenArtikel.forEach(function(artikel) {
    const teksArtikel = artikel.innerText.toLowerCase(); // Ambil isi artikel
    if (teksArtikel.includes(keyword)) {
      artikel.classList.remove("hidden"); // Tampilkan jika cocok
    } else {
      artikel.classList.add("hidden"); // hiddenkan jika tidak cocok
    }
  });
});*/



// /Kotak pencarian

