
/* MERIDIAN CONTACT PAGE
   Client-side validation with Laravel form submission.
*/

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
        } else if (name.length > 100) {
            invalidate(fields.name, 'Name must not exceed 100 characters.');
        }

        if (email === '') {
            invalidate(fields.email, 'Please enter your email address.');
        } else if (!emailPattern.test(email)) {
            invalidate(fields.email, 'Please enter a valid email address.');
        } else if (email.length > 255) {
            invalidate(fields.email, 'Email must not exceed 255 characters.');
        }

        if (subject === '') {
            invalidate(fields.subject, 'Please enter a subject.');
        } else if (subject.length > 150) {
            invalidate(fields.subject, 'Subject must not exceed 150 characters.');
        }

        if (message === '') {
            invalidate(fields.message, 'Please enter your message.');
        } else if (message.length > 2000) {
            invalidate(fields.message, 'Message must not exceed 2000 characters.');
        }

        if (firstInvalidField) {
            firstInvalidField.focus();
        }

        return isValid;
    }

    Object.values(fields).forEach(function (field) {
    field.input.addEventListener('input', function () {
        if (field.input.value.trim() !== '') {
            clearError(field);
        }

        if (successMessage) {
            successMessage.hidden = true;
        }
    });
});

    form.addEventListener('submit', function (event) {
        if (successMessage) {
            successMessage.hidden = true;
        }

        if (!validateForm()) {
            event.preventDefault();
            return;
        }

        // Valid forms are submitted normally to Laravel.
        // Laravel handles server-side validation and the response.
    });
});
