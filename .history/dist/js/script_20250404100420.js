//Navbar fixed
window.onscroll = function() {
    const header= document.querySelector('header');
    const fixedNav = 
}

//Hamburger
const hamburger = document.querySelector('#hamburger');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
});