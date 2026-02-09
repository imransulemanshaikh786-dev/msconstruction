<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Star Transport Company</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        if (window.location.protocol === 'file:') {
            window.location.href = "http://localhost/services.html";
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
                    <li><a href="services.php" class="active">Services</a></li>
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
                <h1>Our <span class="text-gradient">Services</span></h1>
                <p>Comprehensive logistics solutions tailored to your needs.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-truck"></i></div>
                    <h3>Full Truckload (FTL)</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Dedicated trucks for large shipments. Direct
                        transport from pickup to delivery for faster service.</p>
                </div>
                <!-- ... existing content ... -->
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>Less than Truckload (LTL)</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Cost-effective solutions for smaller loads.
                        Pay only for the space you use.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                    <h3>Refrigerated Transport</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Temperature-controlled trucks for perishable
                        goods like food and pharmaceuticals.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <h3>Last Mile Delivery</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Efficient delivery to the final destination,
                        ensuring customer satisfaction.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-warehouse"></i></div>
                    <h3>Warehousing</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Secure storage solutions for your goods
                        before they are shipped.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-globe"></i></div>
                    <h3>Cross-border Logistics</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Seamless transport across borders with
                        handling of all customs documentation.</p>
                </div>
            </div>

            <!-- Fleet Section -->
            <div style="margin-top: 5rem; text-align: center;">
                <h2 style="margin-bottom: 1rem;">Our Modern <span class="text-gradient">Fleet</span></h2>
                <p style="color: var(--text-muted); margin-bottom: 3rem;">Specialized vehicles for every heavy-lift
                    requirement.</p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <!-- Truck 1 -->
                    <!-- Truck 1 -->
                    <div class="glass-card"
                        style="padding: 0; overflow: hidden; transition: transform 0.3s; height: 100%;">
                        <div style="height: 220px; position: relative;">
                            <img src="/assets/images/tata_signa_5530.jpg" alt="Tata Signa 5530.S"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div
                                style="position: absolute; bottom: 10px; right: 10px; background: var(--primary); color: white; padding: 2px 10px; border-radius: 4px; font-size: 0.7rem; font-weight: bold;">
                                AVAILABLE</div>
                        </div>
                        <div style="padding: 2rem; text-align: left;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <h3 style="margin: 0; font-size: 1.25rem;">Tata Signa 5530.S</h3>
                                <span style="font-size: 0.8rem; color: var(--text-muted);">6x4 Heavy Duty</span>
                            </div>
                            <p
                                style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem; height: 3rem;">
                                Powerful Cummins 6.7L engine for heavy ODC and industrial loads.</p>
                            <div
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; border-top: 1px solid var(--glass-border); padding-top: 1rem;">
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">Max
                                        Load</span>
                                    <span style="font-weight: 600;">55 Tons</span>
                                </div>
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">Power</span>
                                    <span style="font-weight: 600;">300 HP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Truck 2 -->
                    <div class="glass-card"
                        style="padding: 0; overflow: hidden; transition: transform 0.3s; height: 100%;">
                        <div style="height: 220px; position: relative;">
                            <img src="/assets/images/ashok_leyland_5525.jpg" alt="Ashok Leyland 5525"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div
                                style="position: absolute; bottom: 10px; right: 10px; background: #3b82f6; color: white; padding: 2px 10px; border-radius: 4px; font-size: 0.7rem; font-weight: bold;">
                                SPECIALIZED</div>
                        </div>
                        <div style="padding: 2rem; text-align: left;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <h3 style="margin: 0; font-size: 1.25rem;">Ashok Leyland 5525</h3>
                                <span style="font-size: 0.8rem; color: var(--text-muted);">Modular AVTR</span>
                            </div>
                            <p
                                style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem; height: 3rem;">
                                Reliable iGen6 engine technology for efficient long-haul transport.</p>
                            <div
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; border-top: 1px solid var(--glass-border); padding-top: 1rem;">
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">GVW</span>
                                    <span style="font-weight: 600;">55 Tons</span>
                                </div>
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">Torque</span>
                                    <span style="font-weight: 600;">900 Nm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Truck 3 -->
                    <div class="glass-card"
                        style="padding: 0; overflow: hidden; transition: transform 0.3s; height: 100%;">
                        <div style="height: 220px; position: relative;">
                            <img src="/assets/images/tata_signa_4025.jpg?v=2" alt="Tata Signa 4025.S"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div
                                style="position: absolute; bottom: 10px; right: 10px; background: #ef4444; color: white; padding: 2px 10px; border-radius: 4px; font-size: 0.7rem; font-weight: bold;">
                                HEAVY ODC</div>
                        </div>
                        <div style="padding: 2rem; text-align: left;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <h3 style="margin: 0; font-size: 1.25rem;">Tata Signa 4025.S</h3>
                                <span style="font-size: 0.8rem; color: var(--text-muted);">Heavy Duty 4x2</span>
                            </div>
                            <p
                                style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem; height: 3rem;">
                                Robust Cummins ISBe 6.7L engine mainly used for heavy cargo containers.</p>
                            <div
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; border-top: 1px solid var(--glass-border); padding-top: 1rem;">
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">GCW</span>
                                    <span style="font-weight: 600;">39.5 Tons</span>
                                </div>
                                <div>
                                    <span
                                        style="display: block; font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">Power</span>
                                    <span style="font-weight: 600;">250 HP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Owner Section -->
            <div style="margin-top: 6rem; text-align: center; margin-bottom: 2rem;">
                <h2 style="margin-bottom: 2rem;">Company <span class="text-gradient">Leadership</span></h2>
                <div class="glass-card"
                    style="max-width: 600px; margin: 0 auto; padding: 3rem; border: 1px solid rgba(234, 179, 8, 0.3); background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(234, 179, 8, 0.05) 100%);">
                    <div
                        style="width: 150px; height: 150px; background: #1e293b; border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(234, 179, 8, 0.4); border: 2px solid #eab308;">
                        <i class="fa-solid fa-user-tie" style="font-size: 5rem; color: #eab308;"></i>
                    </div>
                    <h3 style="font-size: 2.2rem; margin-bottom: 0.5rem; color: #ffffff;">Harun Shaikh</h3>
                    <p
                        style="color: #eab308; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 1.5rem;">
                        Owner & Founder</p>
                    <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.6;">
                        "Driving excellence in heavy logistics since inception. Committed to delivering safety,
                        reliability, and precision in every kilometer we travel."
                    </p>
                </div>
            </div>

            <!-- Drivers Section -->
            <div style="margin-top: 5rem; text-align: center;">
                <h2 style="margin-bottom: 1rem;">Licensed <span class="text-gradient">Experts</span></h2>
                <p style="color: var(--text-muted); margin-bottom: 3rem;">Our drivers are the heartbeat of our precision
                    logistics.</p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                    <!-- Driver 1 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid var(--primary);">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(249, 115, 22, 0.2);">
                            <i class="fa-solid fa-user-tie" style="font-size: 3rem; color: var(--primary);"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Guljar Shaikh</h4>
                        <p
                            style="color: var(--primary); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            Senior Captain</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">15 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    5.0</span>
                            </div>
                        </div>
                    </div>
                    <!-- Driver 2 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid #3b82f6;">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(59, 130, 246, 0.2);">
                            <i class="fa-solid fa-user-shield" style="font-size: 3rem; color: #3b82f6;"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Vinod Irkar</h4>
                        <p
                            style="color: #3b82f6; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            Safety Specialist</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">8 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    4.9</span>
                            </div>
                        </div>
                    </div>
                    <!-- Driver 3 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid #ef4444;">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(239, 68, 68, 0.2);">
                            <i class="fa-solid fa-user-gear" style="font-size: 3rem; color: #ef4444;"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Baban Malme</h4>
                        <p
                            style="color: #ef4444; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            Heavy Lift Expert</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">9 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    4.8</span>
                            </div>
                        </div>
                    </div>
                    <!-- Driver 4 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid #22c55e;">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(34, 197, 94, 0.2);">
                            <i class="fa-solid fa-route" style="font-size: 3rem; color: #22c55e;"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Hasan Shaikh</h4>
                        <p
                            style="color: #22c55e; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            Long Haul Expert</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">7 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    4.9</span>
                            </div>
                        </div>
                    </div>
                    <!-- Driver 5 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid #eab308;">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(234, 179, 8, 0.2);">
                            <i class="fa-solid fa-truck-fast" style="font-size: 3rem; color: #eab308;"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Jainu Shaikh</h4>
                        <p
                            style="color: #eab308; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            ODC Specialist</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">5 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    4.8</span>
                            </div>
                        </div>
                    </div>
                    <!-- Driver 6 -->
                    <div class="glass-card"
                        style="padding: 2rem; text-align: center; border-bottom: 4px solid #a855f7;">
                        <div
                            style="width: 100px; height: 100px; background: #1e293b; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(168, 85, 247, 0.2);">
                            <i class="fa-solid fa-user-check" style="font-size: 3rem; color: #a855f7;"></i>
                        </div>
                        <h4 style="margin-bottom: 0.25rem;">Imran Shaikh</h4>
                        <p
                            style="color: #a855f7; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            Transport Expert</p>
                        <div
                            style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-around;">
                            <div>
                                <span
                                    style="display: block; font-size: 0.7rem; color: var(--text-muted);">Experience</span>
                                <span style="font-weight: 600;">10 Yrs</span>
                            </div>
                            <div>
                                <span style="display: block; font-size: 0.7rem; color: var(--text-muted);">Rating</span>
                                <span style="font-weight: 600; color: #fbbf24;"><i class="fa-solid fa-star"></i>
                                    5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2026 Star Transport Company. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
