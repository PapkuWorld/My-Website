const scrollToTopButton = document.getElementById('scrollToTop');

// Show scroll-to-top button when scrolling down
window.onscroll = function() {
    if (window.scrollY > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
};

// Scroll to top when button is clicked
scrollToTopButton.addEventListener('click', function() {
    // Smooth scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});