<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../../../public/assets/css/user.css" />


    <title>Enhanced Learning Platform</title>
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
                    <li><a href="#" class="nav-link">mes courses</a></li>
                </ul>
            </nav>
            <a href="../Auth/register.php" class="btn-signup">Sign Up</a>
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