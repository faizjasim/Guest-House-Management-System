// Handling the feedback form submission
document.addEventListener('DOMContentLoaded', function () {
    const feedbackForm = document.getElementById('feedback-form');
    
    feedbackForm.addEventListener('submit', function(event) {
        const feedbackText = document.getElementById('feedback').value;
        
        if (!feedbackText.trim()) {
            event.preventDefault();
            alert('Please provide your feedback.');
        }
    });
});
