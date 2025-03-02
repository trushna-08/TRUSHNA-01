const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

document.getElementById('bookingForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Hide the booking form
    document.querySelector('.booking-form').style.display = 'none';

    // Show the payment form
    document.getElementById('paymentForm').style.display = 'block';
});

// Handle Booking Form Submission
document.getElementById('bookingForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Get booking details
    const destination = document.getElementById('destination').value;
    const date = document.getElementById('date').value;
    const people = document.getElementById('people').value;

    // Store booking details in hidden fields
    document.getElementById('hiddenDestination').value = destination;
    document.getElementById('hiddenDate').value = date;
    document.getElementById('hiddenPeople').value = people;

    // Hide the booking form
    document.querySelector('.booking-form').style.display = 'none';

    // Show the payment form
    document.getElementById('paymentForm').style.display = 'block';
});

// Handle Payment Form Submission
document.getElementById('paymentDetailsForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Validate Card Number
    const cardNumber = document.getElementById('cardNumber').value;
    if (!/^\d{16}$/.test(cardNumber)) {
        alert("Please enter a valid 16-digit card number.");
        return;
    }

    // Validate Expiry Date (MM/YY format)
    const expiryDate = document.getElementById('expiryDate').value;
    if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiryDate)) {
        alert("Please enter a valid expiry date in MM/YY format.");
        return;
    }

    // Validate CVV
    const cvv = document.getElementById('cvv').value;
    if (!/^\d{3}$/.test(cvv)) {
        alert("Please enter a valid 3-digit CVV.");
        return;
    }

    // Validate Card Holder Name
    const cardHolder = document.getElementById('cardHolder').value;
    if (cardHolder.trim() === "") {
        alert("Please enter the card holder's name.");
        return;
    }

    // If all validations pass, submit the form
    this.submit();
});