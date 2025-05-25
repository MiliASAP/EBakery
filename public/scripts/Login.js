document.addEventListener("DOMContentLoaded", function () {
    const loginTab = document.getElementById("login-tab");
    const registerTab = document.getElementById("register-tab");
    const nameInput = document.getElementById("name");
    const repeatPasswordInput = document.getElementById("repeat-password");
    const submitButton = document.getElementById("submit-btn");
    const form = document.getElementById("auth-form");

    registerTab.addEventListener("click", function () {
        registerTab.classList.add("active");
        loginTab.classList.remove("active");

        nameInput.classList.remove("hidden");
        repeatPasswordInput.classList.remove("hidden");

        submitButton.textContent = "Zarejestruj się";
    });

    loginTab.addEventListener("click", function () {
        loginTab.classList.add("active");
        registerTab.classList.remove("active");

        nameInput.classList.add("hidden");
        repeatPasswordInput.classList.add("hidden");

        submitButton.textContent = "Zaloguj się";
    });


});
