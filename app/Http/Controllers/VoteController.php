<?php

namespace App\Http\Controllers;
use App\Models\Votes;
use Illuminate\Http\Request;

class VoteController extends Controller
{
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function submitForm(Request $request)
    {
        // Retrieve the submitted form data
        // $president = new Votes;
        // $president = $request->input('president');
        // $president->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('president');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('vpInternal');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('vpExternal');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('secretary');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('treasurer');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('auditor');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('pio');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('business_manager');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bsit');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bscs');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('bsemc');
        $vote->save();

        $vote = new Votes;
        $vote->candidate_id=$request->input('act');
        $vote->save();

        return view('candidates.voting');


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

        // Perform any additional processing or validation here

        // Example: Display the submitted form data
        // echo "President: " . $president . "<br>";
        // echo "Vice President Internal: " . $vpInternal . "<br>";
        // echo "Vice President External: " . $vpExternal . "<br>";
        // echo "Secretary: " . $secretary . "<br>";
        // echo "Treasurer: " . $treasurer . "<br>";
        // echo "Auditor: " . $auditor . "<br>";
        // echo "Public Information Officer: " . $pio . "<br>";
        // echo "Business Manager: " . $businessManager . "<br>";
        // echo "BSIT Representative: " . $bsit . "<br>";
        // echo "BSCS Representative: " . $bscs . "<br>";
        // echo "BSEMC Representative: " . $bsemc . "<br>";
        // echo "ACT Representative: " . $act . "<br>";
    }

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
