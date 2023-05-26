<?php

namespace App\Http\Controllers;
use App\Models\Candidates;
use App\Models\Votes;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function getLeaderboards()
    {
        return view('users.leaderboards');
    }

    public function getAdminLeaderboards()
    {
        // return view('users.leaderboards');
         return view('admin.leaderboards');
    }

    public function getChartData(Request $request, $positionId)
    {
        // Retrieve candidates and their vote counts for the specified positionId
        // $candidates = Candidates::join('votes', 'candidates.id', '=', 'votes.candidate_id')
        //     ->where('candidates.position_id', $positionId)
        //     ->select('candidates.id', 'candidates.candidate_fname', 'candidates.candidate_lname', \DB::raw('COUNT(votes.id) as votes_count'))
        //     ->groupBy('candidates.id', 'candidates.candidate_fname', 'candidates.candidate_lname')
        //     ->orderBy('votes_count', 'desc')
        //     ->get(); 

            $candidates = Candidates::join('votes', 'candidates.id', '=', 'votes.candidate_id')
                ->where('candidates.position_id', $positionId)
                ->select('candidates.id', 'candidates.candidate_fname', 'candidates.candidate_lname')
                ->selectRaw('COUNT(votes.id) as votes_count')
                ->groupBy('candidates.id', 'candidates.candidate_fname', 'candidates.candidate_lname')
                ->orderByDesc('votes_count')
                ->get();

        // Transform the data into the format expected by the chart
        $dataPoints = [];
        foreach ($candidates as $candidate) {
            $dataPoints[] = [
                'y' => $candidate->votes_count,
                'label' => $candidate->candidate_fname . ' ' . $candidate->candidate_lname,
            ];
        }

        return response()->json($dataPoints);
        // return $candidates;
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
