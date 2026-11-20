
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

                <a href="#services" class="btn">
                    Join Today
                </a>

                <a href="#services" class="btn btn-outline">
                    Explore Services
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

@endsection


<!-- LOAD HOME PAGE CSS -->
@push('styles')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endpush


<!-- LOAD HOME PAGE JAVASCRIPT -->
@push('scripts')

    <script src="{{ asset('js/home.js') }}"></script>

@endpush
