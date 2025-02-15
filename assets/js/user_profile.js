// User profile interaction for updating information
document.addEventListener('DOMContentLoaded', function () {
    const updateButton = document.getElementById('update-profile');
    const emailField = document.getElementById('email');
    
    updateButton.addEventListener('click', function() {
        const newEmail = emailField.value;
        
        if (!newEmail) {
            alert('Please enter a valid email address.');
            return;
        }
        
        // Simulate updating user profile
        alert(`Your profile has been updated with new email: ${newEmail}`);
        
        // You would typically send this update to the server via AJAX or fetch
        // For example: fetch('/update-profile', { method: 'POST', body: { email: newEmail } })
    });
});
