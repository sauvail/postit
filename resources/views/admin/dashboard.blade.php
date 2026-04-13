<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - PostIt</title>
    <link rel="stylesheet" href="/styles.css">
    <style>
        .admin-container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .admin-nav {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .admin-nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }
        .admin-nav a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
        }
        .admin-nav a:hover {
            color: #667eea;
        }
        .admin-content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f5f5f5;
            font-weight: 600;
        }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.875rem;
        }
        .badge-admin {
            background-color: #667eea;
            color: white;
        }
        .badge-user {
            background-color: #f5f5f5;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="/"><h1>PostIt Admin</h1></a>
                </div>
                <div class="nav-links">
                    <a href="/" class="btn-login">Back to Site</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="admin-container">
            <div class="admin-header">
                <h2>Dashboard</h2>
            </div>

            <nav class="admin-nav">
                <ul>
                    <li><a href="/admin">Dashboard</a></li>
                    <li><a href="/admin/users">Users</a></li>
                    <li><a href="/admin/stats">Statistics</a></li>
                    <li><a href="/admin/exercises">Exercises</a></li>
                </ul>
            </nav>

            <div class="admin-content">
                <h3>Welcome to PostIt Admin Panel</h3>
                <p>Select a section from the navigation above to manage your strength sport coaching platform.</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 PostIt. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
