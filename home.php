<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">



</head>
<body>
    
<!--header section starts-->
<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="book_display.php">book details</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>


<!--header section ends-->

<!--home section starts -->

<section class="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">
   
          <div class="swiper-slide slide" style="background:url(images/home1.jpg)no-repeat">
             <div class="content">
                <span> explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/home2.jpg)no-repeat">
             <div class="content">
                <span> explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/home3.jpg)no-repeat">
             <div class="content">
                <span> explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
</section>

<!--home section ends-->




















<!-- services section starts -->

<section class="services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">

       <div class="box">
          <img src=images/adventure.png alt="">
          <h3>adventure</h3>
       </div>

       <div class="box">
          <img src=images/tourguide.png alt="">
          <h3>tour guide</h3>
       </div>

       <div class="box">
          <img src=images/trekking.png alt="" >
          <h3>trekking</h3>
       </div>

       <div class="box">
          <img src=images/campfire.png alt="">
          <h3>camp fire</h3>
       </div>

       <div class="box">
          <img src=images/offroad.png alt="" >
          <h3>off road</h3>
       </div>

       <div class="box">
          <img src=images/camping.png alt="" >
          <h3>camping</h3>
       </div>

    </div>

</section>
<!-- services section ends -->


<!--home about section starts-->

<section class="home-about">

     <div class="image">
         <img src="images/about3.jpeg" alt="">
     </div>    

      <div class="content">
          <h3>about us</h3>
          <p>Welcome to Master's travel, your gateway 
            to unforgettable adventures and incredible destinations!<br>

           We are passionate about helping travelers explore the world with ease, 
           comfort, and excitement. Whether you're seeking thrilling experiences, 
           tranquil getaways, or cultural journeys, we specialize in curating personalized 
           travel packages that cater to every kind of explorer</p>
          <a href="about.php" class="btn">read more</a>

      </div>


</section>

<!--home about section ends-->


<!--home packages section starts-->

<section class="home-packages">

    <h1 class="heading-title"> our packages</h1>

    <div class="box-container">

       <div class="box">
         <div class="image">
            <img src="images/book2.jpg" alt="">
         </div>
         <div class="content">
             <h3>adventure & tour</h3>
             <p>Embark on unforgettable journeys, explore hidden gems, and create lifelong memories with our exciting adventures and tours.</p>
             <a  href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/book4.jpg" alt="">
         </div>
         <div class="content">
             <h3>adventure & tour</h3>
             <p>Discover thrilling adventures and unforgettable tours, curated to inspire your next journey.</p>
             <a  href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/book5.jpg" alt="">
         </div>
         <div class="content">
             <h3>adventure & tour</h3>
             <p>Your gateway to extraordinary experiences: Discover thrilling adventures and unforgettable tours.</p>
             <a  href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>  

   <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    
</section>
<!--home packages section ends-->

<section class="home-offer">
    <div class="content">
       <h3>upto 50% off</h3>
       <p>Unforgettable adventures, half-price thrills.
       Maximum savings, minimum effort.</p>
    <a href="book.php" class="btn">book now</a>
    </div>
</section>




<!--home offer section starts-->




<!--home offer section ends-->



<!--footer section starts-->

<section class="footer">

   <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
        <a href="#"> <i class="fas fa-envelope"></i>imasha@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>No 24,Kandy road,Malabe</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>


    </div>

  <div class="credit"> created by <span>I K S web designer</span> | All rights reserved! </div>

</section>


<!--footer section ends-->

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>



</body>
</html>