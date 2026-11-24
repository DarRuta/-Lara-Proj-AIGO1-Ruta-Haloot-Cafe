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
            <a class="contact-button contact-button--outline" href="#contact-form">Talk to our team</a>
        </div>
        <div class="contact-hero__orb contact-hero__orb--one" aria-hidden="true"></div>
        <div class="contact-hero__orb contact-hero__orb--two" aria-hidden="true"></div>
    </section>

    <section class="contact-main" aria-labelledby="contact-heading">
        <div class="contact-container">
            <div class="contact-section-heading">
                <p class="contact-eyebrow">WE'RE HERE FOR YOU</p>
                <h2 id="contact-heading">Make your next move.</h2>
                <p>Reach out to MERIDIAN. Whether you're new to fitness or ready for a new routine, let's talk.</p>
            </div>

            <div class="contact-grid">
                <aside class="contact-info" aria-label="MERIDIAN contact information">
                    <div class="contact-info__intro">
                        <span class="contact-info__mark" aria-hidden="true">M</span>
                        <div>
                            <h3>Contact details</h3>
                            <p>Connect with the MERIDIAN team.</p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail__icon" aria-hidden="true">⌖</span>
                        <div>
                            <h4>Visit us</h4>
                            <p>Butuan City, Agusan del Norte<br>Philippines 8600</p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail__icon" aria-hidden="true">✉</span>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:contact@meridianfitness.example">contact@meridianfitness.example</a></p>
                            <small>Sample address for project demonstration</small>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail__icon" aria-hidden="true">☎</span>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel:+630000000000">+63 000 000 0000</a></p>
                            <small>Sample number for project demonstration</small>
                        </div>
                    </div>

                    <div class="contact-hours">
                        <span class="contact-hours__status" aria-hidden="true"></span>
                        <div>
                            <h4>Open 24 hours</h4>
                            <p>7 days a week · Every day, all day</p>
                        </div>
                    </div>
                </aside>

                <div class="contact-form-card" id="contact-form">
                    <div class="contact-form-card__heading">
                        <p class="contact-eyebrow">SEND AN INQUIRY</p>
                        <h3>Send us a message.</h3>
                        <p>Complete the form and we'll be happy to hear from you.</p>
                    </div>

                    <form id="meridianContactForm" class="contact-form" novalidate>
                        @csrf
                        <div class="contact-form__field">
                            <label for="contactName">Full name <span aria-hidden="true">*</span></label>
                            <input id="contactName" name="name" type="text" autocomplete="name"
                                placeholder="Enter your full name" required aria-describedby="contactNameError">
                            <small class="contact-form__error" id="contactNameError"></small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactEmail">Email address <span aria-hidden="true">*</span></label>
                            <input id="contactEmail" name="email" type="email" autocomplete="email"
                                placeholder="you@example.com" required aria-describedby="contactEmailError">
                            <small class="contact-form__error" id="contactEmailError"></small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactSubject">Subject <span aria-hidden="true">*</span></label>
                            <input id="contactSubject" name="subject" type="text"
                                placeholder="What would you like to ask us?" required aria-describedby="contactSubjectError">
                            <small class="contact-form__error" id="contactSubjectError"></small>
                        </div>

                        <div class="contact-form__field">
                            <label for="contactMessage">Message <span aria-hidden="true">*</span></label>
                            <textarea id="contactMessage" name="message" rows="5"
                                placeholder="Write your message here..." required aria-describedby="contactMessageError"></textarea>
                            <small class="contact-form__error" id="contactMessageError"></small>
                        </div>

                        <button class="contact-button contact-button--submit" type="submit">
                            Send message <span aria-hidden="true">→</span>
                        </button>

                        <p class="contact-form__success" id="contactSuccess" role="status" aria-live="polite" hidden>
                            Thank you! Your message passed the form validation.
                            This is a demonstration only; no email has been sent.
                        </p>
                        <p class="contact-form__note">Fields marked with * are required.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-bottom">
        <div class="contact-container contact-bottom__inner">
            <div>
                <p class="contact-eyebrow">YOUR JOURNEY STARTS HERE</p>
                <h2>Find your balance.<br><span>Build your strength.</span></h2>
            </div>
            <a class="contact-button" href="{{ url('/') }}">Explore MERIDIAN <span aria-hidden="true">→</span></a>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
