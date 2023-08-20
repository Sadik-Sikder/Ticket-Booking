<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f5f5f5;
    }

    .message {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .success-icon {
      font-size: 48px;
      color: #00b300;
      margin-bottom: 10px;
    }

    .success-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .btn {
      background-color: rgb(3, 205, 20);;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="message">
    <div class="success-icon">&#10004;</div>
    <h1 class="success-title">Sign Up Successful!</h1>
    <p>Your account has been created successfully. You can now log in using your credentials.</p>
    <a href="sign_in.php" class="btn">Log In</a>
  </div>
</body>
</html>
