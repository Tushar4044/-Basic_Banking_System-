let sparktext = document.getElementById('sparktext');
let burjkhalifa = document.getElementById('burjkhalifa');
let stars = document.getElementById('stars');

window.addEventListener('scroll', () => {

    let value = window.scrollY;

    sparktext.style.left = value * -2 + 'px';
    burjkhalifa.style.top = value * 1.5 + 'px';
    stars.style.top = value * 1 + 'px';


});


