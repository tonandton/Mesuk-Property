// TOGGLE BUTTON
const navMenu = document.getElementById("nav-menu");
const navLink = document.querySelectorAll(".nav-link");
const hamburger = document.getElementById("hamburger");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("left-[0]");
    hamburger.classList.toggle("ri-close-large-fill");
});

navLink.forEach((link) => {
    link.addEventListener("click", () => {
        navMenu.classList.toggle("left-[0]");
        hamburger.classList.toggle("ri-close-large-fill");
    });
});

// Scroll up
const scrollUp = () => {
    const scrollUpBtn = document.getElementById("scroll-up");

    if (window.scrollY >= 250) {
        scrollUpBtn.classList.remove("-bottom-1/2");
        scrollUpBtn.classList.add("bottom-4");
    } else {
        scrollUpBtn.classList.add("-bottom-1/2");
        scrollUpBtn.classList.remove("bottom-4");
    }
};

window.addEventListener("scroll", scrollUp);

const scrollHeader = () => {
    const header = document.getElementById("navbar");

    if (window.scrollY >= 50) {
        header.classList.add("border-b", "border-green-500");
    } else {
        header.classList.remove("border-b", "border-green-500");
    }
};

window.addEventListener("scroll", scrollHeader);

// SWIPER
const swiper = new Swiper(".swiper", {
    speed: 400,
    spaceBetween: 30,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    grabCursor: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        868: {
            slidesPerView: 2,
        },
        1180: {
            slidesPerView: 3,
        },
    },
});

const activeLink = () => {
    const sections = document.querySelectorAll("section");
    const navLink = document.querySelectorAll(".nav-link");

    let current = "home";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;

        if (window.scrollY >= sectionTop - 60) {
            current = section.getAttribute("id");
        }
    });

    navLink.forEach((item) => {
        item.classList.remove("active");

        if (item.href.includes(current)) {
            item.classList.add("active");
        }
    });
};

window.addEventListener("scroll", activeLink);
