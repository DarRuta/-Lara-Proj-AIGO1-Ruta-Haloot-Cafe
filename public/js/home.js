
/* =====================================
   MERIDIAN THEME TOGGLE
===================================== */

// Wait until the HTML page is loaded
document.addEventListener('DOMContentLoaded', function () {

    // Get the theme toggle button
    const themeToggle = document.getElementById('themeToggle');


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

});
