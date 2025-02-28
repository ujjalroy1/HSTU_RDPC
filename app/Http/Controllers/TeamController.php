<?php
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Payment;



class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.show', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->approve = $request->has('approve') ? 1 : 0;
        $team->payment = $request->has('payment') ? 1 : 0;
        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team updated successfully!');
    }
}
