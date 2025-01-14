<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Enhanced Learning Platform</title>
    <style>
    /* Modern CSS Reset */
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Custom Properties for Consistent Colors */
    :root {
        --primary: #5624d0;
        --primary-dark: #401b9c;
        --secondary: #1e1e1c;
        --accent: #a435f0;
        --text-primary: #1c1d1f;
        --text-secondary: #6a6f73;
        --background-light: #f5f5f5;
        --white: #ffffff;
        --shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s ease;
    }

    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        line-height: 1.6;
        color: var(--text-primary);
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Header Styles */
    .header {
        position: sticky;
        top: 0;
        background-color: var(--white);
        box-shadow: var(--shadow);
        padding: 1rem;
        z-index: 1000;
    }

    .header-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo a {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary);
        text-decoration: none;
        transition: var(--transition);
    }

    .logo a:hover {
        color: var(--primary-dark);
    }

    .nav {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .nav-list {
        display: flex;
        gap: 1.5rem;
        list-style: none;
    }

    .nav-link {
        color: var(--text-primary);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
        padding: 0.5rem 1rem;
        border-radius: 4px;
    }

    .nav-link:hover {
        color: var(--primary);
        background-color: var(--background-light);
    }

    .btn-signup {
        background-color: var(--primary);
        color: var(--white);
        padding: 0.8rem 1.5rem;
        border-radius: 4px;
        font-weight: 600;
        transition: var(--transition);
    }

    .btn-signup:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        padding: 5rem 1rem;
        color: var(--white);
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .hero h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .hero p {
        font-size: clamp(1rem, 2.5vw, 1.25rem);
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    .search-form {
        display: flex;
        max-width: 600px;
        margin: 0 auto;
        gap: 0.5rem;
    }

    .search-form input {
        flex: 1;
        padding: 1rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        box-shadow: var(--shadow);
    }

    .search-form button {
        padding: 1rem 2rem;
        background-color: var(--accent);
        color: var(--white);
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
    }

    .search-form button:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
    }

    /* Courses Section */
    .courses {
        padding: 5rem 1rem;
        background-color: var(--background-light);
    }

    .courses h2 {
        text-align: center;
        font-size: clamp(1.5rem, 3vw, 2.5rem);
        margin-bottom: 3rem;
        color: var(--text-primary);
    }

    .course-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        padding: 0 1rem;
    }

    .course-card {
        background-color: var(--white);
        border-radius: 8px;
        overflow: hidden;
        transition: var(--transition);
        box-shadow: var(--shadow);
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .course-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .course-info {
        padding: 1.5rem;
    }

    .course-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        color: var(--text-primary);
    }

    .course-card p {
        color: var(--text-secondary);
        margin-bottom: 0.5rem;
    }

    .price {
        font-size: 1.25rem;
        color: var(--primary);
        font-weight: 700;
    }

    /* Footer Styles */
    .footer {
        background-color: #2d2d2d;
        color: white;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
        max-width: 100%;
        margin: 0 auto;
    }

    .footer-section {
        flex: 1;
        min-width: 200px;
        margin-bottom: 20px;
    }

    .footer-section h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .footer-section h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .footer-section p {
        font-size: 14px;
        line-height: 1.6;
        color: #ccc;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 10px;
    }

    .footer-section ul li a {
        color: #ccc;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-section ul li a:hover {
        color: #ec5252;
    }

    .social-links li a {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .social-links li a i {
        font-size: 16px;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #444;
        margin-top: 20px;
    }

    .footer-bottom p {
        font-size: 14px;
        color: #ccc;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section {
            max-width: 100%;
        }
    }

    /* Mobile Menu */
    .menu-toggle {
        display: none;
        cursor: pointer;
        padding: 0.5rem;
    }

    .nav-list {
        display: flex;
        gap: 1.5rem;
        list-style: none;
    }

    .menu-toggle {
        display: none;
        cursor: pointer;
        padding: 0.5rem;
        z-index: 1001;
        background: none;
        border: none;
        font-size: 1.5rem;
    }

    /* Overlay styles */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }

    .overlay.active {
        display: block;
    }

    /* Modified Responsive Design */
    @media (max-width: 768px) {
        .menu-toggle {
            display: block;
        }

        .nav-list {
            position: fixed;
            top: 0;
            left: -280px;
            height: 100vh;
            width: 280px;
            background-color: var(--white);
            padding: 80px 1rem 1rem 1rem;
            flex-direction: column;
            text-align: left;
            z-index: 999;
            transition: transform 0.3s ease-in-out;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .nav-list.active {
            transform: translateX(280px);
        }

        .nav-list li {
            margin: 1rem 0;
        }

        .nav-link {
            display: block;
            padding: 0.8rem 1rem;
            border-radius: 4px;
        }

        .nav-link:hover {
            background-color: var(--background-light);
        }

        .btn-signup {
            width: 100%;
            text-align: center;
        }
    }

    /* Animation for menu icon */
    .menu-toggle {
        position: relative;
        width: 30px;
        height: 25px;
        padding: 0;
    }

    .menu-toggle span {
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        background: var(--primary);
        border-radius: 3px;
        transition: all 0.25s ease-in-out;
    }

    .menu-toggle span:nth-child(1) {
        top: 0;
    }

    .menu-toggle span:nth-child(2) {
        top: 10px;
    }

    .menu-toggle span:nth-child(3) {
        top: 20px;
    }

    .menu-toggle.active span:nth-child(1) {
        top: 10px;
        transform: rotate(45deg);
    }

    .menu-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .menu-toggle.active span:nth-child(3) {
        top: 10px;
        transform: rotate(-45deg);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .menu-toggle {
            display: block;
        }

        .nav-list {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: var(--white);
            padding: 1rem;
            box-shadow: var(--shadow);
            flex-direction: column;
            text-align: center;
        }

        .nav-list.active {
            display: flex;
        }

        .search-form {
            flex-direction: column;
        }

        .search-form button {
            width: 100%;
        }

        .course-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-content,
    .course-card {
        animation: fadeIn 0.6s ease-out;
    }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <a href="#">Youdemy</a>
            </div>
            <nav class="nav">
                <button class="menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="overlay"></div>
                <ul class="nav-list">
                    <li><a href="#" class="nav-link">Categories</a></li>
                    <li><a href="#" class="nav-link">My Learning</a></li>
                    <li><a href="#" class="nav-link">Teach</a></li>
                    <li><a href="#" class="nav-link">Sign In</a></li>
                    <li><a href="#" class="btn-signup">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Transform Your Future with Learning</h1>
            <p>Discover thousands of courses from expert instructors worldwide</p>
            <form class="search-form">
                <input type="text" placeholder="What would you like to learn today?">
                <button type="submit">Explore Courses</button>
            </form>
        </div>
    </section>

    <section class="courses">
        <h2>Featured Courses</h2>
        <div class="course-grid">
            <div class="course-card">
                <img src="/api/placeholder/400/320" alt="Web Development Course">
                <div class="course-info">
                    <h3>Complete Web Development Bootcamp</h3>
                    <p>John Smith</p>
                    <p class="price">$19.99</p>
                </div>
            </div>
            <div class="course-card">
                <img src="/api/placeholder/400/320" alt="Data Science Course">
                <div class="course-info">
                    <h3>Data Science Fundamentals</h3>
                    <p>Sarah Johnson</p>
                    <p class="price">$29.99</p>
                </div>
            </div>
            <div class="course-card">
                <img src="/api/placeholder/400/320" alt="Digital Marketing Course">
                <div class="course-info">
                    <h3>Digital Marketing Mastery</h3>
                    <p>Michael Brown</p>
                    <p class="price">$39.99</p>
                </div>
            </div>
            <div class="course-card">
                <img src="/api/placeholder/400/320" alt="UX Design Course">
                <div class="course-info">
                    <h3>UX Design Essentials</h3>
                    <p>Emma Wilson</p>
                    <p class="price">$49.99</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Youdemy</h3>
                <p>Youdemy est une plateforme d'apprentissage en ligne qui propose des cours dans divers domaines pour
                    vous aider à atteindre vos objectifs.</p>
            </div>
            <div class="footer-section">
                <h4>Liens utiles</h4>
                <ul>
                    <li><a href="#">À propos de nous</a></li>
                    <li><a href="#">Contactez-nous</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Conditions d'utilisation</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Suivez-nous</h4>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Youdemy. Tous droits réservés.</p>
        </div>
    </footer>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const navList = document.querySelector('.nav-list');
        const overlay = document.querySelector('.overlay');
        const body = document.body;
        let isMenuOpen = false;

        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            menuToggle.classList.toggle('active');
            navList.classList.toggle('active');
            overlay.classList.toggle('active');
            body.classList.toggle('menu-open');
        }

        function closeMenu() {
            if (isMenuOpen) {
                isMenuOpen = false;
                menuToggle.classList.remove('active');
                navList.classList.remove('active');
                overlay.classList.remove('active');
                body.classList.remove('menu-open');
            }
        }

        // Event listeners
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        overlay.addEventListener('click', closeMenu);

        // Close menu when clicking navigation links
        const navLinks = document.querySelectorAll('.nav-link, .btn-signup');
        navLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });

        // Close menu on window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 768) {
                    closeMenu();
                }
            }, 250);
        });
    });
    </script>
</body>

</html>