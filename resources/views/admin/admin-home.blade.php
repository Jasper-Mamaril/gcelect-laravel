@extends('layout.master')

@section('content')
@auth
  
  <div class="container-fluid bg-light p-0 m-0 d-flex flex-wrap ">

        <main class="tab-content col-10 ms-auto flex-column bg-light h-auto min-vh-100">
          <!-- <div class="container-fluid text-white">
            afasfsdf
          </div> -->
          <div class="container-fluid px-0 text-white shadow" >
            <div class="d-flex p-3" style="background-color: #1A3235;">
              GCELECT ADMIN
            </div>
          </div>

          <div class="column container-fluid active p-2 text-white">
            <div class="d-flex bg-danger p-3 mb-1 rounded">
              Partylists Verification
            </div>
            <!-- <div class="d-flex mb-1">
              <div class="col-4 bg-info p-3 rounded-start"></div>
              <div class="col-8 bg-success p-3 rounded-end"></div>
            </div> -->
            <div class="container-fluid mb-1 p-0" >
              <div class="d-flex flex-wrap gap-2 ">

                {{-- @foreach ($partylists as $partylist) --}}

                <div class="col p-3 rounded column" style="min-width: 300px; background-color: #1A3235;" data-bs-toggle="modal" data-bs-target="#partylistModal">
                  <div class="d-flex p-4 rounded-top text-dark justify-content-center" style="background-color: #fff; height:250px; ">
                    <img src="{{asset('img/icon.png')}}">
                  </div>
                  <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                    {{-- <div><h6>{{$partylist->partylist_name}}</h6></div> --}}
                    <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#partylistModal">Details</span></div>
                  </div>
                </div>

                {{-- @endforeach --}}
                
              </div>
            </div>
          </div>
</div>
        </main>
  </div>

  <!-- Modals -->
  
  <!-- Partylist Modal -->
  <div class="modal fade" id="partylistModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title text-light fs-5" id="staticBackdropLabel" >Candidates for verification</h1>
          <span role="button" class='bx bxs-x-circle text-light fs-4 pe-auto' data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="modal-body">
            <table class="table table-dark table-striped rounded">
                  <tbody>
                    <thead>
                        <th scope="row"></th>
                        <th>Name</th>
                        <th>Position</th>
                    </thead>
                    <tr class="table-active">
                        <th scope="row">1</th>
                        <td>Larry the Bird</td>
                        <td>President</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Larry the Bird</td>
                        <td>Vice-president for External Affairs</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>Vice-president for Internal Affairs</td>
                    </tr>
                  </tbody>
            </table>
        </div>
        <div class="modal-footer" style="background-color: #1A3235;">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>
  
@endauth
@endsection
