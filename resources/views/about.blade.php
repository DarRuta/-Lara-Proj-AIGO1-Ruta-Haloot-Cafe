@extends('layouts.app')

@section('title', 'About Us | Meridian Gym')

@section('content')

    <!-- ABOUT HERO SECTION -->
    <section class="about-hero">
        <div class="container about-hero-content">
            <span class="about-badge">Our Story &amp; Philosophy</span>
            <h1>Built on Balance, Discipline, and Community</h1>
            <p>
                Meridian brings together structured strength training, combat conditioning,
                and mindful recovery under one focused roof—helping every member progress at
                their own pace.
            </p>
            <div class="about-hero-actions">
                <a href="#mission-vision" class="btn">Mission &amp; Vision</a>
                <a href="#staff" class="btn about-btn-outline">Meet the Team</a>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION SECTION -->
    <section class="about-section container" id="mission-vision">
        <div class="about-heading">
            <h2>Mission &amp; Vision</h2>
            <p>
                Every workout at Meridian is guided by clear standards for safety,
                consistency, and sustainable growth.
            </p>
        </div>

        <div class="mv-grid">
            <article class="card mv-card">
                <div class="mv-tag">Our Mission</div>
                <h3>Accessible, Purpose-Driven Training</h3>
                <p>
                    To provide well-maintained equipment, structured coaching, and a welcoming
                    environment where beginners and experienced lifters alike can build lasting
                    strength, endurance, and confidence.
                </p>
                <ul class="mv-points">
                    <li>Progressive strength, cardio, boxing, Muay Thai, and yoga programs</li>
                    <li>Supportive coaching focused on proper form and injury prevention</li>
                    <li>A clean, focused training floor without ego or intimidation</li>
                </ul>
            </article>

            <article class="card mv-card mv-card-accent">
                <div class="mv-tag">Our Vision</div>
                <h3>A Standard for Modern Wellness</h3>
                <p>
                    To become the go-to local fitness sanctuary known for uniting physical
                    resilience with mental clarity—proving that peak conditioning and calm
                    focus belong together.
                </p>
                <ul class="mv-points">
                    <li>Long-term member habits over short-lived fitness fads</li>
                    <li>Balanced recovery alongside high-output training</li>
                    <li>An active community that lifts each other up every week</li>
                </ul>
            </article>
        </div>
    </section>

    <!-- STAFF & COACHES INTERACTIVE SECTION -->
    <section class="about-section container" id="staff">
        <div class="about-heading">
            <h2>Meet Our Coaches &amp; Staff</h2>
            <p>
                Filter by specialty or click any team member card to inspect their coaching
                approach and weekly focus.
            </p>
        </div>

        <!-- Interactive Filter Controls -->
        <div class="staff-filters" role="group" aria-label="Filter staff by specialty">
            <button type="button" class="filter-btn active" data-filter="all">All Team</button>
            <button type="button" class="filter-btn" data-filter="strength">Strength &amp; Cardio</button>
            <button type="button" class="filter-btn" data-filter="combat">Boxing &amp; Muay Thai</button>
            <button type="button" class="filter-btn" data-filter="mindfulness">Yoga &amp; Recovery</button>
        </div>

        <!-- Staff Cards Grid -->
        <div class="staff-grid" id="staffGrid">

            <article
                class="card staff-card selected"
                tabindex="0"
                data-role-category="strength"
                data-name="Youssef"
                data-role="Head of Strength &amp; Cardio"
                data-focus="Progressive overload, barbell/dumbbell mechanics, and conditioning pacing"
                data-bio="Youssef structures clear weekly training blocks so members can track real strength gains while keeping joints healthy and conditioning steady."
                data-schedule="Mon–Sat | Morning &amp; Evening Floor Hours"
            >
                <img
                    src="{{ asset('images/coaches/coach1.jpg') }}"
                    alt="Youssef - Strength and Cardio Coach"
                    class="staff-photo"
                    onerror="this.style.display='none'"
                >
                <div class="staff-body">
                    <span class="staff-pill">Strength &amp; Cardio</span>
                    <h3>Youssef</h3>
                    <p class="staff-title">Strength &amp; Cardio Coach</p>
                    <p class="staff-summary">
                        Guides structured lifting progressions and heart-rate-smart conditioning.
                    </p>
                    <button type="button" class="btn staff-inspect-btn">Inspect Profile</button>
                </div>
            </article>

            <article
                class="card staff-card"
                tabindex="0"
                data-role-category="combat"
                data-name="Dwayne"
                data-role="Boxing &amp; Muay Thai Coach"
                data-focus="Footwork, guard discipline, pad work combinations, and anaerobic stamina"
                data-bio="Dwayne breaks down striking fundamentals step by step—helping first-timers build coordination and poise while pushing regular fighters in conditioning."
                data-schedule="Tue–Sun | Afternoon &amp; Night Mat Sessions"
            >
                <img
                    src="{{ asset('images/coaches/coach2.jpg') }}"
                    alt="Dwayne - Boxing and Muay Thai Coach"
                    class="staff-photo"
                    onerror="this.style.display='none'"
                >
                <div class="staff-body">
                    <span class="staff-pill">Boxing &amp; Muay Thai</span>
                    <h3>Dwayne</h3>
                    <p class="staff-title">Boxing &amp; Muay Thai Coach</p>
                    <p class="staff-summary">
                        Builds sharp striking technique, rhythm, and full-body endurance.
                    </p>
                    <button type="button" class="btn staff-inspect-btn">Inspect Profile</button>
                </div>
            </article>

            <article
                class="card staff-card"
                tabindex="0"
                data-role-category="mindfulness"
                data-name="Maximo"
                data-role="Lead Yoga &amp; Mobility Instructor"
                data-focus="Breath control, hip &amp; thoracic mobility, and nervous system recovery"
                data-bio="Maximo leads grounded mobility and yoga sessions designed to offset heavy lifting tension, improve posture, and sharpen everyday calm."
                data-schedule="Mon–Sat | Midday &amp; Evening Studio Sessions"
            >
                <img
                    src="{{ asset('images/coaches/coach3.jpg') }}"
                    alt="Maximo - Yoga Instructor"
                    class="staff-photo"
                    onerror="this.style.display='none'"
                >
                <div class="staff-body">
                    <span class="staff-pill">Yoga &amp; Recovery</span>
                    <h3>Maximo</h3>
                    <p class="staff-title">Yoga Instructor</p>
                    <p class="staff-summary">
                        Helps members restore mobility, balance, and mental focus between sessions.
                    </p>
                    <button type="button" class="btn staff-inspect-btn">Inspect Profile</button>
                </div>
            </article>

        </div>

        <!-- Interactive Selected Staff Spotlight Box -->
        <div class="card staff-spotlight" id="staffSpotlight" aria-live="polite">
            <div class="spotlight-header">
                <div>
                    <span class="spotlight-label">Selected Coach Spotlight</span>
                    <h3 id="spotlightName">Youssef</h3>
                    <p class="spotlight-role" id="spotlightRole">Head of Strength &amp; Cardio</p>
                </div>
                <span class="spotlight-schedule" id="spotlightSchedule">Mon–Sat | Morning &amp; Evening Floor Hours</span>
            </div>
            <p class="spotlight-bio" id="spotlightBio">
                Youssef structures clear weekly training blocks so members can track real strength gains while keeping joints healthy and conditioning steady.
            </p>
            <p class="spotlight-focus">
                <strong>Key Focus:</strong>
                <span id="spotlightFocus">Progressive overload, barbell/dumbbell mechanics, and conditioning pacing</span>
            </p>
        </div>
    </section>

    <!-- WHY MERIDIAN / VALUES STRIP -->
    <section class="about-section container" id="values">
        <div class="about-heading">
            <h2>What Defines Meridian</h2>
            <p>Practical standards that keep your training consistent week after week.</p>
        </div>

        <div class="values-grid">
            <div class="card value-card">
                <h3>01. Form Before Ego</h3>
                <p>Clean reps and controlled movement come first so you progress safely for years.</p>
            </div>
            <div class="card value-card">
                <h3>02. Balance in Training</h3>
                <p>Pair raw strength and striking intensity with mobility and recovery work.</p>
            </div>
            <div class="card value-card">
                <h3>03. Consistency Over Hype</h3>
                <p>Showing up steadily beats extreme routines you can't sustain.</p>
            </div>
        </div>
    </section>

@endsection
<script>
document.addEventListener('click', function (event) {
    const card = event.target.closest('.staff-card');
    if (!card) return;

    document.querySelectorAll('.staff-card').forEach(function (item) {
        item.classList.remove('selected');
    });
    card.classList.add('selected');

    const nameEl = document.getElementById('spotlightName');
    const roleEl = document.getElementById('spotlightRole');
    const scheduleEl = document.getElementById('spotlightSchedule');
    const bioEl = document.getElementById('spotlightBio');
    const focusEl = document.getElementById('spotlightFocus');

    if (nameEl) nameEl.textContent = card.getAttribute('data-name') || '';
    if (roleEl) roleEl.textContent = card.getAttribute('data-role') || '';
    if (scheduleEl) scheduleEl.textContent = card.getAttribute('data-schedule') || '';
    if (bioEl) bioEl.textContent = card.getAttribute('data-bio') || '';
    if (focusEl) focusEl.textContent = card.getAttribute('data-focus') || '';
});
</script>
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush 