@extends('layout.master')
  @section('content')
  @auth
  @include('navigation.pl-nav')
  
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

          <div class="column container-fluid p-2 text-white">
            {{-- <div class="d-flex bg-success p-3 mb-1 rounded">
              Candidacy
            </div> --}}
            <!-- <div class="d-flex">
              <div class="col-5 bg-danger p-3 rounded-start"></div>
              <div class="col-7 bg-warning p-3 rounded-end"></div>
            </div>  -->
            <div class="bg-dark rounded">
              
              @if (auth()->user()->user_status == 'yes')
              <div class="d-flex bg-success p-3 mb-1 rounded">
                Your Partylist Members
              </div>
              {{-- table only, no more edit --}}
              <div class="bg-dark rounded">
              <div class="col p-3 rounded column table-responsive" style="min-width: 300px; background-color: #fff;">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="col-4">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </div>
                  <div class="col-2 p-3 bg-success rounded">
                    Application Status: <span>{{$status}}</span>
                  </div>
                </div>

                <table class="table  align-middle">
                  <thead class="text-center ">
                    <tr>
                      {{-- <th scope="col" class="col-1">id</th> --}}
                      <th scope="col" class="col-2">Position</th>
                      <th scope="col" class="col-3">Full Name</th>
                      <th scope="col" class="col-1">Year Level</th>
                      <th scope="col" class="col-2">Program</th>
                      <th scope="col" class="col-1">Platform</th>
                    </tr>
                  </thead>
                  <tbody class="text-center"  id="myTable">

                  @foreach ($members as $candidate)
                  @csrf
                    <tr>
                      {{-- <td scope="row">{{$candidate->id}}</td> --}}
                      <td>{{$candidate->position_name}}</td>
                      <td scope="row">{{$candidate->candidate_fname}} {{$candidate->candidate_lname}}</td>
                      <td>{{$candidate->candidate_yrlevel}}</td>
                      <td>{{$candidate->candidate_program}}</td>
                      {{-- <td><span class="text-primary text-capitalize">{{$approved->status}}</span></td> --}}
                      <td>
                        <div class="display-flex">
                          <span class="btn btn-primary" role="button" 
                          data-bs-toggle="modal" data-bs-target="#platformModal">VIEW</span>
                          {{-- <span class="btn btn-success" role="button">Archive</span> --}}
                        </div>
                      </td>
                    </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
            </div>

                  <!-- Display content for active users -->
              @else
                <div class="d-flex align-items-center justify-content-center flex-column p-3 gap-3">
                  <img src="{{asset('img/icon.png')}}" width="400px">
                  <h1>You haven't submitted members of your party-list! finish adding candidates.</h1>
                </div>
              @endif
              
            </div>
          </div>
        </main>

        </main>
  </div>
  @endauth
  @endsection