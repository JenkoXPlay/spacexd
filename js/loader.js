$(document).ready(function(){
    window.onload = move();
    function move() {
        var elem = document.getElementById("myBar"); 
        var percent = document.getElementById("percent");
        var width = 1;
        var id = setInterval(frame, 20);
        function frame() {
            if(width == 100) {
                window.location.replace("./page.php?page=home.php");
            }
            if (width >= 100) {
                clearInterval(id);
            } else {
                width++; 
                elem.style.width = width + '%'; 
                percent.innerHTML = width + "%";
            }
        }
    }
});