<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Machinery - Star Transport Company</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        if (window.location.protocol === 'file:') {
            window.location.href = "http://localhost/heavy_machinery.html";
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
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="odc_cargo.php">ODC Cargo</a></li>
                    <li><a href="heavy_machinery.php" class="active">Heavy Mach.</a></li>
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

    <section class="hero" style="min-height: 50vh;">
        <div class="container">
            <div class="hero-text" style="text-align: center; margin: 0 auto; max-width: 800px;">
                <h1>Heavy <span class="text-gradient">Machinery</span> Transport</h1>
                <p>Relocating industrial equipment and heavy machinery with care.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-tractor"></i></div>
                    <h3>Construction Equipment</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Safe transport of excavators, bulldozers,
                        cranes, and other construction machinery.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-industry"></i></div>
                    <h3>Industrial Plant Relocation</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">End-to-end solutions for shifting entire
                        manufacturing units or heavy plant machinery.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>Secure Lashing</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Professional lashing and choking to ensure
                        zero movement during transit.</p>
                </div>
            </div>

            <div style="margin-top: 4rem;">
                <h2 style="text-align: center; margin-bottom: 2rem;">Specialized <span class="text-gradient">ODC
                        Cargo</span> We Handle</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(34, 197, 94, 0.1); padding: 0.8rem; border-radius: 8px; color: #22c55e;">
                            <i class="fa-solid fa-bolt" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Power Plant Equipment</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Transformers, gas turbines, generators, and stators managed with hydraulic axle
                                precision.
                            </p>
                        </div>
                    </div>

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(59, 130, 246, 0.1); padding: 0.8rem; border-radius: 8px; color: #3b82f6;">
                            <i class="fa-solid fa-fire-burner" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Industrial Boilers & Tanks</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Oversized boilers, pressure vessels, and storage tanks for chemical and oil industries.
                            </p>
                        </div>
                    </div>

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(234, 179, 8, 0.1); padding: 0.8rem; border-radius: 8px; color: #eab308;">
                            <i class="fa-solid fa-road" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Infrastructure Materials</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Prefabricated concrete beams, steel girders for bridges, and metro rail coaches.
                            </p>
                        </div>
                    </div>

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(239, 68, 68, 0.1); padding: 0.8rem; border-radius: 8px; color: #ef4444;">
                            <i class="fa-solid fa-wind" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Renewable Energy</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Windmill blades (up to 80m), tower sections, and nacelles requiring extendable trailers.
                            </p>
                        </div>
                    </div>

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(168, 85, 247, 0.1); padding: 0.8rem; border-radius: 8px; color: #a855f7;">
                            <i class="fa-solid fa-ship" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Marine & Aerospace</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Boat hulls, propellers, and aircraft fuselage sections requiring specialized cradles.
                            </p>
                        </div>
                    </div>

                    <div class="glass-card" style="display: flex; gap: 1rem; align-items: start;">
                        <div
                            style="background: rgba(236, 72, 153, 0.1); padding: 0.8rem; border-radius: 8px; color: #ec4899;">
                            <i class="fa-solid fa-hammer" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Mining Machinery</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Heavy dumpers, rock crushers, screens, and conveyor systems for mining sites.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="contact.php" class="btn btn-primary">Book Heavy Transport</a>
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
