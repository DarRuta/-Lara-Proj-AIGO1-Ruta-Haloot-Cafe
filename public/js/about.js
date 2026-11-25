/* =====================================
   MERIDIAN ABOUT PAGE JAVASCRIPT
   1. Theme toggle sync
   2. Staff category filtering
   3. Interactive coach spotlight cards
===================================== */

document.addEventListener('DOMContentLoaded', function () {
    initAboutThemeToggle();
    initStaffFilters();
    initStaffSpotlight();
});

function initAboutThemeToggle() {
    const themeToggle = document.getElementById('themeToggle');
    if (!themeToggle) return;

    function syncLabel() {
        themeToggle.textContent = document.body.classList.contains('dark-mode')
            ? 'Light Mode'
            : 'Dark Mode';
    }

    if (localStorage.getItem('meridianTheme') === 'dark') {
        document.body.classList.add('dark-mode');
    }

    syncLabel();

    themeToggle.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        const isDark = document.body.classList.contains('dark-mode');
        localStorage.setItem('meridianTheme', isDark ? 'dark' : 'light');
        syncLabel();
    });
}

function initStaffFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const staffCards = document.querySelectorAll('.staff-card');

    if (!filterButtons.length || !staffCards.length) return;

    filterButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const selectedFilter = btn.getAttribute('data-filter');

            filterButtons.forEach(function (b) {
                b.classList.remove('active');
            });
            btn.classList.add('active');

            staffCards.forEach(function (card) {
                const category = card.getAttribute('data-role-category');
                const shouldShow = selectedFilter === 'all' || category === selectedFilter;
                card.classList.toggle('is-hidden', !shouldShow);
            });
        });
    });
}

function initStaffSpotlight() {
    const staffCards = document.querySelectorAll('.staff-card');
    const nameEl = document.getElementById('spotlightName');
    const roleEl = document.getElementById('spotlightRole');
    const scheduleEl = document.getElementById('spotlightSchedule');
    const bioEl = document.getElementById('spotlightBio');
    const focusEl = document.getElementById('spotlightFocus');

    if (!staffCards.length || !nameEl) return;

    function selectCard(card) {
        staffCards.forEach(function (c) {
            c.classList.remove('selected');
        });
        card.classList.add('selected');

        nameEl.textContent = card.getAttribute('data-name') || '';
        roleEl.textContent = card.getAttribute('data-role') || '';
        scheduleEl.textContent = card.getAttribute('data-schedule') || '';
        bioEl.textContent = card.getAttribute('data-bio') || '';
        focusEl.textContent = card.getAttribute('data-focus') || '';
    }

    staffCards.forEach(function (card) {
        card.addEventListener('click', function () {
            selectCard(card);
        });

        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectCard(card);
            }
        });
    });
}