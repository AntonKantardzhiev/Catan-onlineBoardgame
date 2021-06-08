let sidebarToggle = false;

let sidebarMenu = document.getElementById('sidebar');
let popupMenuButton = document.getElementById('menuPopup');

let enterPlayerName = document.getElementById('enter');
let form = document.querySelector('.fade');
let btn = document.querySelector(".fadeBtn");




popupMenuButton.addEventListener('click', () =>{
    if (sidebarToggle === false){
        sidebarMenu.style.visibility = 'visible';
        sidebarMenu.style.width = '200px';
    }
    else if (sidebarToggle === true){
        sidebarMenu.style.visibility = 'hidden';
        sidebarMenu.style.width = '0px';
    }
});

btn.addEventListener("click",function(){
    form.classList.add("elementToFadeOut");
    setTimeout(()=>{form.classList.remove("elementToFadeOut");},4000);
});
