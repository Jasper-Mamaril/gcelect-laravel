@extends('layout.master')

@section('voting_content')
<div class="bg-dark rounded">
              
  <form action="#"  class="p-3">
    <!-- Information -->
    <div class="row bg-light m-1 rounded p-2">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
      </div>
    </div>

    <!-- President -->
    <div class="bg-light m-1 rounded p-2 text-dark">
      <div class="col p-2">President: (Content goes here)</div>
      <div class="d-flex flex-wrap p-2 gap-4">
        
        @foreach ($presidents as $president)

          <div class="column">
            <input class="form-check-input" type="radio" name="president" id="idPresident" required>
            <label class="form-check-label" for="idPresident" >
              {{-- Name of Candidate  --}}
              {{$president->members_fname}} {{$president->members_lname}}
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
      <div class="col p-2">Vice President: (Content goes here)</div>
      <div class="p-2">

        @foreach ($vpInternals as $vpInternal)

        <div class="column">
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$vpInternal->members_fname}} {{$vpInternal->members_lname}}
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

     <!-- Vice President External -->
     <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Vice President: (Content goes here)</div>
      <div class="p-2">

        @foreach ($vpExternals as $vpExternal)

        <div class="column">
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$vpExternal->members_fname}} {{$vpExternal->members_lname}}
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
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$secretary->members_fname}} {{$secretary->members_lname}}
          </label>
        </div>

        @endforeach

        {{-- <div class="col ">
          <input class="form-check-input" type="radio" name="secretary" id="idSecretary" required>
          <label class="form-check-label" for="idSecretary" >
            Name of First Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="secretary" id="idSecretary" >
          <label class="form-check-label" for="idSecretary">
            Name of Second Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="secretary" id="idSecretary" >
          <label class="form-check-label" for="idSecretary">
            Name of  Third Candidate
          </label>
        </div> --}}
      </div>
    </div>

    <!-- Treasurer -->
    <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Treasurer: (Content goes here)</div>
      <div class="p-2">

        @foreach ($treasurers as $treasurer)

        <div class="column">
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$treasurer->members_fname}} {{$treasurer->members_lname}}
          </label>
        </div>

        @endforeach

        {{-- <div class="col ">
          <input class="form-check-input" type="radio" name="treasurer" id="idTreasurer" required>
          <label class="form-check-label" for="idTreasurer" >
            Name of First Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="treasurer" id="idTreasurer" >
          <label class="form-check-label" for="idTreasurer">
            Name of Second Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="treasurer" id="idTreasurer" >
          <label class="form-check-label" for="idTreasurer">
            Name of  Third Candidate
          </label>
        </div> --}}
      </div>
    </div>

    <!-- Auditor -->
    <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Auditor: (Content goes here)</div>
      <div class="p-2">

        @foreach ($auditors as $auditor)

        <div class="column">
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$auditor->members_fname}} {{$auditor->members_lname}}
          </label>
        </div>

        @endforeach
        {{-- <div class="col ">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" required>
          <label class="form-check-label" for="idAuditor" >
            Name of First Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" >
          <label class="form-check-label" for="idAuditor">
            Name of Second Candidate 
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" >
          <label class="form-check-label" for="idAuditor">
            Name of  Third Candidate
          </label>
        </div> --}}
      </div>
    </div>

    <!-- Pio -->
    <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Public Information Officer: (Content goes here)</div>
      <div class="p-2">

        @foreach ($pios as $pio)

        <div class="column">
          <input class="form-check-input" type="radio" name="president" id="idPresident" required>
          <label class="form-check-label" for="idPresident" >
            {{-- Name of Candidate  --}}
            {{$pio->members_fname}} {{$pio->members_lname}}
          </label>
        </div>

        @endforeach
        {{-- <div class="col ">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" required>
          <label class="form-check-label" for="idAuditor" >
            Name of First Candidate
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" >
          <label class="form-check-label" for="idAuditor">
            Name of Second Candidate 
          </label>
        </div>
        <div class="col">
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" >
          <label class="form-check-label" for="idAuditor">
            Name of  Third Candidate
          </label>
        </div> --}}
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

@endsection