const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks =document.getElementsById('right-nav')[0]

toggleButton.addEventListener('click',() => {
    navbarLinks.classList.toggleButton('active')
})















 
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


var model= document.getElementsById("book");
var myBtn= document.getElementsByClassName('btn')
//get the button that opens the model
{
myBtn.onclick=function(){
    model.style.display="block";
}
}