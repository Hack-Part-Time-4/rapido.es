import { random } from 'lodash';
import './bootstrap';

gsap.to(".titulo", {opacity: 1, duration: 2});

// Arrow Scroll
function arrow() {
    let arrowScroll = document.querySelector('#scroll-top');
    if (this.scrollY >= 100) {
        arrowScroll.classList.add('show-scroll');
    } else {
        arrowScroll.classList.remove('show-scroll');
    }
}

window.addEventListener('scroll',arrow)

// Scroll con cards
    let animated = document.querySelectorAll('.animada');
    function showCards(){
        let scrollCardsTop = document.documentElement.scrollTop;
        for (let i = 0; i < animated.length; i++) {
            let height = animated[i].offsetTop;
            if (height - 800 < scrollCardsTop) { 
                animated[i].style.opacity = '1';
            }
        }
    }
    
    window.addEventListener('scroll',showCards);


let colores = document.querySelector('.affiliate');

colores.style.color = `rgb(${randomColor()}, ${randomColor()}, ${randomColor()})`

function randomColor() {
    return Math.round(Math.random() * (255 - 0) + 0) 
}