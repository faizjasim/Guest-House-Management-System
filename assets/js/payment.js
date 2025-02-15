// Payment form validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('payment-form');
    
    form.addEventListener('submit', function(event) {
        const paymentMethod = document.querySelector('input[name="payment-method"]:checked');
        
        if (!paymentMethod) {
            event.preventDefault();
            alert('Please choose a payment method.');
        }
    });
});
