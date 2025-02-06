window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('nav ul li a');

    sections.forEach((section, index) => {
        let top = section.offsetTop;
        let height = section.offsetHeight;

        if (window.scrollY >= top - height / 2 && window.scrollY < top + height - height / 2) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            navLinks[index].classList.add('active');
        }
    });
});
