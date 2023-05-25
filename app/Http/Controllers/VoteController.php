<?php

namespace App\Http\Controllers;
use App\Models\Votes;
use App\Models\User;
use Illuminate\Http\Request;

class VoteController extends Controller
{   
    public function voteForm(Request $request)
    {   
        $userId = auth()->id(); // Retrieve the user ID from the session
        // Retrieve the submitted form data

        $vote = new Votes;
        $vote->candidate_id=$request->input('president');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('vpInternal');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('vpExternal');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('secretary');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('treasurer');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('auditor');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('pio');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('business_manager');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bsit');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bscs');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bsemc');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('act');
        $vote->user_id = $userId; // Assign the user ID to the vote
        $vote->save();

        $user = auth()->user();
        $user->user_status = 'yes';
        $user->save();

        return redirect('users/voting');

    }

    public function updateUserStatus()
    {
        $user = auth()->user();
        $user->user_status = 'yes';
        $user->save();
    
        return view('user.votingList', compact('userStatus'));
    }

    public function getVotelist()
    {
        $userId = auth()->id(); // Retrieve the user ID from the session
    
        $votes = Votes::where('user_id', $userId)
            ->join('candidates', 'votes.candidate_id', '=', 'candidates.id')
            ->join('positions', 'candidates.position_id', '=', 'positions.id')
            ->select('votes.*', 'candidates.*', 'positions.position_name')
            ->get();
    
        return view('users.votingList', compact('votes'));
    }
    // public function getVotelist()
    // {
    //     $user = auth()->user();
    //     $userStatus = $user->user_status;
    
    //     return view('user/voting', compact('userStatus'));
    // }

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
