function togglemenu(){
    const navbar = document.querySelector('.navbar');
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
 navbar.classList.toggle('show-nav');
    })
}
togglemenu();

function link(){
    const navbar = document.querySelector('.navbar');
    const navbar__link = document.querySelector('.navbar__links');
    navbar__link.addEventListener('click', () => {
 navbar.classList.toggle('show-nav');
    })
}
link();