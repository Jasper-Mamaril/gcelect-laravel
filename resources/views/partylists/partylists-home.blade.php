@extends('layout.master')

@section('content')
  <div class="container-fluid bg-light p-0 m-0 d-flex flex-wrap ">

        <main class="tab-content col-10 ms-auto flex-column bg-light h-auto min-vh-100">
          <!-- <div class="container-fluid text-white">
            afasfsdf
          </div> -->
          <div class="container-fluid px-0 text-white shadow" >
            <div class="d-flex p-3" style="background-color: #1A3235;">
              GCELECT
            </div>
          </div>

          <div class="column container-fluid active p-2 text-white">
            <div class="d-flex bg-danger p-3 mb-1 rounded">
              Partylists
            </div>
            <!-- <div class="d-flex mb-1">
              <div class="col-4 bg-info p-3 rounded-start"></div>
              <div class="col-8 bg-success p-3 rounded-end"></div>
            </div> -->
            <div class="container-fluid mb-1 p-0" >
              <div class="d-flex flex-wrap gap-2 ">

                @foreach ($partylists as $partylist)
                {{$partylist->partylist_name}}

                <div class="col p-3 rounded column" style="min-width: 300px; background-color: #1A3235;" data-bs-toggle="modal" data-bs-target="#partylistModal">
                  <div class="d-flex p-4 rounded-top text-dark justify-content-center" style="background-color: #fff; height:250px; ">
                    <img src="./img/logo.png">
                  </div>
                  <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                    <div><h6>Partylist Name</h6></div>
                    <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#partylistModal">Details</span></div>
                  </div>
                </div>

                @endforeach
                
              </div>
            </div>
          </div>
</div>
        </main>
  </div>

  <!-- Modals -->
  
  <!-- Partylist Modal -->
  <div class="modal fade" id="partylistModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title text-light fs-5" id="staticBackdropLabel" >Partylist Name</h1>
          <span role="button" class='bx bxs-x-circle text-light fs-4 pe-auto' data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <h2>List of Candidates</h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </div>
          <!-- <hr> -->
              <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button> -->
        </div>
        <div class="modal-footer" style="background-color: #1A3235;">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>
@endsection