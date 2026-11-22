/* =====================================
   MERIDIAN HOME PAGE JAVASCRIPT
   1. Theme toggle (dark / light mode)
   2. Login popup (front-end demo only)
===================================== */

// Wait until the HTML page is loaded
document.addEventListener('DOMContentLoaded', function () {

    initThemeToggle();
    initLoginModal();

});


/* =====================================
   1. THEME TOGGLE
===================================== */
function initThemeToggle() {

    // Get the theme toggle button
    const themeToggle = document.getElementById('themeToggle');

    // Stop here if the button is not on the page
    if (!themeToggle) {
        return;
    }


    // Function to update the button label
    function updateButtonLabel() {

        if (document.body.classList.contains('dark-mode')) {

            themeToggle.textContent = 'Light Mode';

        } else {

            themeToggle.textContent = 'Dark Mode';

        }

    }


    // Display the correct label when the page loads
    updateButtonLabel();


    // Listen for button clicks
    themeToggle.addEventListener('click', function () {

        // Add or remove the dark-mode class
        document.body.classList.toggle('dark-mode');


        // Check the current theme
        const isDarkMode = document.body.classList.contains('dark-mode');


        // Save the selected theme in localStorage
        if (isDarkMode) {

            localStorage.setItem('meridianTheme', 'dark');

        } else {

            localStorage.setItem('meridianTheme', 'light');

        }


        // Update the button label
        updateButtonLabel();

    });

}


/* =====================================
   2. LOGIN POPUP
   Checks the format only. No real login.
===================================== */
function initLoginModal() {

    const modal = document.getElementById('loginModal');

    // Stop here if the popup is not on the page
    if (!modal) {
        return;
    }

    const openButtons = document.querySelectorAll('.js-open-login');
    const closeBtn = document.getElementById('closeLogin');
    const form = document.getElementById('loginForm');
    const emailInput = document.getElementById('loginEmail');
    const passwordInput = document.getElementById('loginPassword');
    const emailError = document.getElementById('loginEmailError');
    const passwordError = document.getElementById('loginPasswordError');
    const successMsg = document.getElementById('loginSuccess');
    const toggleBtn = document.getElementById('togglePassword');

    // Simple email format check
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


    // Open the popup
    function openModal() {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        emailInput.focus();
    }

    // Remove all error messages
    function clearErrors() {
        emailError.textContent = '';
        passwordError.textContent = '';
        emailInput.classList.remove('invalid');
        passwordInput.classList.remove('invalid');
    }

    // Close the popup and clear the form
    function closeModal() {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
        form.reset();
        clearErrors();
        successMsg.hidden = true;
        passwordInput.type = 'password';
        toggleBtn.textContent = 'Show';
    }


    // Every element with the class js-open-login opens the popup
    openButtons.forEach(function (button) {

        button.addEventListener('click', function (e) {
            e.preventDefault();
            openModal();
        });

    });

    // Close button
    closeBtn.addEventListener('click', closeModal);

    // Close when the dark area outside the box is clicked
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close with the Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('open')) {
            closeModal();
        }
    });


    // Show or hide the password
    toggleBtn.addEventListener('click', function () {

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = 'Show';
        }

    });


    // Validate the form when it is submitted
    form.addEventListener('submit', function (e) {

        // Stop the page from reloading
        e.preventDefault();

        clearErrors();
        successMsg.hidden = true;

        const email = emailInput.value.trim();
        const password = passwordInput.value;
        let valid = true;

        // Email checks
        if (email === '') {
            emailError.textContent = 'Email is required.';
            emailInput.classList.add('invalid');
            valid = false;
        } else if (!emailPattern.test(email)) {
            emailError.textContent = 'Enter a valid email address.';
            emailInput.classList.add('invalid');
            valid = false;
        }

        // Password checks
        if (password === '') {
            passwordError.textContent = 'Password is required.';
            passwordInput.classList.add('invalid');
            valid = false;
        } else if (password.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters.';
            passwordInput.classList.add('invalid');
            valid = false;
        }

        // Everything is valid
        if (valid) {
            successMsg.hidden = false;
            form.reset();

            // Close the popup after 1.5 seconds
            setTimeout(closeModal, 1500);
        }

    });

}