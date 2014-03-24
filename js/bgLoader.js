var bgLoader = function(element) {
    this.element = element;
    this.src = this.element.getAttribute('data-background');
    this.element.style.backgroundImage = 'url(' + this.src + ')';

    this.imgLoader = new Image();
    this.imgLoader.src = this.src;

    this.imgLoader.addEventListener('load', function(event) {
        element.className += ' bgLoaded';
    }, false);
}

var elements = document.getElementsByClassName('bgLoader');
if (elements && elements.length) {
    for (var i = 0, length = elements.length; i < length; i++) {
        bgLoader(elements[i]);
    }
}