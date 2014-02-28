var uploader = document.getElementById('uploader');

window.ondragover = window.ondrop = function(event) {
    event.preventDefault();
    return false;
};

uploader.addEventListener('dragenter', function() {
    uploader.className = 'hover';
});

uploader.ondragover = function() {
    uploader.className = 'hover';
}
uploader.ondragleave = function() {
    uploader.className = uploader.className.replace(' hover', '');

}
uploader.ondrop = function(event) {
    uploader.className = 'uploading';
    console.log(event.dataTransfer);
    event.preventDefault();
}