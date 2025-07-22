<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF69B4;
            --secondary-color: #FFB6C1;
            --accent-color: #FF1493;
            --text-color: #333;
            --light-pink: #FFF0F5;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 250px 1fr;
        }

        .sidebar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.5;
            z-index: 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .nav-item {
            margin-bottom: 1rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            display: block;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .main-content {
            padding: 2rem;
        }

        .welcome-section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .welcome-text {
            font-size: 1.1rem;
            color: var(--text-color);
            margin-bottom: 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-title {
            font-size: 1.1rem;
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">Portfolio Admin</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Education</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Experience</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Settings</a>
                </li>
            </ul>
        </aside>

        <main class="main-content">
            <section class="welcome-section">
                <h1 class="welcome-title">Welcome Back!</h1>
                <p class="welcome-text">Welcome to your Admin Panel.</p>
            </section>

            <div class="stats-grid">
                <div class="stat-card">
                    <h3 class="stat-title">Total Projects</h3>
                    <div class="stat-value">12</div>
                </div>
                <div class="stat-card">
                    <h3 class="stat-title">Skills</h3>
                    <div class="stat-value">24</div>
                </div>
                <div class="stat-card">
                    <h3 class="stat-title">Experience</h3>
                    <div class="stat-value">5</div>
                </div>
                <div class="stat-card">
                    <h3 class="stat-title">Education</h3>
                    <div class="stat-value">3</div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>