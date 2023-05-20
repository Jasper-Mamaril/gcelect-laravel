<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{   
    public function insert(Request $request)
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
        return view('candidates.voting');
    }
    
    public function voting(Request $request)
    {
        // Retrieve the selected radio button values
        $president = $request->input('president');
        $president->save();
        // $vpInternal = $request->input('vpInternal');
        // $vpExternal = $request->input('vpExternal');
        // $secretary = $request->input('secretary');
        // $treasurer = $request->input('treasurer');
        // $auditor = $request->input('auditor');
        // $pio = $request->input('pio');
        // $businessManager = $request->input('business_manager');
        // $bsit = $request->input('bsit');
        // $bscs = $request->input('bscs');
        // $bsemc = $request->input('bsemc');
        // $act = $request->input('act');
        dd($president);
        // Process the selected values as needed
        // Redirect or return a response
        // return redirect()->back()->with('success', 'Voting submitted successfully');
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
