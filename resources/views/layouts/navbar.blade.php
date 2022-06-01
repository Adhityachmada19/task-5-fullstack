<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <form  class="nav-link" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          <button class="btn btn-outline">
            <p>Logout</p>
          </button>
        </form>
      </li>
    </ul>
  </nav>