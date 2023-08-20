<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/signup.css">
  
</head>
<body>
  
  <form action="sign_up_hash.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
      <div class="error" id="password-error"></div>
    </div>
    <div class="form-group">
      <input type="submit" value="Register" class="btn" name="register">
    </div>
  </form>
  

<script type="text/javascript" src="js/sign_up.js"></script>
 
</body>
</html>
