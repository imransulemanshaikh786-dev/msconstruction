<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Transport Company - Heavy Logistics Experts</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        if (window.location.protocol === 'file:') {
            alert('CRITICAL ERROR: You are opening this file directly! \n\nPHP applications MUST be run through a web server (XAMPP). \n\nPlease access the site via: http://localhost/index.php');
            window.location.href = "http://localhost/index.php";
        }
    </script>

    <style>
        body {
            background-color: transparent !important;
        }

        .page-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -10;
            overflow: hidden;
            pointer-events: none;
        }

        .page-background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/assets/images/home_bg.jpg') no-repeat center center/cover;
            opacity: 0.6;
        }

        .page-background::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(2, 6, 23, 0.9), rgba(2, 6, 23, 0.7));
        }
    </style>
</head>

<body>
    <div class="page-background"></div>

    <!-- Header -->
    <header>
        <div class="container">
            <nav style="flex-wrap: wrap;">
                <a href="index.php" class="logo"><img src="/assets/images/stc_logo_black_bg.png"
                        alt="Star Transport"></a>
                <ul class="nav-links" style="gap: 1.5rem;">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li style="position: relative;" class="dropdown-trigger">
                        <a href="services.php">Services</a>
                        <!-- Simple Dropdown Content could go here, for now just links in main nav to keep it clean or separate -->
                    </li>
                    <li><a href="odc_cargo.php">ODC Cargo</a></li>
                    <li><a href="heavy_machinery.php">Heavy Mach.</a></li>
                    <li><a href="how_it_works.php">How It Works</a></li>
                    <li><a href="work_done.php">Work Done</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="auth-buttons">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <?php
                        $dashboard_link = "pages/customer/dashboard.php";
                        if (isset($_SESSION['role'])) {
                            if ($_SESSION['role'] === 'admin') {
                                $dashboard_link = "pages/admin/dashboard.php";
                            } elseif ($_SESSION['role'] === 'driver') {
                                $dashboard_link = "pages/driver/dashboard.php";
                            }
                        }
                        ?>
                        <a href="<?php echo $dashboard_link; ?>" class="btn btn-primary">Dashboard</a>
                        <a href="pages/auth/logout.php" class="btn btn-outline" style="margin-left: 1rem;">Logout</a>
                    <?php else: ?>
                        <a href="pages/auth/login.php" class="btn btn-outline active">Login</a>
                        <a href="pages/auth/register.php" class="btn btn-primary" style="margin-left: 1rem;">Register</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Specialized <span class="text-gradient">ODC & Heavy</span> <br>Transport Solutions</h1>
                    <p style="margin-left: 50px;">Relocating industrial equipment and heavy machinery with care.</p>
                    <div class="cta-group">
                        <a href="pages/auth/register.php" class="btn btn-primary">Get a Quote</a>
                        <a href="services.php" class="btn btn-outline" style="margin-left: 1rem;">Our Services</a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat-item">
                            <h3>150+</h3>
                            <p>Specialized Trucks</p>
                        </div>
                        <div class="stat-item">
                            <h3>5k+</h3>
                            <p>Heavy Loads</p>
                        </div>
                        <div class="stat-item">
                            <h3>100%</h3>
                            <p>Safety Record</p>
                        </div>
                    </div>
                </div>



                <img src="/assets/images/stc_logo_black_bg.png" alt="Star Transport Logo" class="glass-card truck-img"
                    style="width: 100%; max-width: 500px; height: auto; object-fit: contain; background-color: black; margin-top: -120px;">
            </div>
        </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Star?</h2>
                <p>We combine technology with logistics to offer superior service.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h3>Fast Booking</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Book a truck in seconds with our easy-to-use
                        dashboard. Real-time availability.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h3>Verified Drivers</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">All our drivers are thoroughly vetted and
                        trained to ensure the safety of your cargo.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Our dedicated support team is always ready to
                        assist you with any queries.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3>Real-Time Tracking</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Track your cargo in real-time with our
                        advanced GPS tracking system.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>
                    <h3>Cost Effective</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Competitive pricing without compromising on
                        service quality or safety.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3>Pan-India Network</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Extensive network covering major cities and
                        industrial hubs across the country.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3>On-Time Delivery</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Strict adherence to delivery schedules with
                        optimized route planning.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <h3>Comprehensive Insurance</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Full transit insurance coverage for peace of
                        mind during transport.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <h3>Expert Route Surveys</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Detailed feasibility studies and route
                        surveys for over-dimensional cargo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#" class="logo"><img src="/assets/images/stc_logo_black_bg.png" alt="Star Transport"></a>
                    <p>Modernizing logistics with efficient, reliable, and technology-driven transport solutions.</p>
                </div>

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Book Truck</a></li>
                        <li><a href="#">Enterprise</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Star Transport Company. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
