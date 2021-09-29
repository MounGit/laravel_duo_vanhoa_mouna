<div class="sidebar">
    <div class="logo-details">
      {{-- <i class='bx bxl-c-plus-plus icon'></i> --}}
        {{-- <div class="logo_name">CodingLab</div> --}}
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{route('dashboard')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>




      {{-- <li>
        <a href="">
         <i class='bx bx-left-arrow-alt' ></i>
           <span class="links_name"> </span>
        </a>
        <span class="tooltip"> </span>
      </li> --}}




     
     <li>
        <a href="{{route('front')}}">
         <i class='bx bx-left-arrow-alt' ></i>
           <span class="links_name">Retour Front</span>
        </a>
        <span class="tooltip">Retour Front</span>
      </li>
     <li class="profile">
         <div class="profile-details">
           {{-- <img src="profile.jpg" alt="profileImg"> --}}
           <div class="name_job">
            <a href="#">
                <form method="POST" class="nav-link py-3 px-0 pl-5 rounded" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __("L.O.") }}
                    </x-dropdown-link>
                </form>
            </a>
            <span class="tooltip">Log Out</span>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>

  {{-- <section class="home-section">
      <div class="text">Dashboard</div>
  </section> --}}
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>