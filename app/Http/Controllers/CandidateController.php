<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Partylists;

class CandidateController extends Controller
{
    public function getCandidates()
    {
        $presidents = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 1)->get();

        $vpInternals = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 2)->get();

        $vpExternals = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 3)->get();

        $secretaries = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 4)->get();

        $treasurers = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 5)->get();

        $auditors = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 6)->get();

        $pios = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 7)->get();

        $bms = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 8)->get();

        $bsits = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 9)->get();

        $bscss = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 10)->get();

        $bsemcs = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 11)->get();

        $acts = Candidates::with(['partylist' => function ($query) {
            $query->where('status', 'approved');}])->where('position_id', 12)->get();
            
        return view('users.voting', compact('presidents','vpInternals','vpExternals','secretaries','treasurers','auditors','pios','bms','bsits','bscss','bsemcs','acts'));
    }

    public function route()
    {
        return view('candidates.candidacy');
    }

    public function getPartylistDetails()
    {
        // $partylists = Partylists::with('candidates')->all();
        
        // $members = Members::all();
        // $partylists = Candidates::with(['position' => function ($query) {
        //     $query->where('status', 'approved');}])->get();
        return view('admin.admin-home', compact('candidates'));

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

