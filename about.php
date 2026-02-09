<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Star Transport Company</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        if (window.location.protocol === 'file:') {
            window.location.href = "http://localhost/about.php";
        }
    </script>
</head>

<body>
    <header>
        <div class="container">
            <nav style="flex-wrap: wrap;">
                <a href="index.php" class="logo"><img src="/assets/images/stc_logo_black.png" alt="Star Transport"></a>
                <ul class="nav-links" style="gap: 1.5rem;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" class="active">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
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
                        <a href="pages/auth/login.php" class="btn btn-outline">Login</a>
                        <a href="pages/auth/register.php" class="btn btn-primary" style="margin-left: 1rem;">Register</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-text" style="text-align: center; margin: 0 auto; max-width: 800px; margin-bottom: 4rem;">
                <h1>About <span class="text-gradient">Star Transport</span></h1>
                <p>Leading the way in heavy logistics and transport innovation.</p>
            </div>

            <div class="glass-card">
                <h2>Our Mission</h2>
                <p style="color: var(--text-muted); margin-top: 1rem;">To provide safe, reliable, and efficient
                    transportation solutions for over-dimensional and heavy cargo, ensuring our clients' projects move
                    forward without delay.</p>
            </div>

            <div style="margin-top: 4rem;">
                <h2 style="text-align: center; margin-bottom: 3rem;">The <span class="text-gradient">Star
                        Advantage</span></h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">

                    <!-- Feature 1 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(59, 130, 246, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #3b82f6; font-size: 1.5rem;">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <h3>Pan-India Network</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            Seamless connectivity across 28 states and 8 union territories, delivering your cargo to
                            even the remotest locations.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(34, 197, 94, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #22c55e; font-size: 1.5rem;">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3>Safety First</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            ISO 9001:2015 certified safety protocols. Our drivers are trained in defensive driving and
                            hazardous material handling.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(239, 68, 68, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #ef4444; font-size: 1.5rem;">
                            <i class="fa-solid fa-satellite-dish"></i>
                        </div>
                        <h3>Real-Time Tracking</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            End-to-end visibility with GPS-enabled fleet. Get instant status updates and live location
                            sharing of your shipment.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(234, 179, 8, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #eab308; font-size: 1.5rem;">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <h3>Cost Effective</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            Optimized route planning and load consolidation help us offer the most competitive rates in
                            the market.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(168, 85, 247, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #a855f7; font-size: 1.5rem;">
                            <i class="fa-solid fa-truck-front"></i>
                        </div>
                        <h3>Modern Indigenous Fleet</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            A robust fleet comprising the latest Tata Signa, Ashok Leyland, and Tata Signa 4025.S trucks
                            ensures reliability.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="glass-card" style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: rgba(236, 72, 153, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #ec4899; font-size: 1.5rem;">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.9rem;">
                            Our dedicated logistics experts are available round the clock to resolve your queries and
                            ensure peace of mind.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2026 Star Transport Company. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
