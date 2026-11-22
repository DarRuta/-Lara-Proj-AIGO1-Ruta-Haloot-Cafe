@extends('layouts.app')

@section('title', 'Home | Meridian Gym')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero" id="about">

        <div class="hero-content container">

            <h1>
                Find Your Balance.<br>
                Build Your Strength.
            </h1>

            <p>
                Welcome to Meridian, a place where fitness meets
                wellness. Discover a healthier lifestyle through
                movement, strength, and balance.
            </p>

            <div class="hero-buttons">

                <a href="#plans" class="btn">
                    Join Today
                </a>

                <a href="#services" class="btn btn-outline">
                    Explore Services
                </a>
                
                <a href="#" class="btn btn-outline js-open-login">
                    Log In
                </a>

            </div>

        </div>

    </section>


    <!-- SERVICES SECTION -->
    <section class="services container" id="services">

        <div class="section-heading">

            <h2>Our Services</h2>

            <p>
                Discover different ways to move, grow, and
                improve your overall well-being.
            </p>

        </div>


        <!-- SERVICE CARDS -->
        <div class="services-grid">


            <!-- LIFTING AREA -->
            <div class="card service-card">

                <img
                    src="{{ asset('images/services/lifting.jpg') }}"
                    alt="Gym lifting area with weights and equipment"
                >

                <div class="service-info">

                    <h3>Lifting Area</h3>

                    <p>
                        Build strength and improve your fitness
                        with our quality weight training equipment.
                    </p>

                </div>

            </div>


            <!-- CARDIO -->
            <div class="card service-card">

                <img
                    src="{{ asset('images/services/cardio.jpg') }}"
                    alt="Cardio workout using gym equipment"
                >

                <div class="service-info">

                    <h3>Cardio</h3>

                    <p>
                        Improve your endurance and heart health
                        through different cardio exercises.
                    </p>

                </div>

            </div>


            <!-- BOXING -->
            <div class="card service-card">

                <img
                    src="{{ asset('images/services/boxing.jpg') }}"
                    alt="Boxing training with punching bags"
                >

                <div class="service-info">

                    <h3>Boxing</h3>

                    <p>
                        Develop coordination, confidence, and
                        fitness through boxing training.
                    </p>

                </div>

            </div>


            <!-- MUAY THAI -->
            <div class="card service-card">

                <img
                    src="{{ asset('images/services/muay-thai.jpg') }}"
                    alt="Muay Thai martial arts training"
                >

                <div class="service-info">

                    <h3>Muay Thai</h3>

                    <p>
                        Learn traditional martial arts techniques
                        while improving strength and discipline.
                    </p>

                </div>

            </div>


            <!-- YOGA -->
            <div class="card service-card">

                <img
                    src="{{ asset('images/services/yoga.jpg') }}"
                    alt="Yoga practice in a peaceful indoor space"
                >

                <div class="service-info">

                    <h3>Yoga</h3>

                    <p>
                        Relax your mind, improve flexibility,
                        and find balance through mindful movement.
                    </p>

                </div>

            </div>


        </div>

    </section>


    <!-- MEMBERSHIP PLANS SECTION -->
    <section class="plans container" id="plans">

        <div class="section-heading">

            <h2>Membership Plans</h2>

            <p>
                Choose the plan that fits your goals and
                start your journey with Meridian today.
            </p>

        </div>


        <div class="plans-grid">


            <!-- BASIC PLAN -->
            <div class="card plan-card">

                <h3>Basic</h3>

                <p class="plan-price">
                    <span class="currency">₱</span>999
                    <span class="period">/ month</span>
                </p>

                <ul class="plan-features">
                    <li>Lifting Area access</li>
                    <li>Cardio zone access</li>
                    <li>Locker room access</li>
                    <li>Open gym hours</li>
                </ul>

                <a href="/contact" class="btn">Choose Basic</a>

            </div>


            <!-- STANDARD PLAN (MOST POPULAR) -->
            <div class="card plan-card featured">

                <span class="plan-badge">Most Popular</span>

                <h3>Standard</h3>

                <p class="plan-price">
                    <span class="currency">₱</span>1,799
                    <span class="period">/ month</span>
                </p>

                <ul class="plan-features">
                    <li>Everything in Basic</li>
                    <li>Yoga classes</li>
                    <li>Boxing classes</li>
                    <li>Free fitness assessment</li>
                </ul>

                <a href="/contact" class="btn">Choose Standard</a>

            </div>


            <!-- PREMIUM PLAN -->
            <div class="card plan-card">

                <h3>Premium</h3>

                <p class="plan-price">
                    <span class="currency">₱</span>2,499
                    <span class="period">/ month</span>
                </p>

                <ul class="plan-features">
                    <li>Everything in Standard</li>
                    <li>Muay Thai classes</li>
                    <li>Personal trainer sessions</li>
                    <li>Priority class booking</li>
                </ul>

                <a href="/contact" class="btn">Choose Premium</a>

            </div>


        </div>

    </section>


    <!-- COACHES SECTION -->
    <section class="coaches container" id="coaches">

        <div class="section-heading">

            <h2>Meet Our Coaches</h2>

            <p>
                Train with experienced coaches who will guide
                you at every step of your fitness journey.
            </p>

        </div>

        <div class="coaches-grid">


            <!-- COACH 1 -->
            <div class="card coach-card">

                <img
                    src="{{ asset('images/coaches/coach1.jpg') }}"
                    alt="Coach 1 portrait"
                >

                <h3>Youssef</h3>

                <p class="coach-role">Strength and Cardio Coach</p>

                <p>
                    Helps members build strength and endurance
                    with safe, effective training plans.
                </p>

            </div>


            <!-- COACH 2 -->
            <div class="card coach-card">

                <img
                    src="{{ asset('images/coaches/coach2.jpg') }}"
                    alt="Coach 2 portrait"
                >

                <h3>Dwayne</h3>

                <p class="coach-role">Boxing and Muay Thai Coach</p>

                <p>
                    Teaches technique, discipline, and confidence
                    through combat sports training.
                </p>

            </div>


            <!-- COACH 3 -->
            <div class="card coach-card">

                <img
                    src="{{ asset('images/coaches/coach3.jpg') }}"
                    alt="Coach 3 portrait"
                >

                <h3>Maximo</h3>

                <p class="coach-role">Yoga Instructor</p>

                <p>
                    Guides calm, mindful sessions that improve
                    flexibility, balance, and focus.
                </p>

            </div>


        </div>

    </section>


    <!-- CUSTOMER REVIEWS SECTION -->
    <section class="reviews container" id="reviews">

        <div class="section-heading">

            <h2>What Our Members Say</h2>

            <p>
                Hear from the people who train with us every day.
            </p>

        </div>

        <div class="reviews-grid">


            <!-- REVIEW 1 -->
            <div class="card review-card">

                <p class="review-stars">★★★★★</p>

                <p class="review-text">
                    "The calm atmosphere makes it easy to stay
                    consistent. I actually look forward to
                    my workouts now."
                </p>

                <p class="review-name">Carl Justin</p>

                <p class="review-plan">Standard Member</p>

            </div>


            <!-- REVIEW 2 -->
            <div class="card review-card">

                <p class="review-stars">★★★★★</p>

                <p class="review-text">
                    "The coaches are friendly and patient.
                    Muay Thai classes are my favorite part
                    of the week."
                </p>

                <p class="review-name">Erick Paul</p>

                <p class="review-plan">Premium Member</p>

            </div>


            <!-- REVIEW 3 -->
            <div class="card review-card">

                <p class="review-stars">★★★★☆</p>

                <p class="review-text">
                    "Clean equipment, helpful staff, and a
                    relaxing yoga space. Great value for
                    the price."
                </p>

                <p class="review-name">Brexil</p>

                <p class="review-plan">Basic Member</p>

            </div>


        </div>

    </section>
        <!-- LOGIN POPUP -->
    <div class="modal-overlay" id="loginModal" aria-hidden="true">

        <div
            class="modal-box"
            role="dialog"
            aria-modal="true"
            aria-labelledby="loginTitle"
        >

            <button
                type="button"
                class="modal-close"
                id="closeLogin"
                aria-label="Close login"
            >&times;</button>

            <h2 id="loginTitle">Welcome Back</h2>

            <p class="modal-sub">Log in to your Meridian account.</p>

            <p class="login-success" id="loginSuccess" hidden>
                Logged in successfully!
            </p>

            <form id="loginForm" novalidate>

                <label for="loginEmail">Email</label>
                <input
                    type="email"
                    id="loginEmail"
                    placeholder="name@email.com"
                    autocomplete="email"
                >
                <small class="login-error" id="loginEmailError"></small>

                <label for="loginPassword">Password</label>
                <div class="password-wrap">
                    <input
                        type="password"
                        id="loginPassword"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                    >
                    <button type="button" id="togglePassword" class="toggle-password">
                        Show
                    </button>
                </div>
                <small class="login-error" id="loginPasswordError"></small>

                <button type="submit" class="btn login-submit">Log In</button>

            </form>

        </div>

    </div>

@endsection


<!-- LOAD HOME PAGE CSS -->
@push('styles')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endpush


<!-- LOAD HOME PAGE JAVASCRIPT -->
@push('scripts')

    <script src="{{ asset('js/home.js') }}"></script>

@endpush