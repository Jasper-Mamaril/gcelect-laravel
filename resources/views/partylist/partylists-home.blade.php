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
              
              @if (auth()->user()->user_status == 'no')
                <div class="d-flex bg-success p-3 mb-1 rounded">
                  Add Your Partylist Members
                </div>
              <form action="{{ route('submit-form') }}"  method="POST" class="p-3">
                @csrf
                <!-- Partylist -->
                {{-- <div class="row bg-light m-1 rounded p-2">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Partylist name" aria-label="First name" required>
                  </div>
                </div> --}}

                {{-- President --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for President:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="presidentFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="presidentLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="presidentProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="presidentYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="presidentPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Vice President for Internal Affairs --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Vice-president for Internal Affairs:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="internalFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="internalLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="internalProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="internalYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="internalPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Vice President for External Affairs --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Vice-president for External Affairs:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="externalFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="externalLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="externalProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="externalYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="externalPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Secretary --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Secretary:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="secretaryFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="secretaryLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="secretaryProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="secretaryYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="secretaryPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Treasurer --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Treasurer:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="treasurerFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="treasurerLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="treasurerProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="treasurerYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col-4">
                      <label>Platform</label>
                      <textarea class="form-control" name="treasurerPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Auditor --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Auditor:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="auditorFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="auditorLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="auditorProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="auditorYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="auditorPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Public Information Officer --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Public Information Officer:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="pioFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="pioLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="pioProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="pioYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="pioPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                {{-- Business Manager --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Business Manager:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="bmFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="bmLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program</label>
                      <select class="form-select" name="bmProgram" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="bmYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="bmPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
                
                {{-- BSIT Representative --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for BSIT Representative:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="bsitFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="bsitLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program (locked)</label>
                      <select class="form-select" aria-label="Default select example" required disabled>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        {{-- <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option> --}}
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="bsitYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="bsitPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
            
                {{-- BSCS Representative --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for BSCS Representative:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="bscsFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="bscsLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program (locked)</label>
                      <select class="form-select" aria-label="Default select example" required disabled>
                        {{-- <option value="BSIT" selected>Bachelor of Science in Information Technology</option> --}}
                        <option value="BSCS" selected>Bachelor of Science in Computer Science</option>
                        {{-- <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option> --}}
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="bscsYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="bscsPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
                
                {{-- BSEMC Representative --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for BSEMC Representative:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="bsemcFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="bsemcLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program (locked)</label>
                      <select class="form-select" aria-label="Default select example" required disabled>
                        {{-- <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS" selected>Bachelor of Science in Computer Science</option> --}}
                        <option value="BSEMC" selected>Bachelor of Science in Entertainment and Multi-media Computing</option>
                        {{-- <option value="ACT">Associate in Computer Technology</option> --}}
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="bsemcYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="bsemcPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>

                                
                {{-- ACT Representative --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for ACT Representative:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="actFname" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="actLname" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <label>Program (locked)</label>
                      <select class="form-select" aria-label="Default select example" required disabled>
                        {{-- <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS" selected>Bachelor of Science in Computer Science</option>
                        <option value="BSEMC" selected>Bachelor of Science in Entertainment and Multi-media Computing</option> --}}
                        <option value="ACT" selected>Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <label>Year Level</label>
                      <select class="form-select" name="actYear" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Candidate Platform</label>
                      {{-- <textarea class="form-control"  required> --}}
                        <textarea class="form-control" name="actPlatform" placeholder="Platform" aria-label="Platform" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
            
                 <!-- Submit Button -->
                 <div class="col m-1">
                  <button class="btn btn-success" type="submit">Submit form</button>
                </div>
              </div>
              </form>
                  <!-- Display content for active users -->
              @else
                  <div class="d-flex bg-success p-3 mb-1 rounded">
                    Your Partylist Members
                  </div>
                  {{-- table only, no more edit --}}
                  <div class="bg-dark rounded">
                  <div class="col p-3 rounded column table-responsive" style="min-width: 300px; background-color: #fff;">
                    <div class="col-4">
                      <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>

                      <div class="col-2">
                        <label>Application Status:</label>
                        <input class="form-control" id="myInput" type="text" placeholder="Approved">
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

              @endif

              
            </div>
          </div>
        </main>

        </main>
  </div>
  @endauth
  @endsection