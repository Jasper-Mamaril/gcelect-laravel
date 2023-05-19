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

          <div class="column container-fluid p-2 text-white">
            <div class="d-flex bg-success p-3 mb-1 rounded">
              Candidacy
            </div>
            <!-- <div class="d-flex">
              <div class="col-5 bg-danger p-3 rounded-start"></div>
              <div class="col-7 bg-warning p-3 rounded-end"></div>
            </div>  -->
            <div class="bg-dark rounded">
              
              <form action="#"  class="p-3">
                <!-- Partylist -->
                <div class="row bg-light m-1 rounded p-2">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Partylist" aria-label="First name" required>
                  </div>
                </div>

                {{-- President --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for President:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <select class="form-select" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <select class="form-select" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                  </div>
                </div>

                {{-- Vice President for External Affairs --}}
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Candidate for Vice-president in External Affairs:</div>
                  <!-- Information -->
                  <div class="row bg-light m-1 rounded p-1">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Last name: e.x.(Dela Cruz)" aria-label="Last name" required>
                    </div>
                    <div class="col-4">
                      <select class="form-select" aria-label="Default select example" required>
                        <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSEMC">Bachelor of Science in Entertainment and Multi-media Computing</option>
                        <option value="ACT">Associate in Computer Technology</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <select class="form-select" aria-label="Default select example" required>
                        {{-- <option selected disabled>Year Level</option> --}}
                        <option value="1" selected>First-year</option>
                        <option value="2">Second-year</option>
                        <option value="3">Third-year</option>
                        <option value="4">Fourth-year</option>
                      </select>
                    </div>
                  </div>
                </div>

                

                
            
                <!-- Submit Button -->
                <div class="col m-1">
                  <button class="btn btn-success" type="submit">Submit form</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </main>

        </main>
  </div>
  @endsection