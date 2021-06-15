var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
}

function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length} ;
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}

        function openNav() {
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginRight= "0";
}

function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
        }
function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length} ;
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}