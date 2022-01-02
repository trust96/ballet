export default function () {
    const menuItems = document.querySelectorAll(".menu__item");
    const menu = document.querySelectorAll(".menu");
    const nav = document.querySelector(".m-nav");
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
}
