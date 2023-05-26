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
            <div class="d-flex bg-success p-3 mb-1 rounded">
              Verified Partylists
            </div>
            <!-- <div class="d-flex mb-1">
              <div class="col-4 bg-info p-3 rounded-start"></div>
              <div class="col-8 bg-success p-3 rounded-end"></div>
            </div> -->
            <div class="container-fluid mb-1 p-0" >
              <div class="d-flex flex-wrap gap-2 p-2 rounded" style="background-color: #1A3235;">

                {{-- @foreach ($partylists as $partylist) --}}
                <div class="col p-3 rounded column table-responsive" style="min-width: 300px; background-color: #fff;">
                  <div class="col-4">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                    <table class="table align-middle">
                      <thead class="text-center">
                        <tr>
                          <th scope="col" class="col-1">#</th>
                          <th scope="col" class="col-1">Partylist Name</th>
                          <th scope="col" class="col-2">Date Submitted</th>
                          <th scope="col" class="col-1">Status</th>
                          <th scope="col" class="col-1">Actions</th>
                        </tr>
                      </thead>
                      <tbody class="text-center" id="myTable">
                        @foreach ($partylists as $approved)
                        <tr class="partylist-card" data-partylist-id="{{ $approved->id }}">
                          <td scope="row" class="fw-bold">{{ $loop->iteration }}</td>
                          <td>{{ $approved->partylist_name }}</td>
                          <td>{{ $approved->created_at }}</td>
                          <td>
                            <form action="{{ route('change.status', $approved->id) }}" method="POST" class="d-flex">
                              @csrf
                              @method('PATCH')
                              <select name="status" class="form-select me-2" aria-label="Default select example" required>
                                <option value="approved"{{ $approved->status == 'approved' ? ' selected' : '' }}>Approve</option>
                                <option value="declined"{{ $approved->status == 'declined' ? ' selected' : '' }}>Decline</option>
                                <option value="verification"{{ $approved->status == 'verification' ? ' selected' : '' }}>For Verification</option>
                              </select>
                              <button type="submit" class="btn btn-success d-flex align-items-center">
                                <i class="bx bxs-save"></i> <span class="ms-2">Save</span>
                              </button>
                            </form>
                          </td>
                          
                          
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#partylistModal">Details</button>
                            </div>
                          </td>
                        </tr>
                        @endforeach
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
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable" style="max-width: 800px;">
      <div class="modal-content" >
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title text-light fs-5" id="partylistName"></h1>
          <span role="button" class="bx bxs-x-circle text-light fs-4 pe-auto" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="modal-body">
          <table class="table table-dark table-striped rounded" id="candidateTable">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Position</th>
                <th scope="col">Name</th>
                <th scope="col">Year Level</th>
                <th scope="col">Program</th>
                <th scope="col">Platform</th>
              </tr>
            </thead>
            <tbody>
              <!-- Dynamic content will be added here -->
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
