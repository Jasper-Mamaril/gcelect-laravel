@auth

<nav class="col-2 border-end border-secondary d-flex flex-column text-white bg-dark position-fixed" style=" min-height: 100vh;">
  <div class="dropdown p-2 ">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{auth()->user()->user_fname}} {{auth()->user()->user_lname}}</strong>
    </a>
    {{-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul> --}}
    <!-- <div class="dropdown-divider"></div> -->
  </div>
    <div class="dropdown-divider"></div>

    <ul class="nav nav-pills flex-column mb-auto p-2">
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white" href="/admin/admin-home">
                <i class='bx bx-list-ul icon'></i>
                <span>Verified Partylists</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white"  href="/admin/for-verification">
                <i class='bx bx-upvote icon' ></i>    
                <span>For Approval</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white" href="/admin/leaderboards">
                <i class='bx bx-bar-chart-square icon' ></i>
                <span>Leaderboards</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link text-white" href="/admin/users-listing">
              <i class='bx bx-bar-chart-square icon' ></i>
              <span>Registered Voters</span>
          </a>
      </li>
    </ul>
    <div class="dropdown-divider"></div>
    <div class=" p-2">

      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <span role="button" type="submit" onclick="logout()" class="d-flex align-items-center text-white text-decoration-none">
          <i class='bx bx-log-out-circle icon' ></i>
          <span class="text nav-text">&nbsp Logout</span> 
        </span>
        {{-- <button type="submit">Logout</button> --}}
      </form>
    </div>
  <!-- </aside> -->
</nav>
@endauth