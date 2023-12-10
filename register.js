document.addEventListener("DOMContentLoaded", function () {
    const registerButton = document.getElementById('register-button');

    registerButton.addEventListener('click', function (event) {
        event.preventDefault(); 

        const fullNameInput = document.getElementById('full_name');
        const fullNameRegex = /^[a-zA-Z\s]+$/;
        if (!fullNameRegex.test(fullNameInput.value)) {
            alert('Please enter a valid full name.');
            return;
        }

        const dobInput = document.getElementById('dob');
        if (!dobInput.value) {
            alert('Please enter your date of birth.');
            return;
        }

        const genderInputs = document.querySelectorAll('input[name="gender"]');
        let selectedGender = false;
        genderInputs.forEach(input => {
            if (input.checked) {
                selectedGender = true;
            }
        });
        if (!selectedGender) {
            alert('Please select your gender.');
            return;
        }

        const phoneNumberInput = document.getElementById('phone_number');
        const phoneNumberRegex = /^\d{11}$/;
        if (!phoneNumberRegex.test(phoneNumberInput.value)) {
            alert('Please enter a valid 10-digit phone number.');
            return;
        }

        const emailInput = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            alert('Please enter a valid email address.');
            return;
        }

        const passwordInput = document.getElementById('password');
        if (passwordInput.value.length < 4) {
            alert('Password should be at least 4 characters long.');
            return false;
        }

        else if (!/[A-Z]/.test(passwordInput.value)) {
            alert('Password should contain at least one capital letter.');
            return false;
        } 

        else if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]/.test(passwordInput.value)) {
            alert('Password should contain at least one special character or number.');
            return false;
        }

        const confirmPasswordInput = document.getElementById('confirm_password');
        if (confirmPasswordInput.value !== passwordInput.value) {
            alert('Passwords do not match.');
            return;
        }

        alert('Registration successful!');
    });
});
