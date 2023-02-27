const hamb = document.querySelector('#hamb');
const navMenu = document.querySelector('#nav-menu');

hamb.addEventListener('click', function () {
  hamb.classList.toggle('hamb-active');
  navMenu.classList.toggle('hidden');
});

window.onscroll = function() {
    const header = document.querySelector('header');
    const navfixed = header.offsetTop;

    if(window.pageYOffset > navfixed) {
        header.classList.add('navbar')
    } else {
        header.classList.remove('navbar')
    }
};