export default function (){
const menuItems = document.querySelectorAll('.menu__item');
const menu = document.querySelector('.menu');
menu.addEventListener('click', ()=>{
menuItems[0].classList.toggle('menu--top');
menuItems[1].classList.toggle('menu--center');
menuItems[2].classList.toggle('menu--bottom')
})
}


