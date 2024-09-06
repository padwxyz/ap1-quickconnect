document.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-[#0045A4]', 'shadow-lg');
        navbar.classList.remove('bg-transparent');
    } else {
        navbar.classList.remove('bg-[#0045A4]', 'shadow-lg');
        navbar.classList.add('bg-transparent');
    }
});
