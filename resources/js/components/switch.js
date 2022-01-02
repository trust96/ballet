export default function () {
    const button = document.querySelector(".switch");
    const switchWrapper = document.querySelector(".switch__wrapper");
    const ball = document.querySelector(".switch__item");

    button.addEventListener("click", () => {
        ball.classList.toggle("active");
        switchWrapper.classList.toggle("active");
    });
}
