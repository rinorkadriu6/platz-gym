document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector('.login-form');
    const loginButton = document.getElementById('login-button');

    loginButton.addEventListener('click', function (event) {
        event.preventDefault(); 

        const emailInput = document.getElementById('login-email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            alert('Please enter a valid email address.');
            return;
        }

        const passwordInput = document.getElementById('login-password');
        if (passwordInput.value.length === 0) {
            alert('Please enter your password.');
            return;
        }

        alert('Login successful!');
    });
});