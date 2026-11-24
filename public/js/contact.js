/* MERIDIAN CONTACT PAGE
   Client-side validation only. This demo does not send or store messages. */

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('meridianContactForm');

    if (!form) {
        return;
    }

    const fields = {
        name: {
            input: document.getElementById('contactName'),
            error: document.getElementById('contactNameError')
        },
        email: {
            input: document.getElementById('contactEmail'),
            error: document.getElementById('contactEmailError')
        },
        subject: {
            input: document.getElementById('contactSubject'),
            error: document.getElementById('contactSubjectError')
        },
        message: {
            input: document.getElementById('contactMessage'),
            error: document.getElementById('contactMessageError')
        }
    };

    const successMessage = document.getElementById('contactSuccess');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    function showError(field, message) {
        field.error.textContent = message;
        field.input.classList.add('is-invalid');
        field.input.setAttribute('aria-invalid', 'true');
    }

    function clearError(field) {
        field.error.textContent = '';
        field.input.classList.remove('is-invalid');
        field.input.removeAttribute('aria-invalid');
    }

    function validateForm() {
        let isValid = true;
        let firstInvalidField = null;

        Object.values(fields).forEach(function (field) {
            clearError(field);
        });

        const name = fields.name.input.value.trim();
        const email = fields.email.input.value.trim();
        const subject = fields.subject.input.value.trim();
        const message = fields.message.input.value.trim();

        function invalidate(field, errorText) {
            showError(field, errorText);
            isValid = false;

            if (!firstInvalidField) {
                firstInvalidField = field.input;
            }
        }

        if (name === '') {
            invalidate(fields.name, 'Please enter your name.');
        }

        if (email === '') {
            invalidate(fields.email, 'Please enter your email address.');
        } else if (!emailPattern.test(email)) {
            invalidate(fields.email, 'Please enter a valid email address.');
        }

        if (subject === '') {
            invalidate(fields.subject, 'Please enter a subject.');
        }

        if (message === '') {
            invalidate(fields.message, 'Please enter your message.');
        }

        if (firstInvalidField) {
            firstInvalidField.focus();
        }

        return isValid;
    }

    Object.values(fields).forEach(function (field) {
        field.input.addEventListener('input', function () {
            clearError(field);
            successMessage.hidden = true;
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        successMessage.hidden = true;

        if (!validateForm()) {
            return;
        }

        successMessage.hidden = false;
        form.reset();

        Object.values(fields).forEach(function (field) {
            clearError(field);
        });

        successMessage.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
        });
    });
});
