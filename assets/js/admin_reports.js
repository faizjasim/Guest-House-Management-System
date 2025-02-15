// Admin reports filtering by date range
document.addEventListener('DOMContentLoaded', function () {
    const startDate = document.getElementById('start-date');
    const endDate = document.getElementById('end-date');
    const reportButton = document.getElementById('generate-report');
    
    reportButton.addEventListener('click', function() {
        const start = new Date(startDate.value);
        const end = new Date(endDate.value);
        
        if (start > end) {
            alert('Start date must be before end date.');
            return;
        }
        
        // Simulating report generation
        alert(`Generating report from ${startDate.value} to ${endDate.value}`);
        
        // Here you would make an API call or query the database
    });
});
