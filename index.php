<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="#">GhumoIndia</a>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#destinations">Destinations</a></li>
            <li><a href="#tours">Tours</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Explore the india with Us</h1>
            <p>Discover amazing destinations and create unforgettable memories.</p>
            <div class="booking-form">
                <h2>Book My Trip</h2>
                <form>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" placeholder="Enter your destination" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" required>
                    </div>
                    <div class="form-group">
                        <label for="people">Number of People</label>
                        <input type="number" id="people" placeholder="Number of people" min="1" required>
                    </div>
                    <button type="submit" class="btn">Book Now</button>
                </form>
            </div>
        </div>
    </section>
      <!-- Booking Form
<div class="booking-form">
    <h2>Book My Trip</h2>
    <form id="bookingForm">
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" placeholder="Enter your destination" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="people">Number of People</label>
            <input type="number" id="people" name="people" placeholder="Number of people" min="1" required>
        </div>
        <button type="submit" class="btn">Book Now</button>
    </form>
</div> -->

<!-- Payment Form (Hidden by Default) -->
<div id="paymentForm" class="payment-form" style="display: none;">
    <h2>Payment Details</h2>
    <form id="paymentDetailsForm" action="process_payment.php" method="POST">
        <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" required>
        </div>
        <div class="form-group">
            <label for="expiryDate">Expiry Date</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
        </div>
        <div class="form-group">
            <label for="cardHolder">Card Holder Name</label>
            <input type="text" id="cardHolder" name="cardHolder" placeholder="Card holder name" required>
        </div>
        <button type="submit" class="btn">Pay Now</button>
    </form>
</div>
    <!-- Adventure Packages Section -->
    <section id="destinations" class="destinations">
        <h2>Adventure Packages</h2>
        <div class="package-grid">
            <div class="package-card">
                <img src="mumbai.jpg" alt="Mumbai Darshan">
                <h3>Mumbai Darshan</h3>
                <p>Explore the vibrant city of Mumbai with its iconic landmarks and bustling streets.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="package-card">
                <img src="taj-mahal.jpg" alt="Taj Mahal">
                <h3>Taj Mahal</h3>
                <p>Visit the majestic Taj Mahal, a symbol of love and one of the Seven Wonders of the World.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="package-card">
                <img src="ladakh.jpg" alt="Ladakh">
                <h3>Ladakh Adventure</h3>
                <p>Experience the breathtaking landscapes and thrilling adventures in Ladakh.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <!-- Add more packages as needed -->
        </div>
    </section>

<!-- Footer Section -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h3>TravelWorld</h3>
            <p>Explore the world with us and create unforgettable memories. We offer the best travel packages and adventure experiences.</p>
            <div class="contact">
                <span><i class="fas fa-phone"></i> +91 123 456 7890</span>
                <span><i class="fas fa-envelope"></i> info@travelworld.com</span>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#tours">Tours</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section contact-form">
            <h3>Contact Us</h3>
            <form action="contact.php" method="POST">
                <input type="email" name="email" class="text-input contact-input" placeholder="Your email address" required>
                <textarea name="message" class="text-input contact-input" placeholder="Your message" required></textarea>
                <button type="submit" class="btn btn-big">
                    <i class="fas fa-envelope"></i> Send
                </button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 TravelWorld | Designed by Your Name
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</footer>
    <script src="script.js"></script>
</body>
</html>