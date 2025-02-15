// Room availability check for users before booking
document.addEventListener('DOMContentLoaded', function () {
    const checkIn = document.getElementById('check-in');
    const checkOut = document.getElementById('check-out');
    const roomType = document.getElementById('room-type');
    const checkAvailabilityButton = document.getElementById('check-availability');
    
    checkAvailabilityButton.addEventListener('click', function() {
        const checkInDate = new Date(checkIn.value);
        const checkOutDate = new Date(checkOut.value);
        
        if (checkInDate >= checkOutDate) {
            alert('Check-out date must be later than check-in date.');
            return;
        }
        
        // Simulating an API call to check availability
        alert(`Checking availability for a ${roomType.value} room from ${checkIn.value} to ${checkOut.value}.`);
        
        // Here you would make an actual API call to check room availability
        // For example, fetch('api/check-room-availability', { method: 'POST', body: { checkIn, checkOut, roomType } })
    });
});
