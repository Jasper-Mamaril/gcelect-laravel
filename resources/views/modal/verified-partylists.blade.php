  @extends('layout.master')

  @section('content')
    @auth
  
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
                        <th scope="row">Name</th>
                        <th>Position</th>
                        <th>Program</th>
                        <th>Year Level</th>
                        <th>Platform</th> 
                    </thead>

                    @foreach ($partylists as $candidate)

                    <tr class="table-active">
                        <th scope="row">{{$candidate->candidate_fname}} {{$candidate->candidate_lname}}</th>
                        <td>{{$candidate->position_name}}</td>
                        <td>{{$candidate->candidate_program}}</td>
                        <td>{{$candidate->candidate_yrlevel}}</td>
                        <td>{{$candidate->candidate_platform}}</td>
                    </tr>

                    @endforeach
                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>Larry the Bird</td>
                        <td>Vice-president for External Affairs</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>Vice-president for Internal Affairs</td>
                    </tr> --}}
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