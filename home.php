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
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <p>this is header</p>
    </header>


    <!-- Navbar -->
    <div class="navbar">
        <!-- Logo -->
        <div class="logo">
        <li> <a href="index1.php">CARWASH</a> </li>  
        </div>

        <!-- Menu (Links) -->
        <ul class="menu">
            <li><a href="home.php" class="nav-link">Home</a></li>
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

    
    <section class="home">
    <div class="home-content">
        <h1>Welcome to Car Wash</h1>
        <p>Premium car wash services at your doorstep</p>
        <a href="booking.php" class="btn">Book Now</a>
    </div>
</section>


    <!-- Admin Menu (Sidebar for Admin) -->
    <div class="admin-menu" id="admin-menu">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
        <button onclick="toggleAdminMenu()">X</button>
    </div>



    <!-- services section  -->
    <h1>Our Services</h1>
    <div class="container" id="serviceContainer">
        <!-- Initial 4 Service Cards -->
        <div class="card">
            <img src="https://media.ed.edmunds-media.com/non-make/howto/howto_1129112_1600.jpg" alt="Exterior Wash and Wax">
            <div class="content">
                <h3>Exterior Wash and Wax</h3>
                <p>This service focuses on cleaning the car's exterior, removing dirt, dust, and grime. After washing, a layer of wax is applied to enhance shine and protect the paint from environmental elements.</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="https://surfnshine.com/wp-content/uploads/2023/10/interior-detailing-1024x576.jpg" alt="Interior Cleaning">
            <div class="content">
                <h3>Interior Cleaning</h3>
                <p>Interior cleaning ensures the inside of the car is spotless. It includes vacuuming carpets and seats, wiping and polishing the dashboard, and deep-cleaning the upholstery for a fresh look and feel.</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="https://autoniche.ca/wp-content/uploads/2021/06/AutoNiche-Engine-Cleaning-2048x1367.jpg" alt="Engine Cleaning">
            <div class="content">
                <h3>Engine Cleaning</h3>
                <p>Engine cleaning involves removing oil stains, grease, and dirt from the engine compartment. It helps improve engine efficiency and gives it a clean, well-maintained appearance.</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="https://i.ytimg.com/vi/3bh2Ds4GDME/maxresdefault.jpg" alt="Ceramic Coating">
            <div class="content">
                <h3>Ceramic Coating</h3>
                <p>Ceramic coating adds a protective layer to the car's paint, shielding it from scratches, UV rays, and fading. It enhances the car's gloss and provides long-term protection.</p>
                <a href="#">Read More</a>
            </div>
        </div>

        <!-- Additional 2 Cards (Initially Hidden) -->
        <div class="card extra" style="display: none;">
            <img src="https://cdn.australia247.info/assets/uploads/024453248395782c70919d5b71120900_-queensland-gympie-regional-rainbow-beach-4wd-underbody-complete-car-washhtml.jpg" alt="Underbody Wash">
            <div class="content">
                <h3>Underbody Wash</h3>
                <p>This service cleans the underside of the car, removing dirt, salt, and road grime. It helps prevent rust and corrosion, especially in areas with harsh weather conditions.</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card extra" style="display: none;">
            <img src="https://www.soft99.co.jp/en/howto/sensya-navi/images/lesson6/img_02.jpg" alt="Tire and Wheel Cleaning">
            <div class="content">
                <h3>Tire and Wheel Cleaning</h3>
                <p>Tire and wheel cleaning removes built-up brake dust and grime, restoring the shine of your wheels and ensuring they remain in excellent condition.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    <div class="load-more">
        <button id="readMoreBtn" onclick="loadMore()">Read More</button>
        <button id="readLessBtn" onclick="loadLess()" style="display: none;">Read Less</button>
    </div>

   <script src="script.js"></script>

</body>

</html>