function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordToggle = document.getElementById("passwordToggle");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordToggle.classList.remove("fa-eye-slash");
    }
}
