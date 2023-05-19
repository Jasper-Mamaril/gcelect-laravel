<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Partylists;

class CandidateController extends Controller
{
    public function getCandidates()
    {
        // $members = Members::all();
        $presidents = Candidates::with('partylist')->where('position_id', 1)->get();
        $vpInternals = Candidates::with('partylist')->where('position_id', 2)->get();
        $vpExternals = Candidates::with('partylist')->where('position_id', 3)->get();
        $secretaries = Candidates::with('partylist')->where('position_id', 4)->get();
        $treasurers = Candidates::with('partylist')->where('position_id', 5)->get();
        $auditors = Candidates::with('partylist')->where('position_id', 6)->get();
        $pios = Candidates::with('partylist')->where('position_id', 7)->get();
        $bms = Candidates::with('partylist')->where('position_id', 8)->get();
        $bsits = Candidates::with('partylist')->where('position_id', 9)->get();
        $bscss = Candidates::with('partylist')->where('position_id', 10)->get();
        $bsemcs = Candidates::with('partylist')->where('position_id', 11)->get();
        $acts = Candidates::with('partylist')->where('position_id', 12)->get();
        // return $presidents;
        return view('candidates.voting', compact('presidents','vpInternals','vpExternals','secretaries','treasurers','auditors','pios','bms','bsits','bscss','bsemcs','acts'));

    }

    public function getPresident()
    {
        $presidents = Members::with('partylists')->where('members_position', "President")->get();
        // $presidents = Members::all();
        return $presidents;
        // return view('components.voting', compact('presidents'));

    }

    public function getVPinternal()
    {
        $vpInternal = Members::where('members_position', "VPinternal")->get();
        // $members = Members::all();
        return $vpInternal;

    }

    public function getVPexternal()
    {
        $vpExternal = Members::where('members_position', "VPexternal")->get();
        // $members = Members::all();
        return $vpExternal;

    }

    public function getSecretary()
    {
        $secretary = Members::where('members_position', "Secretary")->get();
        // $members = Members::all();
        return $secretary;

    }

    public function getTreasurer()
    {
        $treasurer = Members::where('members_position', "Treasurer")->get();
        // $members = Members::all();
        return $treasurer;

    }

    public function getAuditor()
    {
        $auditor = Members::where('members_position', "Auditor")->get();
        // $members = Members::all();
        return $auditor;

    }

    public function getPio()
    {
        $pio = Members::where('members_position', "Pio")->get();
        // $members = Members::all();
        return $pio;

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

