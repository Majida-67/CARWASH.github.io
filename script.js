
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
    alert('Logged out Succefully ');
    window.location.href = 'Registerandlogin.php';
});



// services section
function loadMore() {
    // Show the hidden cards
    const extraCards = document.querySelectorAll('.extra');
    extraCards.forEach(card => {
        card.style.display = 'block';
    });

    // Toggle button visibility
    document.getElementById('readMoreBtn').style.display = 'none';
    document.getElementById('readLessBtn').style.display = 'inline-block';
}

function loadLess() {
    // Hide the extra cards
    const extraCards = document.querySelectorAll('.extra');
    extraCards.forEach(card => {
        card.style.display = 'none';
    });

    // Toggle button visibility
    document.getElementById('readMoreBtn').style.display = 'inline-block';
    document.getElementById('readLessBtn').style.display = 'none';
}