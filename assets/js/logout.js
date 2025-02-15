// Logout confirmation
document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logout-button');
    
    logoutButton.addEventListener('click', function() {
        const confirmation = confirm('Are you sure you want to log out?');
        
        if (confirmation) {
            window.location.href = 'logout.php';  // Or wherever your logout handler is
        }
    });
});
