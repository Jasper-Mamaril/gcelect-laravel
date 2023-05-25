<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partylists;
use App\Models\Candidates;
use App\Models\Positions;

class PartylistController extends Controller
{
    public function getPartylists()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'approved');
        // $members = Members::all();
        return view('users.user-home', compact('partylists'));

    }

    public function getApproved()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'approved');
        $candidates = Candidates::all()->where('partylist_id', 1);
        // $members = Members::all();
        
        return view('admin.admin-home', compact('partylists','candidates'));

    }

    // public function getApproved($id)
    // {
    //     $partylists = Partylists::where('status', 'approved')->get();
    //     $candidates = Candidates::where('partylist_id', $id)->get();

    //     return response()->json([
    //         'partylists' => $partylists,
    //         'candidates' => $candidates,
    //     ]);
    // }

    public function getforVerification()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'verification');
        $candidates = Candidates::all()->where('partylist_id', 2);
        // $members = Members::all();
        return view('admin.for-verification', compact('partylists','candidates'));

    }

    public function getDeclined()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'declined');
        $candidates = Candidates::all()->where('partylist_id', 2);
        // $members = Members::all();
        
        return view('admin.declined', compact('partylists','candidates'));

    }
   
    public function applyPartylist()
    {
        // $course->name = $request->name;
        // $course->description = $request->description;
        // $course->is_draft = $request->is_draft;
        $partylist = new Partylists; 
        $partylist->fill($request->all());
        $partylist->save();

    return $partylist;
    }

    public function insertCandidates()
    {
        // $partylist = auth()->user();
        // $partylist->partylist_status = 'edit';
        // $partylist->save();

        return view('partylist.partylists-home');
    }

    public function getPartylistDetails($id)
    {
        $partylist = Partylists::findOrFail($id);
        $candidates = Candidates::join('partylists', 'partylists.id', '=', 'candidates.partylist_id')
                        ->join('positions', 'positions.id', '=', 'candidates.position_id')
                        ->where('partylists.id', $id)
                        ->get(['candidates.*', 'positions.position_name']);

        return response()->json([
            'partylists' => $partylist,
            'candidates' => $candidates,
        ]);
    }


    

    public function submitForm(Request $request)
    {
        $maxId = Partylists::max('id');

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 1;
        $candidate->candidate_fname = $request->input('presidentFname');
        $candidate->candidate_lname = $request->input('presidentLname');
        $candidate->candidate_program = $request->input('presidentProgram');
        $candidate->candidate_platform = $request->input('presidentPlatform');
        $candidate->candidate_yrlevel = $request->input('presidentYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 2;
        $candidate->candidate_fname = $request->input('internalFname');
        $candidate->candidate_lname = $request->input('internalLname');
        $candidate->candidate_program = $request->input('internalProgram');
        $candidate->candidate_platform = $request->input('internalPlatform');
        $candidate->candidate_yrlevel = $request->input('internalYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 3;
        $candidate->candidate_fname = $request->input('externalFname');
        $candidate->candidate_lname = $request->input('externalLname');
        $candidate->candidate_program = $request->input('externalProgram');
        $candidate->candidate_platform = $request->input('externalPlatform');
        $candidate->candidate_yrlevel = $request->input('externalYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 4;
        $candidate->candidate_fname = $request->input('secretaryFname');
        $candidate->candidate_lname = $request->input('secretaryLname');
        $candidate->candidate_program = $request->input('secretaryProgram');
        $candidate->candidate_platform = $request->input('secretaryPlatform');
        $candidate->candidate_yrlevel = $request->input('secretaryYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 5;
        $candidate->candidate_fname = $request->input('treasurerFname');
        $candidate->candidate_lname = $request->input('treasurerLname');
        $candidate->candidate_program = $request->input('treasurerProgram');
        $candidate->candidate_platform = $request->input('treasurerPlatform');
        $candidate->candidate_yrlevel = $request->input('treasurerYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 6;
        $candidate->candidate_fname = $request->input('auditorFname');
        $candidate->candidate_lname = $request->input('auditorLname');
        $candidate->candidate_program = $request->input('auditorProgram');
        $candidate->candidate_platform = $request->input('auditorPlatform');
        $candidate->candidate_yrlevel = $request->input('auditorYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 7;
        $candidate->candidate_fname = $request->input('pioFname');
        $candidate->candidate_lname = $request->input('pioLname');
        $candidate->candidate_program = $request->input('pioProgram');
        $candidate->candidate_platform = $request->input('pioPlatform');
        $candidate->candidate_yrlevel = $request->input('pioYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 8;
        $candidate->candidate_fname = $request->input('bmFname');
        $candidate->candidate_lname = $request->input('bmLname');
        $candidate->candidate_program = $request->input('bmProgram');
        $candidate->candidate_platform = $request->input('bmPlatform');
        $candidate->candidate_yrlevel = $request->input('bmYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 9;
        $candidate->candidate_fname = $request->input('bsitFname');
        $candidate->candidate_lname = $request->input('bsitLname');
        $candidate->candidate_program = 'BSIT';
        $candidate->candidate_platform = $request->input('bsitPlatform');
        $candidate->candidate_yrlevel = $request->input('bsitYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 10;
        $candidate->candidate_fname = $request->input('bscsFname');
        $candidate->candidate_lname = $request->input('bscsLname');
        $candidate->candidate_program = 'BSCS';
        $candidate->candidate_platform = $request->input('bscsPlatform');
        $candidate->candidate_yrlevel = $request->input('bscsYear');;

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 11;
        $candidate->candidate_fname = $request->input('bsemcFname');
        $candidate->candidate_lname = $request->input('bsemcLname');
        $candidate->candidate_program = 'BSEMC';
        $candidate->candidate_platform = $request->input('bsemcPlatform');
        $candidate->candidate_yrlevel = $request->input('bsemcYear');
        $candidate->save();

        $candidate = new Candidates;
        $candidate->partylist_id = $maxId; 
        $candidate->position_id = 12;
        $candidate->candidate_fname = $request->input('actFname');
        $candidate->candidate_lname = $request->input('actLname');
        $candidate->candidate_program = 'ACT';
        $candidate->candidate_platform = $request->input('actPlatform');
        $candidate->candidate_yrlevel = $request->input('actYear');
        $candidate->save();

        $user = auth()->user();
        $user->user_status = 'edit';
        $user->save();

        // $userId = auth()->id(); // Retrieve the user ID from the session
        // $members = Candidates::where('partylist_id', $userId);
        // return view('partylist.partylists-home', compact('members'));

        return view('partylist.partylists-home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
