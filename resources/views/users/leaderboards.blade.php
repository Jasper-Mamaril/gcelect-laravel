@extends('layout.master')
@section('content')
@auth
@include('navigation.navigation')

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

          <div class="column container-fluid p-2 text-white" >
            <div class="d-flex bg-warning p-3 mb-1 rounded">
              Leaderboards
            </div>
            <div class="container-fluid mb-1 p-0" >
                <div class="d-flex flex-wrap gap-2 ">
                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="presidentsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Presidents</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="vpExternalsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>VP for External Affairs</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="vpInternalsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>VP for Internal Affairs</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="secretariesContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Secretary</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>
                  
                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="treasurersContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Treasurer</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="auditorsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Auditor</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="piosContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Public Information Officer</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="bmsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>Business Manager</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="bsitsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>BSIT Representative</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="bscssContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>BSCS Representative</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="bsemcsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>BSEMC Representative</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                  <div class="col p-3 rounded column" style="min-width: 450px; background-color: #1A3235;" >
                    <div class="bg-light p-2 rounded-top">
                        <div id="actsContainer" style="height:300px;">
                        </div>
                    </div>
                    <div class="p-3 rounded-bottom d-flex justify-content-between align-items-center" style="background-color: gray;">
                        <div><h5>ACT Representative</h5></div>
                        <div> <span class="bg-dark px-4 py-1 rounded" role="button" data-bs-toggle="modal" data-bs-target="#candidatesModal">Details</span></div>
                    </div>
                  </div>

                </div>
              </div>
        </main>
  </div>

  <!-- Modals -->

  <!-- Candidates Modal -->
  <div class="modal fade" id="candidatesModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title text-light fs-5" id="staticBackdropLabel" >Candidates</h1>
          <span role="button" class='bx bxs-x-circle text-light fs-4 pe-auto' data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="modal-body">
            <table class="table table-dark table-striped rounded">
                  <tbody>
                    <thead>
                        <th scope="row">Rank</th>
                        <th>Name</th>
                        <th>Votes</th>
                    </thead>
                    <tr class="table-active">
                        <th scope="row">1</th>
                        <td>Larry the Bird</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Larry the Bird</td>
                        <td>12</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>3</td>
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