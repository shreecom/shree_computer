
let slides=document.getElementsByClassName("slide");
let currentslide=0;

document.getElementById("next").addEventListener("click",()=>{
    changeslide(currentslide + 1);
});

document.getElementById("back").addEventListener("click", ()=>{
    changeslide(currentslide - 1);
});

function changeslide(moveTo)
{
    if(moveTo>=slides.length)
    {
        moveTo=0;
    }
    if(moveTo<0)
    {
        moveTo= slides.length - 1;
    }
    slides[currentslide].classList.toggle("active");
    slides[moveTo].classList.toggle("active");
    currentslide =moveTo;

}
window.onload=setInterval(function()
{
    changeslide(currentslide+1);
},5000);