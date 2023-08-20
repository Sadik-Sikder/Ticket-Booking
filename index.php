<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
 
<title>E-Ticket Reservation</title>
<link rel="stylesheet" href="css/book.css">
<link rel="icon" href="search.png">
</head>
<body>
    <header>
        <h1>E-Ticket Reservation</h1>
        <div class="menu">
          <img src="image/logo.png" alt="Logo" class="logo">
        
          <div class="menu-content">
              <?php if(isset($_SESSION["user_id"])): ?>
              <li><a href="book.php">book</a></li>
              <li><a href="logout.php">logout</a></li>
              <li><a href="about.php">about</a></li>
              <?php else: ?>
              <li><a href="sign_in.php">login</a></li>
              <li><a href="sign-up.php">signup</a></li>
              <li><a href="about.php">about</a></li>

              <?php endif; ?>
  
          </div>
        </div>
        <div class="search-container">
          <input type="text" id="search-input" placeholder="Search...">
          <button id="search-button" onclick="search()"><img src="image/search.png" alt="search" class="search-logo">
          </button>
        </div>
       
       </div>
        <div class="home-page">
           <a href="index.php">
            <img src="image/home.png" alt="home">
           </a>
        </div>
        

      </header>
      
      <div class="slideshow-container">
        <a href="book.php"><img class="slide-image" src="image/train.jpg" alt="Slide Image 1"></a>
        <a href=""><img class="slide-image" src="image/bus.jpg" alt="Slide Image 2"></a>
        <a href=""><img class="slide-image" src="image/plane.jpg" alt="Slide Image 3"></a>
      
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
      </div>

      <div class="header">
        <h1>Buy Tickets Now 20% off</h1>
        <p>Get your tickets for the event or travel experience of a lifetime!</p>
      </div>

     <div class="container">
      <div class="content">
        <h2>Why Buy Tickets with Us?</h2>
        <p>Don't miss out on the chance to experience something amazing. Buy your tickets now and enjoy these benefits:</p>
        <ul>
          <li class="lists">Secure and easy online booking</li>
          <li class="lists">Best prices and exclusive deals</li>
          <li class="lists">Wide range of events and travel options</li>
          <li class="lists">Experienced customer support</li>
        </ul>
        <?php if(isset($_SESSION["user_id"])): ?>
        <a href="book.php" class="btn">Buy Tickets</a>
             
        <?php else: ?>
        <a href="sign_in.php" class="btn">Sign In</a>      
        <?php endif; ?>
      </div>
     </div>

<footer>
  <p>Copyright &copy; 2023 E-Ticket Reservation By <strong><a href="">Sadik</a></strong></p>
</footer>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
