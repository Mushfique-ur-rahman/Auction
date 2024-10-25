let img1=document.querySelector(".smolimage1");
let img2=document.querySelector(".smolimage2");
let img3=document.querySelector(".smolimage3");
let mainimg=document.querySelector(".bgimg");

img2.addEventListener("click",function(){
    mainimg.src="productimage/download.jfif";
});
img3.addEventListener("click",function(){
    mainimg.src="productimage/images.jfif";
});
img1.addEventListener("click",function(){
    mainimg.src="productimage/2024-lamborghini-revuelto-127-641a1d518802b.jpg";
});

















// var countDownDate = new Date("<?php echo $targetDate; ?>").getTime();
var countDownDate = new Date("September 31, 2023 00:00:00").getTime();
var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (days > 0 || hours > 0 || minutes > 0 || seconds > 0) {
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    } else {
        clearInterval(x);
    }
}, 1000);