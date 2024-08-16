let currentSlideClients = 0;
let currentSlideServices = 0;

function changeSlide(direction, sliderType) {
    let slides;
    let currentSlide;

    if (sliderType === 'clients') {
        slides = document.querySelectorAll('#clients .slide');
        currentSlide = currentSlideClients;
    } else if (sliderType === 'services') {
        slides = document.querySelectorAll('#services .slide');
        currentSlide = currentSlideServices;
    }

    currentSlide += direction;

    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    } else if (currentSlide >= slides.length) {
        currentSlide = 0;
    }

    document.querySelector(`#${sliderType} .slides`).style.transform = `translateX(-${currentSlide * 100}%)`;

    if (sliderType === 'clients') {
        currentSlideClients = currentSlide;
    } else if (sliderType === 'services') {
        currentSlideServices = currentSlide;
    }
}

// Smooth scroll for "من نحن" link
document.querySelector('a[href="#about"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });
});

