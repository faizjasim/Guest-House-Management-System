// Testing API call or room availability
document.addEventListener('DOMContentLoaded', function () {
    const testButton = document.getElementById('test-api');
    
    testButton.addEventListener('click', function() {
        alert('Testing API call simulation...');
        
        // Example of an API call using fetch (replace with your actual API endpoint)
        fetch('/test-api', {
            method: 'POST',
            body: JSON.stringify({ roomType: 'single', checkIn: '2025-06-01', checkOut: '2025-06-05' }),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => alert('API Test successful: ' + data.message))
        .catch(error => alert('API Test failed: ' + error));
    });
});
