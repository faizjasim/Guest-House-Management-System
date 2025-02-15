// General form validation (for contact, feedback, etc.)
function validateForm(form) {
    let isValid = true;
    form.querySelectorAll('input, textarea, select').forEach(input => {
        if (input.required && !input.value.trim()) {
            isValid = false;
            alert(`${input.name} is required.`);
        }
    });
    return isValid;
}

// Adding event listener for form submissions
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(event) {
        if (!validateForm(form)) {
            event.preventDefault();
        }
    });
});
