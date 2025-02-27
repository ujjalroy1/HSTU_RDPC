<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        return view('home.index');
    }
    public function registration()
    {
        return view('reg.reg_form');
    }
    public function registration_save(Request $request)
    {
        $request->validate([
            'institution' => 'required|string|max:255',
            'team_name' => 'required|string|max:255',

            'member1_name' => 'required|string|max:255',
            'member1_id' => 'required|string|unique:teams,member1_id',
            'member1_email' => 'required|email|unique:teams,member1_email',
            'member1_phone' => 'required|string|max:15',
            'member1_tshirt_size' => 'required|string',

            'member2_id' => 'nullable|string|unique:teams,member2_id',
            'member2_email' => 'nullable|email|unique:teams,member2_email',
            'member2_tshirt_size' => 'nullable|string',

            'member3_id' => 'nullable|string|unique:teams,member3_id',
            'member3_email' => 'nullable|email|unique:teams,member3_email',
            'member3_tshirt_size' => 'nullable|string',

            'coach_name' => 'required|string|max:255',
            'coach_email' => 'required|email|unique:teams,coach_email',
            'coach_phone' => 'required|string|max:15',
            'coach_tshirt_size' => 'required|string',
        ]);

        Team::create($request->all());

        return redirect()->back()->with('success', 'Team Registered Successfully');
    }
    public function registration_list()
    {
        $teams = Team::where('approve', 1)->get();

        return view('reg.list', compact('teams'));
    }
}
