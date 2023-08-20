const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm_password");
    const passwordError = document.getElementById("password-error");

    confirmPasswordInput.addEventListener("input", () => {
      if (passwordInput.value !== confirmPasswordInput.value) {
        passwordError.textContent = "Passwords do not match";
      } else {
        passwordError.textContent = "";
      }
    });