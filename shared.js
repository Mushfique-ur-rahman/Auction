var backdrop = document.querySelector(".backdrop");
var toggleButton = document.querySelector(".toggle-button");
var mobileNave = document.querySelector(".mobile-nav");
console.dir(backdrop);
//  backdrop.style.display='block';
backdrop.addEventListener("click", function () {
    mobileNave.classList.remove('open');
    backdrop.classList.remove('open');
});

toggleButton.addEventListener("click", function () {
    mobileNave.classList.add('open');
    backdrop.classList.add('open');
});
