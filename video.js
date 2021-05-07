(function() {
    var video = document.getElementById('video'),
        vendorUrl = window.URL || window.webkitURL;
        
// on source les dif media (chrome, moz, microsft)
    navigator.getMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia||   
                         navigator.mozGetUserMedia ||
                         navigator.msGetUserMedia; 
                         
// Pour capturer la video et le son : 
navigator.getMedia ({
    video: true,
    audio: false
}, function(stream) {
    video.src = vendorUrl.createObjectURL(stream);
    video.play();
}, function(error){
    //Une erreur est survenue
    // error.code
    });
}) ();
