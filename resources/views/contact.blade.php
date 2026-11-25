
@extends('layouts.app')

@section('title', 'Contact | Meridian Gym')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<div class="contact-page">

    <section class="contact-hero">
        <div class="contact-container contact-hero__inner">
            <p class="contact-eyebrow">MERIDIAN FITNESS · BUTUAN CITY</p>

            <h1>LET'S GET <span>STRONGER.</span></h1>

            <p class="contact-hero__lead">
                Have a question about membership, training, or our facilities?
                We're ready to help you take the next step.
            </p>

            <a class="contact-button contact-button--outline contact-button--hero"
               href="#contact-form">
                Talk to our team
            </a>
        </div>
    </section>

    <section class="contact-main" aria-labelledby="contact-heading">
        <div class="contact-container">

            <div class="contact-grid">

                <aside class="contact-info"
                       aria-label="MERIDIAN contact information">

                    <div class="contact-detail">
                        <span class="contact-detail__icon"
                              aria-hidden="true">⚲</span>

                        <div>
                            <h4>Visit us</h4>
                            <p>
                                Butuan City, Agusan del Norte<br>
                                Philippines 8600
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail__icon"
                              aria-hidden="true">✉</span>

                        <div>
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:info@meridian.gmail">
                                    info@meridian.gmail
                                </a>
                            </p>
                            <small>
                                Sample address for project demonstration
                            </small>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail__icon"
                              aria-hidden="true">☎</span>

                        <div>
                            <h4>Phone</h4>
                            <p>
                                <a href="tel:+63112233455">
                                    +63 11 223 3455
                                </a>
                            </p>
                            <small>
                                Sample number for project demonstration
                            </small>
                        </div>
                    </div>

                </aside>

                <div class="contact-form-card" id="contact-form">

                    <div class="contact-form-card__heading">
                        <p class="contact-eyebrow">SEND AN INQUIRY</p>

                        <h3>Send us a message.</h3>

                        <p>
                            Complete the form and we'll be happy to hear from you.
                        </p>
                    </div>

                    <form id="meridianContactForm"
                          class="contact-form"
                          action="{{ route('contact.submit') }}"
                          method="POST"
                          novalidate>

                        @csrf

                        <div class="contact-form__field">
                            <label for="contactName">
                                Full name <span aria-hidden="true">*</span>
                            </label>

                            <input
                                id="contactName"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                maxlength="100"
                                autocomplete="name"
                                placeholder="Enter your full name"
                                required
                                aria-describedby="contactNameError"
                                @error('name') aria-invalid="true" @enderror
                            >

                            <small class="contact-form__error"
                                   id="contactNameError">@error('name'){{ $message }}@enderror</small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactEmail">
                                Email address <span aria-hidden="true">*</span>
                            </label>

                            <input
                                id="contactEmail"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                maxlength="255"
                                autocomplete="email"
                                placeholder="you@example.com"
                                required
                                aria-describedby="contactEmailError"
                                @error('email') aria-invalid="true" @enderror
                            >

                            <small class="contact-form__error"
                                   id="contactEmailError">@error('email'){{ $message }}@enderror</small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactSubject">
                                Subject <span aria-hidden="true">*</span>
                            </label>

                            <input
                                id="contactSubject"
                                name="subject"
                                type="text"
                                value="{{ old('subject') }}"
                                maxlength="150"
                                placeholder="What would you like to ask us?"
                                required
                                aria-describedby="contactSubjectError"
                                @error('subject') aria-invalid="true" @enderror
                            >

                            <small class="contact-form__error"
                                   id="contactSubjectError">@error('subject'){{ $message }}@enderror</small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactMessage">
                                Message <span aria-hidden="true">*</span>
                            </label>

                            <textarea
                                id="contactMessage"
                                name="message"
                                rows="5"
                                maxlength="2000"
                                placeholder="Write your message here..."
                                required
                                aria-describedby="contactMessageError"
                                @error('message') aria-invalid="true" @enderror
                            >{{ old('message') }}</textarea>

                            <small class="contact-form__error"
                                   id="contactMessageError">@error('message'){{ $message }}@enderror</small>
                        </div>

                        <button class="contact-button contact-button--submit"
                                type="submit">
                            Send message <span aria-hidden="true">→</span>
                        </button>

                        @if (session('contact_success'))
                            <p class="contact-form__success"
                               id="contactSuccess"
                               role="status"
                               aria-live="polite">
                                {{ session('contact_success') }}
                            </p>
                        @endif

                        <p class="contact-form__note">
                            Fields marked with * are required.
                        </p>

                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-bottom">
        <div class="contact-container contact-bottom__inner">

            <div>
                <p class="contact-eyebrow">YOUR JOURNEY STARTS HERE</p>

                <h2>
                    Find your balance.<br>
                    <span>Build your strength.</span>
                </h2>
            </div>

            <a class="contact-button" href="{{ url('/') }}">
                Explore MERIDIAN <span aria-hidden="true">→</span>
            </a>

        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush