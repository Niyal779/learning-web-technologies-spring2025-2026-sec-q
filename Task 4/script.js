// Fixed unit price
const UNIT_PRICE = 1000;
let couponShown = false;

// Get DOM elements
const quantityInput = document.getElementById('quantity');
const totalInput = document.getElementById('total');

// Function to calculate and update total
function updateTotal() {
    // Get quantity value
    let quantity = parseInt(quantityInput.value);
    
    // Validation: Check if negative
    if (quantity < 0) {
        quantityInput.value = 0;
        quantity = 0;
        alert('Quantity cannot be negative! Reset to 0');
    }
    
    // Calculate total
    const total = UNIT_PRICE * quantity;
    
    // Update total display
    totalInput.value = total;
    
    // Gift coupon notification
    if (total > 1000 && !couponShown) {
        alert('Congratulations! You are eligible for a gift coupon!');
        couponShown = true;
    }
    
    // Reset coupon flag if total goes below 1000
    if (total <= 1000) {
        couponShown = false;
    }
}

// Add event listener for quantity changes
quantityInput.addEventListener('input', updateTotal);
quantityInput.addEventListener('change', updateTotal);

// Initial calculation
updateTotal();