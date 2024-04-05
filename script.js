let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
   toggleBtn.classList.replace('fa-toggle-off', 'fa-toggle-on');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   toggleBtn.classList.replace('fa-toggle-on', 'fa-toggle-off');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enableDarkMode();
}

toggleBtn.onclick = (e) =>{
   darkMode = localStorage.getItem('dark-mode');
   if(darkMode === 'disabled'){
      enableDarkMode();
   }else{
      disableDarkMode();
   }
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   search.classList.remove('active');
}

let search = document.querySelector('.header .flex');

// document.querySelector('#search-btn').onclick = () =>{
//    search.classList.toggle('active');
//    profile.classList.remove('active');
// }

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sideBar.classList.toggle('active');
   body.classList.toggle('active');
}

document.querySelector('#close-btn').onclick = () =>{
   sideBar.classList.remove('active');
   body.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   search.classList.remove('active');

   if(window.innerWidth < 1200){
      sideBar.classList.remove('active');
      body.classList.remove('active');
   }
}

  const iconClose = document.querySelector(".icon-close");
  const wrapper = document.querySelector(".form-container");

  iconClose.addEventListener("click", () => {
    wrapper.classList.remove("active-popup");
  })



  function closeForm() {
    var form = document.getElementById("form");
    form.style.display = "none";

    window.location.href = "index.html";
  }


  // JavaScript for toggling the sidebar
   // function toggleSidebar() {
   //    var sidebar = document.querySelector('.side-bar');
   //    var bodyContent = document.querySelector('.body');
   //    sidebar.classList.toggle('active');
   //    bodyContent.classList.toggle('active');
   // }