<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo">COVID-19@Southern Nias</a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about-covid19.php">about covid-19</a>
      <a href="statistics.php">statistics</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<section class="about">
   <div class="content">
      <h3>World</h3>
      <p id="world-case-count">
         <script>
            async function loadData() {
               const response = await fetch('https://jsonplaceholder.typicode.com/users/1');
               const datas = await response.json();
               document.getElementById("world-case-count").innerHTML = JSON.stringify(datas);
               document.getElementById("world-case-count").innerHTML = datas.id;
            }
            //loadData();
         </script>
         663.889.675
      </p>
  
      <h3>Indonesia</h3>
      <p id="indonesia-case-count">6.723.546</p>
   
      <h3>North Sumatera</h3>
      <p id="north-sumatera-case-count">127.325</p>

      <h3>South Nias</h3>
      <p id="south-nias-case-count">TBD</p>

   </div>
</section>



















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="https://covid19.go.id/"> <i class="fas fa-angle-right"></i> national task force</a>
         <a href="https://covid19.sumutprov.go.id/"> <i class="fas fa-angle-right"></i> provincial task force</a>
         <a href="https://covid19.who.int/"> <i class="fas fa-angle-right"></i> world health organization</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="https://niasselatankab.go.id/"> <i class="fas fa-angle-right"></i> south nias regency</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="tel:+6281261926344"> <i class="fas fa-phone"></i> +62-812-6192-6344 </a>
         <a href="tel:+628126769486"> <i class="fas fa-phone"></i> +62-81267-69486 </a>
         <a href="mailto:rofansmanao@gmail.com"> <i class="fas fa-envelope"></i> rofansmanao@gmail.com </a>
         <a href="http://maps.google.com/?q=South+Nias+Regency,+North+Sumatra,+Indonesia"> <i class="fas fa-map"></i> south nias, indonesia - north sumatera </a>
      </div>

   </div>

   <div class="credit"> a public service by the regional administrator</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>