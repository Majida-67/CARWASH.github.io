<?php
session_start();

// Logout functionality
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    // header("Location: login.php");
    header("Location: NEW3.php");

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Navbar with Admin Menu</title>
    <!-- FontAwesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
        }

        body {

            background-color: #fff;
            color: var(--text-color, #000000);
            transition: background-color 0.3s ease, color 0.3s ease;
        }


        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            color: #777;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.8em;
            font-weight: bold;
            color: #000;
            display: flex;
            align-items: center;
        }

        .navbar .logo i {
            margin-right: 8px;
        }

        .navbar .menu {
            display: flex;
            gap: 23px;
        }

        .navbar .menu li {
            list-style: none;
            position: relative;
        }


        .navbar .menu li a {
            color: #000;
            text-decoration: none;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 0.5rem 2.5%;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Hover effect for links */
        .navbar .menu li a:hover {

            text-decoration: underline;
            color: #777;
        }

        /* Active link effect */
        .navbar .menu li a.active {
            background-color: #e67e22;
        }

        /* Logout Button */
        .logout-btn {

            color: #000;
            text-decoration: none;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 0.5rem 2.5%;
            /* border-radius: 5px; */
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Menu Icon (Hamburger) */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 30px;
            height: 3px;
            background-color: white;
            transition: transform 0.3s ease;
        }

        .hamburger.active div:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.active div:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active div:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            right: -250px;
            height: 100%;
            width: 250px;
            background-color: var(--sidebar-bg-color, #34495e);
            color: white;
            padding: 20px;
            transition: 0.3s ease-in-out;
        }

        .sidebar.active {
            right: 0;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }




        /* #0a1230e0   */

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        /* Admin Menu */
        .admin-menu {
            position: fixed;
            top: 120px;
            left: -250px;
            height: 100%;
            width: 250px;
            background-color: black;
            color: black;
            padding: 20px;
            transition: 0.3s ease-in-out;
        }

        .admin-menu.active {
            left: 0;
        }

        .admin-menu ul {
            list-style: none;
        }

        .admin-menu ul li {
            margin: 15px 0;
        }

        .admin-menu ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }

        .admin-menu ul li a:hover {
            background-color: #777;
        }

        .admin-menu button {
            /* font-size: 1.7em; */
            background-color: transparent;
            border: 2px dotted white;
            color: white;
            font-size: 1.3em;
            padding: 5px 11px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
            transition: transform 0.3s ease;
        }

        .admin-menu button:hover {
            transform: scale(1.1);
        }


        /* Dropdown Styles */
        .navbar .dropdown {
            position: relative;
        }

        .navbar .dropdown .dropdown-menu {
            display: none;
            position: absolute;
            top: 105%;
            left: 10px;
            background-color: #fff;
            padding: 10px 10px;
            list-style: none;
            margin: 0;
            border-radius: 5px;
            min-width: 250px;
        }

        .navbar .dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar .dropdown-menu li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            font-size: 1em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar .dropdown-menu li a:hover {
            background-color: #777;
        }

        .navbar .dropdown .fa-chevron-down {
            margin-left: 5px;
        }

        .admin-icon {
            font-size: 1.2em;
            color:#000;

        }

        header {

            font-size: 1.5rem;
            background-color: #000000;
        }
        
.logo li a {
    text-decoration: none;
    color: #000;
}

.logo li {
    list-style: none;

}
    </style>
</head>

<body>
    <header>
        <p>this is header</p>
    </header>


    <!-- Navbar -->
    <div class="navbar">
        <!-- Logo -->
        <div class="logo">
            CARWASH
        </div>

        <!-- Menu (Links) -->
        <ul class="menu">
            <li><a href="HomeService.php" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Services</a></li>
            <li><a href="#" class="nav-link">Booking</a></li>
            <li class="dropdown">
                <a href="#" class="nav-link">MyAccount </a>
            </li>

            <li><a href="#" class="nav-link">CustomersSupport</a></li>
            <li><a href="#" class="nav-link">Feedback</a></li>
            <!-- Logout Button -->
            <li><button class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</button></li>
        </ul>

        <!-- Admin Icon (Menu for Admin) -->
        <div class="admin-icon" onclick="toggleAdminMenu()">
            <i class="fas fa-user-shield"></i>
        </div>


        <!-- Hamburger Icon (for mobile) -->
        <div class="hamburger" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Sidebar (Menu for mobile) -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Tutorial</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <!-- Admin Menu (Sidebar for Admin) -->
    <div class="admin-menu" id="admin-menu">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
        <button onclick="toggleAdminMenu()">X</button>
    </div>

    <script>
        // Admin Menu toggle functionality
        const adminIcon = document.querySelector('.admin-icon');
        const adminMenu = document.getElementById('admin-menu');

        function toggleAdminMenu() {
            adminMenu.classList.toggle('active');
        }

        // Sidebar toggle functionality for mobile
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.querySelector('.hamburger');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        // Logout Button functionality

        const logoutButton = document.querySelector('.logout-btn');
        logoutButton.addEventListener('click', function() {
            alert('Logged out');
            window.location.href = 'NEW3.php';
        });
    </script>
</body>

</html>