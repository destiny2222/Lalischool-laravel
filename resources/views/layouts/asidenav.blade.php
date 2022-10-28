<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
           <img src="{{ asset('assets/images/logo/logo.png') }}" width="50" alt="">
        </span>
        <span class="app-brand- demo menu-text fw-bolder ms-2">Lali-Perparatory</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ set_active_url('home-dashboard') }}">
        <a href="{{ route('home-dashboard') }}" class="menu-link  ">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <li class="menu-item {{ set_active_url('aboutus.index') }}">
        <a href="{{ route('aboutus.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">About School</div>
        </a>
      </li>
      <li class="menu-item {{ set_active_url('teacher.index') }}">
        <a href="{{ route('teacher.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Teacher</div>
        </a>
      </li>
      <li class="menu-item {{ set_active_url('silder.index') }}">
        <a href="{{ route('silder.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Home Silder</div>
        </a>
      </li>

      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Blogs</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ set_active_url('Tags.index') }}">
            <a href="{{  route('Tags.index') }}" class="menu-link">
              <div data-i18n="Account">Tag</div>
            </a>
          </li>
          <li class="menu-item {{ set_active_url('posts.index') }}">
            <a href="{{  route('posts.index')  }}" class="menu-link">
              <div data-i18n="Notifications">View all Post </div>
            </a>
          </li>
         
        </ul>
      </li>
       <!-- Event -->
      <li class="menu-item {{ set_active_url('programs.index') }}">
        <a href="{{ route('programs.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Event</div>
        </a>
      </li>
      <!-- Class -->
      <li class="menu-item {{ set_active_url('rooms.index') }}">
        <a href="{{ route('rooms.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Class</div>
        </a>
      </li>
     

      <li class="menu-item {{ set_active_url('gallery.index') }}">
        <a href="{{ route('gallery.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Gallery</div>
        </a>
      </li>
      <li class="menu-item {{ set_active_url('contacter.index') }}">
        <a href="{{ route('contacter.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Contact</div>
        </a>
      </li>
     
      
    </ul>
  </aside>
  <!-- / Menu -->