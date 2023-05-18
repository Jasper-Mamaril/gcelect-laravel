<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MemberController extends Controller
{
    public function getMembers()
    {
        // $members = Members::all();
        $presidents = Members::where('members_position', "President")->get();
        $vpInternals = Members::where('members_position', "VPinternal")->get();
        $vpExternals = Members::where('members_position', "VPexternal")->get();
        $secretaries = Members::where('members_position', "Secretary")->get();
        $treasurers = Members::where('members_position', "Treasurer")->get();
        $auditors = Members::where('members_position', "Auditor")->get();
        $pios = Members::where('members_position', "Pio")->get();
        return view('components.voting', compact('presidents','vpInternals','vpExternals','secretaries','treasurers','auditors','pios'));

    }

    public function getPresident()
    {
        $presidents = Members::with('partylist')->where('members_position', "President")->get();
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
