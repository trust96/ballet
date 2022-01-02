import getRandomColor from "../utils/randomColors";

export default function () {
    const menuItems = document.querySelectorAll(".menu__item");
    const menu = document.querySelectorAll(".menu");
    const nav = document.querySelector(".m-nav");
    const navItems = document.querySelectorAll(".nav__item");
    const slider = document.querySelector(".nav__slider");
    const mobileNavItems = document.querySelectorAll(".m-nav__item");

    // Menu
    menu.forEach((m) => {
        m.addEventListener("click", () => {
            menuItems[0].classList.toggle("menu--top");
            menuItems[1].classList.toggle("menu--center");
            menuItems[2].classList.toggle("menu--bottom");
            menuItems[3].classList.toggle("menu--top");
            menuItems[4].classList.toggle("menu--center");
            menuItems[5].classList.toggle("menu--bottom");
            nav.classList.toggle("active");
        });
    });
    // slider
    slider.style.width = navItems[0].clientWidth + "px";
    slider.style.left = navItems[0].offsetLeft + "px";
    slider.style.backgroundColor = getRandomColor();
    navItems.forEach((navItem) => {
        navItem.addEventListener("click", () => {
            slider.style.width = navItem.clientWidth + "px";
            slider.style.left = navItem.offsetLeft + "px";
            slider.style.backgroundColor = getRandomColor();
        });
    });
    // Nav
    mobileNavItems.forEach((navItem) => {
        navItem.addEventListener("click", () => {
            nav.classList.remove("active");
        });
    });
}
