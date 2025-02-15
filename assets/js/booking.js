// Form validation for booking
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('booking-form');
    
    form.addEventListener('submit', function(event) {
        const name = document.getElementById('name').value;
        const checkIn = document.getElementById('check-in').value;
        const checkOut = document.getElementById('check-out').value;
        const roomType = document.getElementById('room-type').value;

        // Validate form inputs
        if (!name || !checkIn || !checkOut || !roomType) {
            event.preventDefault();
            alert('Please fill in all fields.');
        } else if (new Date(checkIn) >= new Date(checkOut)) {
            event.preventDefault();
            alert('Check-out date must be later than check-in date.');
        }
    });
});
