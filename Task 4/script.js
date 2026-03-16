const UNIT_PRICE = 1000;


const quantityInput = document.getElementById('quantity');
const totalInput = document.getElementById('total');

// Function to calculate and update total
function updateTotal() {
    // Get quantity value
    let quantity = parseInt(quantityInput.value);
    
    // Calculate total
    const total = UNIT_PRICE * quantity;
    
    // Update total display
    totalInput.value = total;
}

// Add event listener for quantity changes
quantityInput.addEventListener('input', updateTotal);

// Initial calculation
updateTotal();