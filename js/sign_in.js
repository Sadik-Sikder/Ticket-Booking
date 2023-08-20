function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.innerHTML = "&#128064;"; 
    } else {
      passwordInput.type = "password";
      toggleIcon.innerHTML = "&#128065;";
    }
  }
  