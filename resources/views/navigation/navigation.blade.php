<nav class="col-2 border-end border-secondary d-flex flex-column text-white bg-dark position-fixed" style=" min-height: 100vh;">
    <div class="dropdown p-2 ">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Baril</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
      <!-- <div class="dropdown-divider"></div> -->
    </div>
      <div class="dropdown-divider"></div>

      <ul class="nav nav-pills flex-column mb-auto p-2">
          <li class="nav-item" role="presentation">
              <a class="nav-link active text-white " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                  <i class='bx bx-list-ul icon'></i>
                  <span>Partylists</span>
              </a>
          </li>
          <li class="nav-item" role="presentation">
              <a class="nav-link text-white" id="profile-tab" data-toggle="modal" data-target="#exampleModalCenter" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                  <i class='bx bx-upvote icon' ></i>    
                  <span>Voting</span>
              </a>
          </li>
          <li class="nav-item" role="presentation">
              <a class="nav-link text-white" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                  <i class='bx bx-bar-chart-square icon' ></i>
                  <span>Leaderboards</span>
              </a>
          </li>
          <li class="nav-item" role="presentation">
              <a class="nav-link text-white" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                  <i class='bx bx-id-card icon'></i>
                  <span>Candidacy</span>
              </a>
          </li>
      </ul>
      <div class="dropdown-divider"></div>
      <div class=" p-2">
        <a href="#" onclick="logout()" class="d-flex align-items-center text-white text-decoration-none">
          <i class='bx bx-log-out-circle icon' ></i>
          <span class="text nav-text">&nbsp Logout</span> 
        </a>
      </div>
    <!-- </aside> -->
  </nav>