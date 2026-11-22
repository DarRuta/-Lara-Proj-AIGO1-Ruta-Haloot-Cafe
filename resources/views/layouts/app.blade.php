
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Meridian Gym')</title>

    <!-- Shared CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Page-specific CSS -->
    @stack('styles')
</head>

<body>

    <!-- Navigation Bar -->
    <header class="navbar">

        <div class="container navbar-content">

            <!-- Website Logo -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Meridian Gym Logo">
                <span>Meridian</span>
            </a>

            <!-- Navigation Links -->
            <nav class="nav-links">

                <a href="{{ url('/') }}">Home</a>

                <a href="{{ url('/about') }}">About</a>

                <a href="{{ url('/contact') }}">Contact</a>

                <!-- Dark/Light Mode Button -->
                <button id="themeToggle" class="btn theme-btn" type="button">
                    Dark Mode
                </button>

            </nav>

        </div>

    </header>


    <!-- Main Page Content -->
    <main>

        @yield('content')

    </main>


    <!-- Footer -->
   <footer class="footer" id="contact">

    <div class="container footer-content">

        <div class="footer-brand">

            <div class="footer-title">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Meridian logo"
                    class="footer-logo"
                >

                <h2>Meridian</h2>

            </div>

            <p>
                Find your balance. Build your strength.
                Live a healthier lifestyle.
            </p>

        </div>

        <div class="footer-members">

            <h3>Group Members</h3>

            <ul>
                <li>Member 1 - Daryle John Ruta</li>
                <li>Member 2 - Bienly Andre Haloot</li>
                <li>Member 3 - Shayna Cafe</li>
            </ul>

        </div>

    </div>

    <div class="footer-bottom">

        <p>
            &copy; {{ date('Y') }} Meridian Gym.
            All Rights Reserved.
        </p>

    </div>

</footer>


    <!-- Apply the saved theme when the page loads -->
    <script>

        const savedTheme = localStorage.getItem('meridianTheme');

        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
        }

    </script>

    <!-- Page-specific JavaScript -->
    @stack('scripts')

</body>

</html>
