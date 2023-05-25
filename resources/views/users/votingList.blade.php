@extends('layout.master')
  @section('content')
  @auth
  @include('navigation.navigation')

  <div class="container-fluid bg-light p-0 m-0 d-flex flex-wrap ">

        <main class="tab-content col-10 ms-auto flex-column bg-light h-auto min-vh-100">
          <div class="container-fluid px-0 text-white shadow" >
            <div class="d-flex p-3" style="background-color: #1A3235;">
              GCELECT
            </div>
          </div>
          
          <div class="column container-fluid active p-2 text-white">
            <div class="d-flex bg-success p-3 mb-1 rounded">
              Your Votes List
            </div>
            <div class="bg-dark rounded p-3">
            @if (auth()->user()->user_status == 'yes')
            
              {{-- table only, no more edit --}}
              <div class="bg-dark rounded">
              <div class="col p-3 rounded column table-responsive" style="min-width: 300px; background-color: #fff;">
                <div class="col-4">
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>

                <table class="table  align-middle">
                  <thead class="text-center ">
                    <tr>
                      <th scope="col" class="col-2">Position</th>
                      <th scope="col" class="col-3">Full Name</th>
                      <th scope="col" class="col-1">Year Level</th>
                      <th scope="col" class="col-2">Program</th>
                    </tr>
                  </thead>
                  <tbody class="text-center"  id="myTable">

                  @foreach ($votes as $votelist)
                  @csrf
                    <tr>
                      <td>{{$votelist->position_name}}</td>
                      <td scope="row">{{$votelist->candidate_fname}} {{$votelist->candidate_lname}}</td>
                      <td>{{$votelist->candidate_yrlevel}}</td>
                      <td>{{$votelist->candidate_program}}</td>
                    </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
            </div>

              @else
              <div class="d-flex align-items-center justify-content-center flex-column p-3 gap-3">
                <img src="{{asset('img/icon.png')}}" width="400px">
                <h1>You haven't voted yet! Proceed to voting page.</h1>
            </div>
              @endif
              

            </div>
            </div>
          </div>
        </main>
  </div>

  <!-- Modals -->
  @include('modal.terms')

  <!-- Privacy Policy Modal -->
  @include('modal.privacy')
  @endauth
@endsection