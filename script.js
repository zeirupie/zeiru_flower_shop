
//modal variables====
const menuModal = document.getElementById("modal-navigation");
const loginModal = document.getElementById("loginModal");
const signUpModal = document.getElementById("signUpModal");


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


//login register form modal ==============
function openLoginModal()
{
    signUpModal.style.display="none";
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


function openSignUpModal()
{
    loginModal.style.display="none";
    if(signUpModal.style.display == "none" || signUpModal.style.display == "")
    {
        menuModal.style.display="none";
        signUpModal.style.display="flex";
        
    }
}

closebtn[1].onclick= function()
{
    signUpModal.style.display="none";
}

//-login register form modal ==============