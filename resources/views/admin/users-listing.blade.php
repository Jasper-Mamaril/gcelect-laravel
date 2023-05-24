@extends('layout.master')

@section('content')
@auth
@include('navigation.admin-nav')
  
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
              Users Listing
            </div>
            <div class="container-fluid mb-1 p-0" >
              <div class="d-flex flex-wrap gap-2  p-2 rounded" style="background-color: #1A3235;">

                {{-- @foreach ($partylists as $partylist) --}}

                <div class="col p-3 rounded column table-responsive" style="min-width: 300px; background-color: #fff;">
                  <div class="col-4">
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </div>
                  <table class="table align-middle">
                    <thead class="text-center ">
                      <tr>
                        <th scope="col" class="col-2">First Name</th>
                        <th scope="col" class="col-2">Last Name</th>
                        <th scope="col" class="col-3">Email</th>
                        <th scope="col" class="col-2">Voting Status</th>
                        <th scope="col" class="col-3">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="text-center" id="myTable">
                      <tr>
                        <th scope="row">Jasper Robert</th>
                        <td>Mamaril</td>
                        <td>jm@gordoncollege.edu.ph</td>
                        <td><span class="text-success text-capitalize">Yes</span></td>
                        <td>
                          <div class="display-flex">
                            <span class="btn btn-outline-danger" role="button" onclick="deleteUser()">Delete</span>
                            <span class="btn btn-primary" role="button" 
                            data-bs-toggle="modal" data-bs-target="#partylistModal">Details</span>
                            <span class="btn btn-warning" role="button" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Lou Bryan</th>
                        <td>Ballesteros</td>
                        <td>lb@gordoncollege.edu.ph</td>
                        <td><span class="text-success text-capitalize">Yes</span></td>
                        <td>
                          <div class="display-flex">
                            <span class="btn btn-outline-danger" role="button" onclick="deleteUser()">Delete</span>
                            <span class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#partylistModal">Details</span>
                            <span class="btn btn-warning" role="button" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Anthony</th>
                        <td>Mizal</td>
                        <td>am@gordoncollege.edu.ph</td>
                        <td><span class="text-danger text-capitalize" >No</span></td>
                        <td>
                          <div class="display-flex">
                            <span class="btn btn-outline-danger" role="button" onclick="deleteUser()">Delete</span>
                            <span class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#partylistModal">Details</span>
                            <span class="btn btn-warning" role="button" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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


  {{-- Edit User --}}

  <!-- Modal -->
<div class="modal fade" id="editUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="staticBackdropLabel">Edit User Details</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
        <div class="col my-1">
          <input type="text" class="form-control" placeholder="Email" aria-label="Last name">
        </div>
        <div class="row">
          <div class="col-md-4  gap-2">
            <div class="col px-2">
              <label for="inputState" class="form-label">Vote Status</label>
            </div>
            <div class="col">
              <select id="inputState" class="form-select">
                <option selected value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" onclick="updateUser()">Update</button>
      </div>
    </div>
  </div>
</div>
  
@endauth
@endsection
