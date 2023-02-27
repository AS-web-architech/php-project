<?php
include "./pages/bootstrap.php";
include "./pages/NavFooter.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticketBuckets.com</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
    <!-- swiper css cdn  -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/knives.jpg" alt="">
      </div>
      <div class="swiper-slide">
      <img src="./images/freeguy.png" alt="">

      </div>
      <div class="swiper-slide">
      <img src="./images/it.jpg" alt="">

      </div>
      <div class="swiper-slide">
      <img src="./images/luca.jpg" alt="">

      </div>
      <div class="swiper-slide">
      <img src="./images/enola.jpg" alt="">

      </div>
      <div class="swiper-slide">
      <img src="./images/luck.jpg" alt="">

      </div>
      <div class="swiper-slide">
      <img src="./images/spynext.jpeg" alt="">

      </div>
     
    </div>
    <div class="swiper-pagination"></div>
  </div>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    // mousewheel: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>





  

</body>
</html>