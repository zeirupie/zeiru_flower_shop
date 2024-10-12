
//modal variables====
const menuModal = document.getElementById("modal-navigation");
const loginModal = document.getElementById("loginModal");


const menuModalBtn = document.getElementById("menuBtn");
const closebtn = document.getElementsByClassName("close");
//-modal variables====

//side nav bar modal==============
menuModalBtn.onclick = function()
{
    if(menuModal.style.display == "none" || menuModal.style.display == "")
    {
        menuModal.style.display="block";
    }

    else
    {
        menuModal.style.display="none";
    }
}

window.onclick= function(event)
{
    if(event.target == menuModal)
    {
        menuModal.style.display="none";
        
    }
}

window.onresize = function()
{
    if (window.innerWidth >= 850) 
    {
        menuModal.style.display="none";
    }
}
//-side nav bar modal==============


//login form modal ==============
function openLoginModal()
{
    if(loginModal.style.display == "none" || loginModal.style.display == "")
    {
        loginModal.style.display="flex";
        menuModal.style.display="none";
    }
}

closebtn[0].onclick= function()
{
    loginModal.style.display="none";
}

//-login form modal ==============