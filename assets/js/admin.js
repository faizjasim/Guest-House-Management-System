// Admin page - Room Availability Filter
document.addEventListener('DOMContentLoaded', function () {
    const availabilityFilter = document.getElementById('availability-filter');
    const roomRows = document.querySelectorAll('.room-row');
    
    availabilityFilter.addEventListener('change', function () {
        const selectedStatus = availabilityFilter.value;
        
        roomRows.forEach(row => {
            const statusCell = row.querySelector('.room-status');
            if (statusCell) {
                if (selectedStatus === 'all' || statusCell.textContent.toLowerCase() === selectedStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});
