<?php

namespace App\Http\Controllers;
use App\Models\Votes;
use App\Models\User;
use Illuminate\Http\Request;

class VoteController extends Controller
{   
    public function submitForm(Request $request)
    {   
        $userId = auth()->id(); // Retrieve the user ID from the session
        // Retrieve the submitted form data
        // $president = new Votes;
        // $president = $request->input('president');
        // $president->save();

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


        return redirect('users/voting');

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
        
        $vote = new Vote;
        $vote->candidate_id=$request->president;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->vpInternal;
        $vote->save();
       
        $vote = new Vote;
        $vote->candidate_id=$request->vpExternal;
        $vote->save();
     
        $vote = new Vote;
        $vote->candidate_id=$request->secretary;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->treasurer;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->pio;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->business_manager;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->bsit;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->bscs;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->bsemc;
        $vote->save();

        $vote = new Vote;
        $vote->candidate_id=$request->act;
        $vote->save();
        dd($vote);
        return view('candidates.voting');
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
