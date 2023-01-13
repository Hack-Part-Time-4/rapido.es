
gsap.to(".titulo", {opacity: 1, duration: 2});


const logout = document.getElementById('logoutBtn');
if (logout) {
    logout.addEventListener('click', (e) => {
        e.preventDefault();
        const form = document.getElementById('logoutForm').submit();
    });
}

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