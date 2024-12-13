// Dark mode functionality
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = themeToggle.querySelector('i');
    
    // Check for saved theme preference or system preference
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const savedTheme = localStorage.getItem('theme');
    
    // Set initial theme
    if (savedTheme) {
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
        updateIcon(savedTheme === 'dark');
    } else if (prefersDark) {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
        updateIcon(true);
    }

    // Theme toggle click handler
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        document.documentElement.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateIcon(newTheme === 'dark');
    });

    // Update icon based on theme
    function updateIcon(isDark) {
        themeIcon.className = isDark ? 'bi bi-moon-fill' : 'bi bi-sun-fill';
    }

    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!localStorage.getItem('theme')) {
            const newTheme = e.matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            updateIcon(e.matches);
        }
    });
});