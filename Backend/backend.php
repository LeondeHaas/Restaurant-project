<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once('../Includes/connector.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="../styles/styles.css">
      <link rel="stylesheet" href="../styles/backend.css">
    <link rel="stylesheet" href="../styles/mediaqueries.css">
    <link rel="stylesheet" href="../styles/header.css">
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
    include("../includes/header.php")
    ?>
 </header>

<body>
   <div class="main-container">
    <div class="menu-container">
      
    </div>
   </div>
</body>
<footer>
  <?php
    include("../includes/footer.php")
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