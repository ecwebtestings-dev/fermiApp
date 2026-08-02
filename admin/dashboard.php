<?php
session_start();

$root = realpath(__DIR__ . '/..');
require_once $root . '/auth/auth.php';

/* ===============================
   AUTH CHECK
================================= */

if (!isset($_SESSION['id']) || ($_SESSION['role'] ?? '') !== 'admin') {
    header("Location: /FERMI/public/login.html");
    exit;
}

/*
   SESSION TIMEOUT (10 mins)
*/
$timeout = 600;

if (!isset($_SESSION['time']) || (time() - $_SESSION['time']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: /FERMI/public/login.html");
    exit;
} else {
    $_SESSION['time'] = time();
}

/* ===============================
   SAFE USER DATA (FIXED)
================================= */

$username = $_SESSION['username'] ?? 'Admin';
$email = $_SESSION['email'] ?? 'No email';
$userInitial = strtoupper(substr($username, 0, 1));

/* ===============================
   PROFILE IMAGE
================================= */

$defaultImage = "/FERMI/admin/Images/cool.jpg";

$image = !empty($_SESSION['image'])
    ? "/FERMI/admin/" . ltrim($_SESSION['image'], '/')
    : $defaultImage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/5.3.5/apexcharts.min.js"></script>
    <link rel="stylesheet" href="AdminDashboardLightMode.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div id="loader"></div>
    <div class="grid-container">
        <!--HEADER-->
        <header class="header">
            <div class="menu-icon" onclick="openSideBar()">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-symbols-outlined">search</span>
            </div>
            <div class="header-right">
               <span class="material-symbols-outlined" id="sunIcon" onclick="toggleTheme()">light_mode</span>
                <span class="material-symbols-outlined" id="moonIcon" onclick="toggleTheme()">moon_stars</span>
                <span class="material-symbols-outlined">notifications_active</span>
                <span class="material-symbols-outlined">mail</span>
                <span class="material-symbols-outlined avatar" id="avatar">account_circle</span>
                
                <!-- PROFILE -->
                <div class="profile" id="profileToggle">
                    <!-- DROPDOWN -->
                    <div class="dropdown" id="dropdownMenu">
                        <div class="dropdown-header">
                            <h4 id="username"><?php echo htmlspecialchars($username); ?></h4>
                            <p id="email"><?php echo htmlspecialchars($email); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--SIDEBAR-->
        <div class="overlay" onclick="closeSideBar()"></div>
        <aside id="sideBar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-symbols-outlined">electric_bolt</span>FERMI
                </div>
                <span class="material-symbols-outlined" onclick="closeSideBar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item" data-tab="dashboard"   ><span class="material-symbols-outlined">dashboard</span>Dashboard</li>
                <li class="sidebar-list-item" data-tab="users"       ><span class="material-symbols-outlined">groups</span>Users</li>
                <li class="sidebar-list-item" data-tab="appointments"><span class="material-symbols-outlined">data_table</span>Appointments</li>
                <li class="sidebar-list-item" data-tab="logs"        ><span class="material-symbols-outlined">work_history</span>Audit Logs</li>
                <li class="sidebar-list-item"><span class="material-symbols-outlined">settings</span>Settings</li>
                <li class="sidebar-list-item"><span class="material-symbols-outlined">exit_to_app</span><a href="/FERMI/auth/logout.php">Log out</a></li>
            </ul>

            <div class="adimiAccountProfile">
                <span class="usernameicon"><?php echo htmlspecialchars($userInitial); ?></span>
                <div class="dropdown-header">
                    <h4 id="username"><?php echo htmlspecialchars($username); ?></h4>
                    <p id="email">Administrator</p>
                </div>
            </div>
        </aside>

        <!--MAIN CONTAINER-->
        <main class="main-container">
            <div class="maIn-title">
                <h2>DASHBOARD</h2>
            </div>

            <div class="main-cards">
                <div class="card">
                    <div class="card-inner">
                        <p>Users</p>
                        <span class="material-symbols-outlined">inventory</span>
                    </div>
                    <h2 id="activeUsers">0</h2>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <p>Pending Appointments</p>
                        <span class="material-symbols-outlined">category</span>
                    </div>
                    <h2 id="completedAppointments">0</h2>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <p>Completed Appointments</p>
                        <span class="material-symbols-outlined">notifications_active</span>
                    </div>
                    <h2 id="pendingAppointments">0</h2>
                </div>
            </div>
            

            <!--CHARTS-->
            <div class="charts">
                <div class="chart-cards">
                    <p class="chart-title">Appointments</p>
                    <div id="pieChart"></div>
                </div>
                
                <div class="chart-cards">
                    <p class="chart-title">Monthly Appointments</p>
                    <div id="AreaChart"></div>
                </div>
            </div>

            <!--TAB CONTENTS-->
            
            <div id="users"         class="tab"><div id="usersTable"></div></div>
            <div id="appointments"  class="tab"><div id="appointmentsTable"></div></div>
            <div id="logs"          class="tab"><div id="logsTable"></div></div>
            <div id="settings"      class="tab"><div id="adminSettings"></div></div>
            <div id="logout"        class="tab"><a href="/FERMI/auth/logout.php"id="signOut">logout</a></div>


        </main>
    </div>


    <!--chart library-->
    <script src="AdminDashboard.js"></script>
</body>
</html>