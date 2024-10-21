<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Mauritius - Your Dream Tour Operator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Explore Mauritius</h1>
        <nav>
            <ul>
                <li><a href="#tours">Tours</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="login.php">Login</a></li> <!-- Link to Join Us page -->
                
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <h2>Discover the Beauty of Mauritius</h2>
        <p>Join us for an unforgettable experience exploring the enchanting islands.</p>
        <a href="#tours" class="cta-button">View Tours</a>
    </section>

    <!-- Main Container -->
    <main class="container">
        <!-- Tours Section -->
        <section id="tours" class="tours-section">
            <h3>Our Tours</h3>
            <div class="tour-cards">
                <article class="tour-card">
                    <img src="tour1.jpg" alt="Island Hopping Tour">
                    <h4>Island Hopping Adventure</h4>
                    <p>Experience the breathtaking beauty of Mauritius with our exclusive island hopping tour.</p>
                </article>
                <article class="tour-card">
                    <img src="tour2.jpg" alt="Wildlife Safari Tour">
                    <h4>Wildlife Safari</h4>
                    <p>Discover the rich wildlife of Mauritius on an unforgettable safari.</p>
                </article>
                <article class="tour-card">
                    <img src="tour3.jpg" alt="Underwater Exploration Tour">
                    <h4>Underwater Exploration</h4>
                    <p>Join us for an exciting underwater adventure and explore the vibrant marine life.</p>
                </article>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services-section">
            <h3>Our Services</h3>
            <div class="service-list">
                <article class="service">
                    <h4>Customized Itineraries</h4>
                    <p>We create personalized itineraries to fit your travel preferences and budget.</p>
                </article>
                <article class="service">
                    <h4>Expert Guidance</h4>
                    <p>Our local guides will provide you with insider knowledge and tips for a memorable experience.</p>
                </article>
                <article class="service">
                    <h4>24/7 Support</h4>
                    <p>We're here for you 24/7 to assist you during your travels.</p>
                </article>
            </div>
        </section>

        <!-- Embark Section (Join Us) -->
        <section id="join" class="join-section">
            <h3>Embark on Your Adventure!</h3>
            <p>Join us today and start your journey to explore the beauty of Mauritius! Whether you’re looking for a relaxing getaway or an adventurous experience, we have something for everyone.</p>
            <a href="join.php" class="btn-join">Join Us Now!</a> <!-- Link to Join Us page -->
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <h3>Contact Us</h3>
            <form action="#" method="post">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Explore Mauritius. All rights reserved.</p>
    </footer>
</body>
</html>

