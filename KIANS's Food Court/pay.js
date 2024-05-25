const gcashRadio = document.getElementById('gcash');
    const codRadio = document.getElementById('cod');
    const gcashDetails = document.getElementById('gcashDetails');
    const buyerName = document.getElementById('buyerName');
    const buyerAddress = document.getElementById('buyerAddress');
    const confirmButton = document.getElementById('confirmButton');
    const confirmation = document.getElementById('confirmation');

    gcashRadio.addEventListener('click', () => {
        gcashDetails.style.display = 'block';
        buyerName.style.display = 'none';
        buyerAddress.style.display = 'none';
        confirmation.style.display = 'block';
    });

    codRadio.addEventListener('click', () => {
        gcashDetails.style.display = 'none';
        buyerName.style.display = 'block';
        buyerAddress.style.display = 'block';
        confirmation.style.display = 'block';
    });

    document.addEventListener('DOMContentLoaded', () => {
        // Initially show name and address fields as they are needed for both payment methods
        buyerName.style.display = 'block';
        buyerAddress.style.display = 'block';
        confirmation.style.display = 'none'; // Hide confirm button initially
    });

    confirmButton.addEventListener('click', () => {
        const name = buyerName.value;
        const address = buyerAddress.value;
        const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
        const referenceNumber = document.getElementById('referenceNumber').value;

        if (paymentMethod === 'gcash' && referenceNumber.trim() === '') {
            alert('Please enter the reference number.');
            return;
        }

        if (paymentMethod === 'cod' && (name.trim() === '' || address.trim() === '')) {
            alert('Please enter your name and address.');
            return;
        }

        alert(`Payment Confirmed!\nName: ${name}\nAddress: ${address}\nPayment Method: ${paymentMethod}\nReference Number: ${referenceNumber}`);
    });