<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FleetFlow</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 32px 16px;
            background:
                radial-gradient(circle at top left, rgba(37, 99, 235, 0.22), transparent 30%),
                radial-gradient(circle at bottom right, rgba(13, 148, 136, 0.18), transparent 28%),
                linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 41, 59, 0.88) 42%, rgba(30, 58, 138, 0.88) 100%),
                url('https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1400&q=80') no-repeat center center/cover;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(120deg, rgba(255, 255, 255, 0.06), transparent 35%),
                linear-gradient(300deg, rgba(45, 212, 191, 0.08), transparent 38%);
            pointer-events: none;
        }

        .login-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 1040px;
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            overflow: hidden;
            padding: 0;
        }

        .login-showcase {
            position: relative;
            padding: 48px;
            color: #eff6ff;
            background:
                linear-gradient(180deg, rgba(15, 23, 42, 0.2), rgba(15, 23, 42, 0.58)),
                url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1400&q=80') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100%;
        }

        .login-showcase::after {
            content: "";
            position: absolute;
            right: -60px;
            bottom: -60px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.16), transparent 68%);
        }

        .role-badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.16);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.16);
            font-size: 0.76rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .fleet-gallery {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 14px;
            margin-top: 20px;
        }

        .fleet-main-photo,
        .fleet-side-stack img {
            width: 100%;
            object-fit: cover;
            border-radius: 22px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            box-shadow: 0 22px 40px rgba(15, 23, 42, 0.2);
        }

        .fleet-main-photo {
            height: 278px;
        }

        .fleet-side-stack {
            display: grid;
            gap: 14px;
        }

        .fleet-side-stack img {
            height: 86px;
        }

        .role-chip-row {
            position: relative;
            z-index: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 16px;
            margin-bottom: 22px;
        }

        .role-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #ffffff;
            font-size: 0.82rem;
            font-weight: 700;
        }

        .login-panel {
            padding: 44px 38px;
            background: rgba(255, 255, 255, 0.94);
        }

        [data-theme="dark"] .login-panel {
            background: rgba(15, 23, 42, 0.94);
        }

        .login-header {
            margin-bottom: 28px;
        }

        .login-header h2 {
            margin: 0;
            font-size: 2rem;
            color: var(--text-color);
        }

        .login-header p {
            margin: 10px 0 0;
            color: var(--text-muted);
        }

        .login-meta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
            color: #bfdbfe;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-size: 0.75rem;
        }

        .login-actions {
            display: grid;
            gap: 14px;
            margin-top: 18px;
        }

        .login-actions .btn-3d {
            width: 100%;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 46px;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            color: var(--text-muted);
            font-weight: 600;
        }

        .back-link:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .login-topbar {
            position: absolute;
            top: 24px;
            right: 24px;
            z-index: 2;
        }

        @media (max-width: 900px) {
            .login-card {
                grid-template-columns: 1fr;
            }

            .login-showcase {
                padding: 36px 28px 28px;
            }

            .fleet-gallery {
                grid-template-columns: 1fr;
            }

            .login-panel {
                padding: 32px 24px;
            }
        }
    </style>
</head>
<body>

    <div class="login-topbar">
        <button class="theme-btn" id="theme-toggle" aria-label="Toggle theme">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <div class="login-card">
        <section class="login-showcase">
            <div class="login-meta">FleetFlow Access</div>
            <div id="role-display" style="position: relative; z-index: 1;"></div>
            <div class="role-chip-row">
                <span class="role-chip"><i class="fas fa-user-shield"></i> Admin</span>
                <span class="role-chip"><i class="fas fa-user-tie"></i> Manager</span>
                <span class="role-chip"><i class="fas fa-id-card"></i> Driver</span>
            </div>

            <div class="fleet-gallery">
                <img class="fleet-main-photo" src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1200&q=80" alt="Truck fleet photo">
                <div class="fleet-side-stack">
                    <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=900&q=80" alt="Bus photo">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=900&q=80" alt="Car photo">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&w=900&q=80" alt="Van photo">
                </div>
            </div>
        </section>

        <section class="login-panel">
            <div class="login-header">
                <h2>Sign in</h2>
                <p>Enter your account details to open your dashboard.</p>
            </div>

            <form action="auth.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-input" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password" required>
                </div>

                <div class="login-actions">
                    <button type="submit" class="btn-3d">Sign In</button>
                    <a href="index.php" class="back-link">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to Home</span>
                    </a>
                </div>
            </form>
        </section>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const role = urlParams.get('role');

        if (role) {
            const roleDisplay = document.getElementById('role-display');
            roleDisplay.innerHTML = `<span class="role-badge">${role} Portal</span>`;
        }
    </script>
    <script src="assets/js/theme.js"></script>
</body>
</html>
