// SELECT ELEMENTS
const courseNav = document.querySelector('.course_nav');
const menuItems = document.querySelectorAll('.course_nav ul li a');
const sections = document.querySelectorAll('section');

const HEADER_HEIGHT = 75;


// 👉 OFFSET FUNCTION
function getOffset() {
    return HEADER_HEIGHT + courseNav.offsetHeight;
}


// ✅ CLICK SCROLL
menuItems.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();

        const id = item.getAttribute('data-scrollspy');
        const section = document.getElementById(id);

        if (!section) return;

        const y = section.getBoundingClientRect().top + window.pageYOffset - getOffset();

        window.scrollTo({
            top: y,
            behavior: 'smooth'
        });
    });
});


// ✅ ACTIVE NAV (BEST METHOD - IntersectionObserver)
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const id = entry.target.id;

            menuItems.forEach(item => {
                item.parentElement.classList.remove('nav__act');

                if (item.getAttribute('data-scrollspy') === id) {
                    item.parentElement.classList.add('nav__act');
                }
            });
        }
    });
}, {
    root: null,
    rootMargin: `-${HEADER_HEIGHT + courseNav.offsetHeight}px 0px -60% 0px`,
    threshold: 0.3
});


// OBSERVE SECTIONS
sections.forEach(section => {
    observer.observe(section);
});



const dropdown = document.querySelector('.course_dropdown');
const courseSelectNav = document.querySelector('.course_nav');

function getOffset() {
    return 75 + courseSelectNav.offsetHeight;
}

dropdown.addEventListener('change', () => {
    const section = document.getElementById(dropdown.value);

    if (!section) return;

    const y = section.getBoundingClientRect().top + window.pageYOffset - getOffset();

    window.scrollTo({
        top: y,
        behavior: 'smooth'
    });
});