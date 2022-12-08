<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/mediaqueries.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@600&display=swap');
</style>
<header>
    <?php
    include("includes/header.php")
    ?>
 </header>
<!-- <header>
    <div class="main-header-container">
        <input class="dark-mode-toggle" type="checkbox">
        <a href="index.html"><li class="hover-underline-animation">HOME</li></a>
        <li class="hover-underline-animation">ABOUT US</li>
        <a href="menu.html"><li class="hover-underline-animation">MENU</li></a>
        <li class="hover-underline-animation">RESERVATION</li>
        <li class="hover-underline-animation">LOCATIONS</li>
        <li class="hover-underline-animation">CONTACT</li>
    </div>
</header> -->
<body>
    <div class="main-banner-container">
        <div class="left-banner-container" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
            <h3>Welcome</h3>
            <h1>LEON'S BIGGEST<br> RESTAURANT</h1>
            <div class="container-lines">
                <div class="lines"></div>
                <img src="Images/restaurant (2412).png" alt="">
                <div class="lines"></div>
            </div>
           <!-- <nav>
                <ul>
                    <li>
                    home
                    <span></span><span></span><span></span><span></span>
                    </li>
                </ul>
            </nav>
        </div> -->
        <button>CHECK US OUT!</button>
        <div class="right-banner-container"></div>
    </div>
    <div class="main-container-1">
        <div class="left-main-container-1" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true"></div>
        <div class="right-main-container-1">
            <div class="right-main-container-text-box-1">
                <h1>THE BEST CHEFS IN TOWN</h1>
                <p>We believe in the power of great food. We believe that a delicious meal can make you feel invincible,
                    like you can take on the world—or at least your day. <br><br>

                    If you're looking for the best chefs in town, look no further than Leon's Restaurant. Our chefs are
                    trained to bring out the best in every ingredient they work with and make sure that every dish is
                    cooked to perfection. Whether it's a romantic dinner for two or a special occasion feast with
                    friends and family, we've got the perfect menu just waiting for you.
                </p>
                <button>OUR TEAM</button>
            </div>
        </div>
        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true"src="Images/chef (2).png" alt="">
    </div>
    <div class="main-container-2-background">
        <div class="main-container-2">
            <img data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" src="Images/hamburger.png" alt="">
            <div class="left-main-container-2">
                <div class="right-main-container-text-box-1">
                    <h1>THE BEST FOOD</h1>
                    <p>If you're looking for the best food in town, look no further. Leon's Restaurant has got you
                        covered.

                        We offer a menu of delicious dishes that will make you feel like a queen. Our chefs have spent
                        years perfecting their craft, so they know how to turn out each and every dish with the utmost
                        care and precision. We invite you to come experience our food for yourself—and trust us when we
                        say that you'll never want to leave!</p>
                  <button>OUR TEAM</button>
                </div>
            </div>
            <div class="right-main-container-2" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"></div>
        </div>
    </div>
</body>
<footer>
  <?php
    include("includes/footer.php")
    ?>
</footer>
<script src="Javascript/mobile-header.js"></script>
<script src="Javascript/script.js" defer></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</html>