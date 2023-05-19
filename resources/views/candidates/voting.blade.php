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
              Voting
            </div>
            <!-- <div class="d-flex">
              <div class="col-5 bg-danger p-3 rounded-start"></div>
              <div class="col-7 bg-warning p-3 rounded-end"></div>
            </div>  -->
            <div class="bg-dark rounded">
              
              <form action="#"  class="p-3">
                <!-- Information -->
                  {{-- <div class="row bg-light m-1 rounded p-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                    </div>
                  </div> --}}
            
                <!-- President -->
                <div class="bg-light m-1 rounded p-2 text-dark">
                  <div class="col p-2">President: (Content goes here)</div>
                  <div class="d-flex flex-wrap p-2 gap-4">
                    
                    @foreach ($presidents as $president)
            
                      <div class="column">
                        <input class="form-check-input" type="radio" name="president" id="idPresident" required>
                        <label class="form-check-label" for="idPresident">
                          {{-- Name of Candidate  --}}
                          {{$president->candidate_fname}} {{$president->candidate_lname}} - "{{$president->partylist->partylist_name}} Partylist"
                        </label>
                      </div>
            
                    @endforeach
                    
            
                    {{-- <div class="column">
                      <input class="form-check-input" type="radio" name="president" id="idPresident" >
                      <label class="form-check-label" for="idPresident">
                        Name of  Second Candidate
                      </label>
                    </div>
                    <div class="column">
                      <input class="form-check-input" type="radio" name="president" id="idPresident" >
                      <label class="form-check-label" for="idPresident">
                        Name of  Third Candidate
                      </label>
                    </div>
                    <div class="column">
                      <input class="form-check-input" type="radio" name="president" id="idPresident" >
                      <label class="form-check-label" for="idPresident">
                        Name of Fourth Candidate 
                      </label>
                    </div> --}}
                  </div>
                </div>
            
                <!-- Vice President Internal -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Vice President for Internal Affairs: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($vpInternals as $vpInternal)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="vpInternal" id="idvpInternal" required>
                      <label class="form-check-label" for="idvpInternal" >
                        {{-- Name of Candidate  --}}
                        {{$vpInternal->candidate_fname}} {{$vpInternal->candidate_lname}} - "{{$vpInternal->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                 <!-- Vice President External -->
                 <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Vice President for External Affairs: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($vpExternals as $vpExternal)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="vpExternal" id="idvpExternal" required>
                      <label class="form-check-label" for="idvpExternal" >
                        {{-- Name of Candidate  --}}
                        {{$vpExternal->candidate_fname}} {{$vpExternal->candidate_lname}} - "{{$vpExternal->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                    {{-- <div class="col ">
                      <input class="form-check-input" type="radio" name="vicePresident" id="idVicePresident" required>
                      <label class="form-check-label" for="idVicePresident" >
                        Name of First Candidate
                      </label>
                    </div>
                    <div class="col">
                      <input class="form-check-input" type="radio" name="vicePresident" id="idVicePresident" >
                      <label class="form-check-label" for="idVicePresident">
                        Name of Second Candidate
                      </label>
                    </div>
                    <div class="col">
                      <input class="form-check-input" type="radio" name="vicePresident" id="idVicePresident" >
                      <label class="form-check-label" for="idVicePresident">
                        Name of  Third Candidate
                      </label>
                    </div> --}}
                  </div>
                </div>
            
                <!-- Secretary -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Secretary: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($secretaries as $secretary)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="secretary" id="idSecretary" required>
                      <label class="form-check-label" for="idSecretary" >
                        {{-- Name of Candidate  --}}
                        {{$secretary->candidate_fname}} {{$secretary->candidate_lname}} - "{{$secretary->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- Treasurer -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Treasurer: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($treasurers as $treasurer)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="treasurer" id="idTreasurer" required>
                      <label class="form-check-label" for="idTreasurer" >
                        {{-- Name of Candidate  --}}
                        {{$treasurer->candidate_fname}} {{$treasurer->candidate_lname}} - "{{$treasurer->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- Auditor -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Auditor: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($auditors as $auditor)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="auditor" id="idAuditor" required>
                      <label class="form-check-label" for="idAuditor" >
                        {{-- Name of Candidate  --}}
                        {{$auditor->candidate_fname}} {{$auditor->candidate_lname}} - "{{$auditor->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
                   
                  </div>
                </div>
            
                <!-- Pio -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Public Information Officer: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($pios as $pio)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="pio" id="idPio" required>
                      <label class="form-check-label" for="idPio" >
                        {{-- Name of Candidate  --}}
                        {{$pio->candidate_fname}} {{$pio->candidate_lname}} - "{{$pio->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- Business Manager -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">Business Manager: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($bms as $bm)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="business_manager" id="idBusinessManager" required>
                      <label class="form-check-label" for="idBusinessManager" >
                        {{-- Name of Candidate  --}}
                        {{$bm->candidate_fname}} {{$bm->candidate_lname}} - "{{$bm->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- BSIT -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">BSIT Representative: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($bsits as $bsit)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="bsit" id="idBsit" required>
                      <label class="form-check-label" for="idBsit" >
                        {{-- Name of Candidate  --}}
                        {{$bsit->candidate_fname}} {{$bsit->candidate_lname}} - "{{$bsit->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- BSCS -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">BSCS Representative: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($bscss as $bscs)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="bscs" id="idBscs" required>
                      <label class="form-check-label" for="idBscs" >
                        {{-- Name of Candidate  --}}
                        {{$bscs->candidate_fname}} {{$bscs->candidate_lname}} - "{{$bscs->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                <!-- BSEMC -->
                <div class="bg-light m-1 rounded p-2 text-dark  ">
                  <div class="col p-2">BSEMC Representative: (Content goes here)</div>
                  <div class="p-2">
            
                    @foreach ($bsemcs as $bsemc)
            
                    <div class="column">
                      <input class="form-check-input" type="radio" name="bsemc" id="idBsemc" required>
                      <label class="form-check-label" for="idBsemc" >
                        {{-- Name of Candidate  --}}
                        {{$bsemc->candidate_fname}} {{$bsemc->candidate_lname}} - "{{$bsemc->partylist->partylist_name}} Partylist"
                      </label>
                    </div>
            
                    @endforeach
            
                  </div>
                </div>
            
                  <!-- ACT -->
                  <div class="bg-light m-1 rounded p-2 text-dark  ">
                    <div class="col p-2">ACT Representative: (Content goes here)</div>
                    <div class="p-2">
              
                      @foreach ($acts as $act)
              
                      <div class="column">
                        <input class="form-check-input" type="radio" name="act" id="idAct" required>
                        <label class="form-check-label" for="idAct" >
                          {{-- Name of Candidate  --}}
                          {{$act->candidate_fname}} {{$act->candidate_lname}} - "{{$act->partylist->partylist_name}} Partylist"
                        </label>
                      </div>
              
                      @endforeach
              
                    </div>
                  </div>
            
            
                {{-- end div --}}
                <div>
            
                <!-- Terms and Conditions -->
                <div class=" m-1 p-2 rounded text-light">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="termsConditions" required>
                    <label class="form-check-label" for="termsConditions">
                      I Agree to <a href=""  data-bs-toggle="modal" data-bs-target="#termsAndConditionsModal">Terms and Conditions</a> 
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="privacyPolicy" required>
                    <label class="form-check-label" for="privacyPolicy">
                      I Agree to <a href="" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a>
                    </label>
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
  </div>

  <!-- Modals -->
  <!-- Terms and Conditions Modal -->
  <div class="modal fade" id="termsAndConditionsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="termsAndConditionsModalLabel" aria-hidden="true">
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title fs-5 text-light" id="termsAndConditionsModalLabel">Terms & Conditions</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
          <div class="mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br>
            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
            <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </div>
            <hr>
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button>
        </div>
        <div class="modal-footer" style="background-color: #1A3235;">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Privacy Policy Modal -->
  <div class="modal fade" id="privacyPolicyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog text-dark modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #1A3235;">
          <h1 class="modal-title text-light fs-5" id="staticBackdropLabel" >Privacy Policy</h1>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br>
            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
            <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
          </div>
          <hr>
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button>
        </div>
        <div class="modal-footer" style="background-color: #1A3235;">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>
@endsection