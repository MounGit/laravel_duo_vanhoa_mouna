<div class="sidebar">
    <div class="logo-details">
        {{-- <i class='bx bxl-c-plus-plus icon'></i> --}}
        {{-- <div class="logo_name">CodingLab</div> --}}
        {{-- <li>
            <a href="{{ route('front') }}">
                <i class='bx bx-left-arrow-alt'></i>
                <span class="links_name">Retour Front</span>
            </a>
            <span class="tooltip">Retour Front</span>
        </li> --}}
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        {{-- <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li> --}}
        <li>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('headers.index') }}">
                <i class='bx bx-navigation' ></i>
                <span class="links_name">Header</span>
            </a>
            <span class="tooltip">Header</span>
        </li>
        <li>
            <a href="{{route('about')}}">
                <i class='bx bxs-info-circle'></i>
               <span class="links_name">About </span>
            </a>
            <span class="tooltip">About </span>
        </li>
        <li>
            <a href="{{ route('features.index') }}">
                <i class='bx bx-mouse-alt'></i>
                <span class="links_name">Features</span>
            </a>
            <span class="tooltip">Features</span>
        </li>
        <li>
            <a href="{{route('services.index')}}">
                <i class='bx bxs-briefcase'></i>
               <span class="links_name">Services</span>
            </a>
            <span class="tooltip">Services </span>
          </li>

          <li>
            <a href="{{route('portfolios.index')}}">
                <i class='bx bxs-photo-album'></i>
                <span class="links_name">Portfolio</span>
            </a>
            <span class="tooltip">Portfolio</span>
        </li>
      <li>
        <a href="{{route('testimonials.index')}}">
            <i class='bx bxs-chat'></i>
           <span class="links_name">Testimonials </span>
        </a>
        <span class="tooltip">Testimonials </span>
      </li>

      <li>
        <a href="{{route('teams.index')}}">
            <i class='bx bxl-microsoft-teams'></i>
           <span class="links_name">Team</span>
        </a>
        <span class="tooltip">Team</span>
      </li>
      
    <li>
        <a href="{{route('contacts.index')}}">
            <i class='bx bxs-contact' ></i>
            <span class="links_name">Contact</span>
        </a>
        <span class="tooltip">Contact</span>
    </li>
      <li>
        <a href="{{route('footer')}}">
            <i class='bx bx-copyright' ></i>
           <span class="links_name">Footer </span>
        </a>
        <span class="tooltip">Footer </span>
      </li>
      <li>
        <a href="{{route('titre')}}">
         <i class='bx bx-left-arrow-alt' ></i>
           <span class="links_name">Titres </span>
        </a>
        <span class="tooltip">Titres</span>
      </li>

        <li>
            <a href="{{route('users.index')}}">
              <i class='bx bxs-user'></i>
                <span class="links_name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>

        <li>
            <a href="{{ route('front') }}">
                <i class='bx bx-left-arrow-alt'></i>
                <span class="links_name">Retour Front</span>
            </a>
            <span class="tooltip">Retour Front</span>
        </li>
        {{-- <li class="profile">
            <div class="profile-details">
                {{-- <img src="profile.jpg" alt="profileImg"> --}}
                {{-- <div class="name_job">
                    <a href="#">
                        <form method="POST" class="nav-link py-3 px-0 pl-5 rounded" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                {{ __('L.O.') }}
                            </x-dropdown-link>
                        </form>
                    </a>
                    <span class="tooltip">Log Out</span>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out"></i>
        </li> --}} 
    </ul>
</div>

{{-- <section class="home-section">
      <div class="text">Dashboard</div>
  </section> --}}
<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }

</script>
