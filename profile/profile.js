var mpbutton=document.querySelector(".profile-button");
var dbbutton=document.querySelector(".dashbord-button");
var bidbutton=document.querySelector(".bid-history-button");
var purchesbutton=document.querySelector(".purchrs-button");
var logout=document.querySelector(".logout");



var dasbord=document.querySelector(".dasbord-box");
var profile=document.querySelector(".profile");
var bidhistory=document.querySelector(".bid-history");

dbbutton.addEventListener("click", function () {
    dasbord.classList.remove('hide');
    profile.classList.remove('show');
    bidhistory.classList.remove('show');
 });

mpbutton.addEventListener("click", function () {
   dasbord.classList.add('hide');
    profile.classList.add('show');
    bidhistory.classList.remove('show')
});

bidbutton.addEventListener("click", function () {
   dasbord.classList.add('hide');
    profile.classList.remove('show');
    bidhistory.classList.add('show');
});

logout.addEventListener("click",function(){
    location.replace("../index.php");
});