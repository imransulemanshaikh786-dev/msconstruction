<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Done - Star Transport Company</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        if (window.location.protocol === 'file:') {
            window.location.href = "http://localhost/work_done.html";
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
                    <li><a href="heavy_machinery.php">Heavy Mach.</a></li>
                    <li><a href="how_it_works.php">How It Works</a></li>
                    <li><a href="work_done.php" class="active">Work Done</a></li>
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

    <section class="hero" style="min-height: 40vh;">
        <div class="container">
            <div class="hero-text" style="text-align: center; margin: 0 auto; max-width: 800px;">
                <h1>Our <span class="text-gradient">Portfolio</span></h1>
                <p>A showcase of our most challenging and successful heavy transport projects across India.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <!-- Project New (Wrapped Cylinder) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/cylindrical_cargo_transport.jpg" alt="Wrapped Industrial Vessel"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Heavy Vessel Transport</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Route:</strong> Heavy Industry Zone to Port<br>
                            <strong>Cargo:</strong> Oversized Cylindrical Equipment<br>
                            <strong>Equipment:</strong> Multi-Axle Low Bed Trailer
                        </p>
                        <p style="font-size: 0.9rem;">Transportation of sensitive industrial equipment with protective
                            covering for weather safety.</p>
                    </div>
                </div>
                <!-- Project New (Heavy Tank) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/heavy_tank_transport.jpg" alt="Heavy Tank Transport"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Industrial Storage Tank</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Route:</strong> Manufacturing Unit to Refinery<br>
                            <strong>Cargo:</strong> Large Industrial Storage Vessel<br>
                            <strong>Equipment:</strong> Ashok Leyland Puller
                        </p>
                        <p style="font-size: 0.9rem;">Complete logistical solution for transporting oversized
                            cylindrical storage tanks.</p>
                    </div>
                </div>

                <!-- Project New (Excavator) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/excavator_transport.jpg" alt="Excavator Transport"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Heavy Excavator Transport</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Route:</strong> Pune to Chennai<br>
                            <strong>Cargo:</strong> Heavy Crawler Excavator<br>
                            <strong>Equipment:</strong> Ashok Leyland Low Bed
                        </p>
                        <p style="font-size: 0.9rem;">Efficient interstate logistics for heavy construction machinery,
                            ensuring timely delivery to site.</p>
                    </div>
                </div>
                <!-- Project New (Blue Cargo) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/blue_cargo_transport.jpg" alt="Oversized Box Cargo"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Oversized Box Cargo</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Route:</strong> Interstate Highway Transport<br>
                            <strong>Cargo:</strong> Heavy Industrial Fabrication<br>
                            <strong>Equipment:</strong> Tata Prime Mover
                        </p>
                        <p style="font-size: 0.9rem;">Seamless transportation of height-critical cargo through toll
                            plazas and highway corridors.</p>
                    </div>
                </div>








                <!-- Project 5 (New Image) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/project_cargo_loading.jpg" alt="Heavy Cargo Loading"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Industrial Equipment Loading</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Location:</strong> Nhava Sheva Port<br>
                            <strong>Operation:</strong> Heavy Lift Loading<br>
                            <strong>Equipment:</strong> Reach Stacker & Tata Signa
                        </p>
                        <p style="font-size: 0.9rem;">Precision loading of oversized industrial machinery onto our
                            specialized low-bed trailer using heavy-duty port equipment.</p>
                    </div>
                </div>

                <!-- Project 6 (New Image) -->
                <div class="glass-card" style="padding: 0; overflow: hidden;">
                    <div
                        style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #1e293b;">
                        <img src="/assets/images/storage_tank_transport.jpg" alt="Wind Tower Transport"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <h3 style="margin-bottom: 0.5rem;">Wind Tower Section</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                            <strong>Route:</strong> Manufacturing Unit to Wind Farm<br>
                            <strong>Cargo:</strong> 4.5m Dia Tower Section<br>
                            <strong>Equipment:</strong> Tata Signa 5530.S
                        </p>
                        <p style="font-size: 0.9rem;">Safe transportation of critical renewable energy infrastructure
                            components using specialized long-bed trailers.</p>
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
