// mobile menu open/close
const btnHamburger = document.querySelector('.hamburger');
const menuOpen = document.querySelector('nav');

btnHamburger.addEventListener('click', function(){
	this.classList.toggle('open-menu');
	menuOpen.classList.toggle('open-menu');
})
    

// animation for menu items
const menuItems = document.querySelectorAll('.menu-item>a');
let timeAnimationDelay = 0;

menuItems.forEach(menuItem => {
    menuItem.style.animationDelay = `${timeAnimationDelay}s`;
    timeAnimationDelay += 0.3
});

// back to the top
const btnGoTop = document.querySelector('.scroll-top');

window.addEventListener('scroll', () => {
   window.scrollY>30 ? btnGoTop.style.display = "block" : btnGoTop.style.display = "none";
})

btnGoTop.addEventListener('click', () => {
    document.documentElement.scrollTop = 0;
})
