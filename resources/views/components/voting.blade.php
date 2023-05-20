@extends('layout.master')

@section('voting_content')
<div class="bg-dark rounded">
              
  <form action="/vote/insert" method="POST" class="p-3">
    @csrf

    <!-- President -->
    <div class="bg-light m-1 rounded p-2 text-dark">
      <div class="col p-2">President: (Content goes here)</div>
      <div class="d-flex flex-wrap p-2 gap-4">
        
        @foreach ($presidents as $president)

          <div class="column">
            <input class="form-check-input" type="radio" name="president" id="idPresident" value="{{$president->id}}">
            <label class="form-check-label" for="idPresident">
              {{$president->candidate_fname}} {{$president->candidate_lname}} - "{{$president->partylist->partylist_name}} Partylist"
            </label>
          </div>

        @endforeach
      
      </div>
    </div>

    <!-- Vice President Internal -->
    <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Vice President for Internal Affairs: (Content goes here)</div>
      <div class="p-2">

        @foreach ($vpInternals as $vpInternal)

        <div class="column">
          <input class="form-check-input" type="radio" name="vpInternal" id="idvpInternal" value="{{$vpInternal->id}}">
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
          <input class="form-check-input" type="radio" name="vpExternal" id="idvpExternal" value="{{$vpExternal->id}}">
          <label class="form-check-label" for="idvpExternal" >
            {{-- Name of Candidate  --}}
            {{$vpExternal->candidate_fname}} {{$vpExternal->candidate_lname}} - "{{$vpExternal->partylist->partylist_name}} Partylist"
          </label>
        </div>

        @endforeach

      </div>
    </div>

    <!-- Secretary -->
    <div class="bg-light m-1 rounded p-2 text-dark  ">
      <div class="col p-2">Secretary: (Content goes here)</div>
      <div class="p-2">

        @foreach ($secretaries as $secretary)

        <div class="column">
          <input class="form-check-input" type="radio" name="secretary" id="idSecretary" value="{{$secretary->id}}">
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
          <input class="form-check-input" type="radio" name="treasurer" id="idTreasurer" value="{{$treasurer->id}}">
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
          <input class="form-check-input" type="radio" name="auditor" id="idAuditor" value="{{$auditor->id}}">
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
          <input class="form-check-input" type="radio" name="pio" id="idPio" value="{{$pio->id}}">
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
          <input class="form-check-input" type="radio" name="business_manager" id="idBusinessManager" value="{{$bm->id}}">
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
          <input class="form-check-input" type="radio" name="bsit" id="idBsit" value="{{$bsit->id}}">
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
          <input class="form-check-input" type="radio" name="bscs" id="idBscs" value="{{$bscs->id}}">
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
          <input class="form-check-input" type="radio" name="bsemc" id="idBsemc" value="{{$bsemc->id}}">
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
            <input class="form-check-input" type="radio" name="act" id="idAct" value="{{$act->id}}">
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
        <input class="form-check-input" type="checkbox" value="" id="termsConditions">
        <label class="form-check-label" for="termsConditions">
          I Agree to <a href=""  data-bs-toggle="modal" data-bs-target="#termsAndConditionsModal">Terms and Conditions</a> 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="privacyPolicy">
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