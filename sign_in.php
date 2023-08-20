<?php

$is_invalid =false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database1.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
  <div class="sign-in-container">
    <h2 class="sign-in">Sign In</h2>
    <?php if ($is_invalid): ?>
        <p style='color:dark; 
                  font-size: 
                  2rem; text-align: center;
                  background-color: #FE4545;'  >Invalid login</p>
    <?php endif; ?>
    <form method="post" >
       <div class="form-group">
         <label for="username">Username</label>
         <input type="text" id="username" name="email" placeholder="Enter your username" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
       </div>
      <div class="form-group">
         <label for="password">Password</label>
         <div class="password-container">
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
           <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
         </div>
      </div>
      <div class="form-group">
       <button type="submit" class="btn">Sign In</button>
      </div>
    </form>
    <p class="sign-up">Don't have an account? <a href="sign-up.php">Sign Up</a></p>
  </div>


<script type="text/javascript" src="js/sign_in.js"></script>
 
</body>
</html>
