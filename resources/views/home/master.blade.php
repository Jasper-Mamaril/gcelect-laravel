<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========= title icon ======== -->
    <link rel="icon" type="image/x-icon" href="/img/icon.png">
    
    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----======== SCRIPTS ======== -->
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="js/leaderboards.js"></script> -->
    
    
    <title>GC ELECT</title> 
</head>
<body>

   {{-- @include('includes.maintabs')
    <div class="container">
        @yield('content')
    </div> --}}

  <div class="container-fluid bg-light p-0 m-0 d-flex flex-wrap ">

       <!-- Navigation -->
        @include('navigation.navigation')
       <!-- End of Navigation -->

        <main class="tab-content col-10 ms-auto flex-column bg-light h-auto min-vh-100">
          <!-- <div class="container-fluid text-white">
            afasfsdf
          </div> -->
          <div class="container-fluid px-0 text-white shadow" >
            <div class="d-flex p-3" style="background-color: #1A3235;">
              GCELECT
            </div>
          </div>

          {{-- Partylists Tab --}}
            <div class="column container-fluid tab-pane active p-2 text-white" id="home" role="tabpanel" aria-labelledby="home-tab" >
              <div class="d-flex bg-danger p-3 mb-1 rounded">
                Partylists
              </div>
              <div class="d-flex mb-1">
                <div class="col-4 bg-info p-3 rounded-start"></div>
                <div class="col-8 bg-success p-3 rounded-end"></div>
              </div>

              @include('components.partylists')
              
            </div>
          {{-- End of Partylists Tab --}}

          {{-- Voting Tab --}}
            <div class="column container-fluid tab-pane p-2 text-white" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="d-flex bg-success p-3 mb-1 rounded">
                Voting
              </div>

                {{-- @include('components.voting') --}}
                
                  <div class="container">
                    @yield('voting_content')
                  </div>

            </div>
          {{-- End of Voting Tab --}}
          
          {{-- Leaderboards Tab --}}
            <div class="column container-fluid tab-pane p-2 text-white" id="messages" role="tabpanel" aria-labelledby="messages-tab">
              <div class="d-flex bg-warning p-3 mb-1 rounded">
                Leaderboards
              </div>
              <div class="d-flex">
                <div class="col-6 bg-info p-3 rounded-start"></div>
                <div class="col-6 bg-danger p-3 rounded-end"></div>
              </div>    

              @include('components.leaderboards')

            </div>
          {{-- End of Leaderboards Tab --}}
          
          {{-- Candidacy Tab --}}
            <div class="column container-fluid tab-pane p-2 text-white" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              <div class="d-flex bg-info p-3 mb-1 rounded">
                Candidacy
              </div>
              <div class="d-flex">
                <div class="col-5 bg-danger p-3 rounded-start"></div>
                <div class="col-7 bg-warning p-3 rounded-end"></div>
              </div>    

              @include('components.candidacy') 

            </div>
           {{-- End of Candidacy Tab --}}
        </div>
        </main>
  </div>

  <!-- Modals -->
  
  <!-- Terms and Conditions Modal -->
  <div>
    @include('modal.terms')
  </div>
  <!-- End of Terms and Conditions Modal -->

  <!-- Privacy Policy Modal -->
  <div>
    @include('modal.privacy')
  </div>
 <!-- End of Privacy Policy Modal -->

</body>
<script>
  var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
  triggerTabList.forEach(function (triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl)
  
    triggerEl.addEventListener('click', function (event) {
      event.preventDefault()
      tabTrigger.show()
    })
  })

  function logout() {
    Swal.fire({
        title: 'Log Out',
        text: "Are you sure you want to log out?",
        icon: 'warning',
        showCancelButton: true,
        width:400,
        heightAuto: false,
        color:'white',
        confirmButtonColor: '#4BB1F7',
        cancelButtonColor: '#F27171',
        background: '#0e2535',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.isConfirmed) {
            localStorage.clear();
            window.location.href = "/index.html";
  
        }
      })
  
  }
</script>
</html>