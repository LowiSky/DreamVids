var slider = document.getElementById('slider');
var sliderList = document.getElementById('sliderList');

function slideTo(nb) {
    newClass = 'slide' + nb;
    slider.className = sliderList.className = newClass;
}

function slideToNext() {
    nb = parseInt(slider.className.replace('slide', ''));
    nb = nb == 3 ? 1 : nb + 1;
    slider.className = sliderList.className = 'slide' + nb;
}


var slideInterval = setInterval(function() {
    if (!slideHover)
        slideToNext();
}, 7000);

var slideHover = false;

slider.addEventListener('mouseover', function() {
    slideHover = true;
}, false);
slider.addEventListener('mouseout', function() {
    slideHover = false;
}, false);