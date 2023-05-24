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
        $partylists = Partylists::all()->where('status', 'verification');
        // $members = Members::all();
        return view('users.user-home', compact('partylists'));

    }

    public function getApproved()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'approved');
        $candidates = Candidates::all()->where('partylist_id', 2);
        // $members = Members::all();
        return view('admin.admin-home', compact('partylists','candidates'));

    }

    public function getforVerification()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'verification');
        // $members = Members::all();
        return view('admin.for-verification', compact('partylists'));

    }

    public function getDeclined()
    {
        // $partylists = Partylists::with('candidates')->all();
        $partylists = Partylists::all()->where('status', 'declined');
        // $members = Members::all();
        return view('admin.declined', compact('partylists'));

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

    // $partylist = new Partylists; 
    // $partylist->fill($request->all());
    // $partylist->save();

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
