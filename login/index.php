      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Register & Login</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <link rel="stylesheet" href="style.css">
      </head>
      <body>

      <header class="header">
   
    <section class="flex">
 
      <a href="#" class="logo"><img src="images/logo.png" alt=""></a>

      <div class="profile">
        <img src="images/profile.jpg" class="image" alt="">
        <h3 class="name">user name</h3>
        <p class="role">role</p>
        <a href="profile.html" class="btn">view profile</a>
        <div class="flex-btn">
          <a href="/login/index.php" class="option-btn">login</a>
          <a href="/login/register.php" class="option-btn">SignUp</a>
        </div>
      </div>


      <nav class="navbar">
        <a href="index.html"><span>Home</span></a>
        <a href="#about"><span>About</span></a>
        <a href="#courses"><span>Courses</span></a>
        <a href="#mentorship"><span>Mentorship</span></a>
        <!-- <a href="contact.html"><span>Contact us</span></a> -->
        <a href="events.html"><span>Events</span></a>
        <a href="dforum.html"><span>Forum</span></a>
      </nav>


      <div class="icons">
        <div id="menu-btn" class="fas fa-bars" onclick="toggleSidebar()"></div>
        <div id="user-btn" class="fas fa-user"></div>
        <div id="toggle-btn" class="fas fa-toggle-off"></div>
      </div>


    </section>
 
  </header> 


        <!-- login and signup -->
          <div class="container" id="signup" style="display:none;">
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
              <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fname">First Name</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-user"></i>
                  <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                  <label for="lName">Last Name</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Email" required>
                  <label for="email">Email</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
              </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">
              ----------or--------
            </p>
            <div class="icons">
              <i class="fab fa-google"></i>
              <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
              <p>Already Have Account ?</p>
              <button id="signInButton">Log In</button>
            </div>
          </div>

          <div class="container" id="signIn">
              <h1 class="form-title">Sign In</h1>
              <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <p class="recover">
                  <a href="#">Recover Password</a>
                </p>
              <input type="submit" class="btn" value="Sign In" name="signIn">
              </form>
              <p class="or">
                ------------ or-----------
              </p>
              <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
              </div>
              <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>
              </div>
          </div>



  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');


    :root{
      --main-color:#6db4f7;
      --red:#e74c3c;
      --orange:#f39c12;
      --light-color:#888;
      --light-bg:#eee;
      --black:#2c3e50;
      --white:#fff;
      --border:.1rem solid rgba(0,0,0,.2);
    }

    *{
      font-family: 'Nunito', sans-serif;
      margin:0; 
      padding:0;
      box-sizing: border-box;
      outline: none; 
      border:none;
      text-decoration: none;
    }


    *::selection{
      background-color: var(--main-color);
      color:#fff;
    }

    ::-webkit-scrollbar {
      width: 0;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: transparent;
    }

    html{
      font-size: 62.5%;
      overflow-x: hidden;
      height: 100vh;
    }

    body{
      background-color: var(--light-bg);
      transition: margin-left 0.3s ease-in-out;
    }

    body.dark{
      --light-color:#aaa;
      --light-bg:#333;
      --black:#fff;
      --white:#222;
      --border:.1rem solid rgba(255,255,255,.2);
    }




    /* ----------------- header ----------------- */

    .header{
      position: sticky;
      top:0; 
      left:0; 
      right: 0;
      background-color: var(--light-bg);
      z-index: 1000;
      border-bottom: var(--border);
    }

    .header .flex{
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      padding: 0 1rem;
    }

    .header .flex .logo img{
      /* font-size: 1rem;
      color: var(--black); */
      height: 65px;
      width: auto;
    }


    .header .flex .icons div{
      font-size: 2rem;
      color:var(--black);
      background-color: var(--light-bg);
      border-radius: 3rem;
      height: 4.5rem;
      width: 4.5rem;
      line-height: 4.5rem;
      cursor: pointer;
      text-align: center;
      margin-left: .7rem;
    }

    .header .flex .icons div:hover{
      background-color: var(--black);
      color:var(--white);
    }


    /* ----------------- header-profile-----------------*/

    .header .flex .profile{
      position: absolute;
      top:120%; right: 2rem;
      background-color: var(--white);
      border-radius: .5rem;
      padding: 1.5rem;
      text-align: center;
      overflow: hidden;
      transform-origin: top right;
      transform: scale(0);
      transition: .2s linear;
      width: 23rem;
    }

    .header .flex .profile.active{
      transform: scale(1);
    }

    .header .flex .profile .image{
      height: 10rem;
      width: 10rem;
      border-radius: 50%;
      object-fit: contain;
      margin-bottom: .5rem;
    }

    .header .flex .profile .name{
      font-size: 2rem;
      color:var(--black);
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .header .flex .profile .role{
      font-size: 1.8rem;
      color: var(--light-color);
    }

    /* -----------------navbar -----------------*/
    .navbar a{
      display: inline-flex;
      padding: .7rem 1rem 1rem 1.8rem;
      font-size: 2rem;
      
    }

    .navbar a span{
      color:var(--light-color);
      transition: all .40s ease;
    }

    .navbar a span:hover{
      color:var(--main-color);
      transform: scale(0.9) translateY(-5px);
    }


    /* -----------------home ----------------- */
    .home-grid .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, 50rem);
      gap: 3rem;
      justify-content: center;
      align-items: flex-start;
    }

    .home-text{
      padding: 18rem 0;
    }

    .home-text h1 {
      font-size: 4rem;
      margin: 15px 0 15px;
      color: var(--black);
    }

    .home-text h4 {
      color: var(--light-color);
      font-size: 2rem;
      font-weight: 600;
    }

    .home-img img{
      width: 500px;
      height: auto;
      max-width: 100%;
      padding: 3rem 0;
    }


       /* ----------------- buttons -----------------*/


    .btn,
    .option-btn{
      border-radius: .5rem;
      color:#fff;
      font-size: 1.8rem;
      cursor: pointer;
      text-transform: capitalize;
      padding: .5rem 1rem;
      text-align: center;
      margin-top: 1rem;
    }

    .btn,
    .option-btn{
      display: block;
      width: 100%;
    }

    .btn {
      background-color: var(--main-color);
    }

    .option-btn {
      background-color:var(--main-color);
    }

    .btn:hover,
    .option-btn:hover{
      background-color: var(--black);
      color: var(--white);
    }

    .flex-btn{
      display: flex;
      gap: 1rem;
    }

  </style>


  <script src="script.js"></script>
  <script>
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
  </script>
</body>
</html>