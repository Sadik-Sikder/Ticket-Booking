<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head >
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="css/book.css">
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
              <li><a href="about.php">about</a></li>
              <?php endif; ?>
  
      </div>
   </div>
   <div class="search-container">
     <input type="text" id="search-input" placeholder="Search... about tickets">
     <button id="search-button" onclick="search()"><img src="image/search.png" alt="search" class="search-logo">
     </button>
   </div>
   <div class="home-page">
      <a href="index.php">
        <img src="image/home.png" alt="home">
      </a>
   </div>
  

  </header>
  <main> 
    <section class="form">
        <h2>Book your ticket now!</h2>
        <form action="reservation.php" method="post">
          <div class="form-group">
            <label for="from">From</label>
            <input type="text" id="from" name="from" placeholder="Enter your starting point">
          </div>
          <div class="form-group">
            <label for="to">To</label>
            <input type="text" id="to" name="to" placeholder="Enter your destination">
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date">
          </div>
          <div class="form-group">
            <label for="time">Time</label>
            <input type="time" id="time" name="time">
          </div>
          <div class="form-group">
            <label for="passengers">Passengers</label>
            <input type="number" id="passengers" name="passengers" placeholder="Enter the number of passengers">
          </div>
          <div class="form-group">
            <h3>Select Payment Method:</h3>
            <label style="padding-top:10px;">
            Credit/Debit Card<input type="radio" name="payment_method" value="card" checked>
            </label>
            <label>
            Cash<input type="radio" name="payment_method" value="cash">            
            </label>
          </div>
          <div class="form-group">
            <input type="submit" value="Book Now">
          </div>
        </form>
      </section> 
 </main>


<footer>
  <p>Copyright &copy; 2023 E-Ticket Reservation By <strong><a href="">Sadik</a></strong></p>
</footer>

</body>
</html>