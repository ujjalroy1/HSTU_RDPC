<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Payment;
use App\Mail\TeamRegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
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
    /////registration


    public function registration_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) // Send errors to the view
                ->withInput(); // Keep old input values
        }

        // If validation passes, save the team
        $team = Team::create($request->all());

        // Collect email recipients
        $emails = [$team->coach_email, $team->member1_email];
        if (!empty($team->member2_email)) $emails[] = $team->member2_email;
        if (!empty($team->member3_email)) $emails[] = $team->member3_email;

        // Send email to all
        foreach ($emails as $email) {
            Mail::to($email)->send(new TeamRegistrationMail($team));
        }

        return redirect()->back()->with('success', 'Team Registered Successfully');
    }

    public function registration_list()
    {
        $teams = Team::where('approve', 1)->get();

        return view('reg.list', compact('teams'));
    }
    ///////payment
    public function payment_create()
    {
        $approvedTeams = Team::where('approve', 1)->pluck('team_name', 'id'); // Fetch approved teams
        return view('reg.payment_create', compact('approvedTeams'));
    }

    public function payment_save(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'payment_from' => 'required|string|max:255',
            'payment_to' => 'required|string|max:255',
            'transaction_id' => 'required|string|max:255|unique:payments'
        ]);

        $team = Team::findOrFail($request->team_id);

        Payment::create([
            'team_name' => $team->team_name,
            'payment_from' => $request->payment_from,
            'payment_to' => $request->payment_to,
            'transaction_id' => $request->transaction_id,
            'approved' => 0 // Default is 0 (pending)
        ]);

        return redirect()->back()->with('success', 'Payment information submitted successfully!');
    }
    public function schedule()
    {
        return view('home.schedule');
    }
    public function gellary()
    {
        return view('home.gellary');
    }
    public function contact()
    {
        return view('home.contact');
    }


    public function project_showcase()
    {
       
        $startDate = Carbon::create(2025, 3, 5, 0, 0, 0, config('app.timezone'));
        $endDate = Carbon::create(2025, 3, 10, 23, 59, 59, config('app.timezone'));
        $currentTime = now();
    
       
        $registrationStatus = 'closed';
        
        if ($currentTime->lessThan($startDate)) {
            $registrationStatus = 'pending';
        } elseif ($currentTime->between($startDate, $endDate)) {
            $registrationStatus = 'open';
        }
    
        // Pass Carbon instances to the view
        return view('reg.project_showcase', compact('registrationStatus', 'startDate', 'endDate'));
    }
    public function gaming_contest()
    {

        $startDate = Carbon::create(2025, 3, 3, 0, 0, 0, config('app.timezone'));
        $endDate = Carbon::create(2025, 3, 10, 23, 59, 59, config('app.timezone'));
        $currentTime = now();
    
       
        $registrationStatus = 'closed';
        
        if ($currentTime->lessThan($startDate)) {
            $registrationStatus = 'pending';
        } elseif ($currentTime->between($startDate, $endDate)) {
            $registrationStatus = 'open';
        }
    
        // Pass Carbon instances to the view
        return view('reg.gaming_contest', compact('registrationStatus', 'startDate', 'endDate'));




    }
    public function poster_presentation()
    {

        $startDate = Carbon::create(2025, 3, 3, 0, 0, 0, config('app.timezone'));
        $endDate = Carbon::create(2025, 3, 10, 23, 59, 59, config('app.timezone'));
        $currentTime = now();
    
       
        $registrationStatus = 'closed';
        
        if ($currentTime->lessThan($startDate)) {
            $registrationStatus = 'pending';
        } elseif ($currentTime->between($startDate, $endDate)) {
            $registrationStatus = 'open';
        }
    
        // Pass Carbon instances to the view
        return view('reg.poster_presentation', compact('registrationStatus', 'startDate', 'endDate'));


    }
    public function itquiz()
    {
        $startDate = Carbon::create(2025, 3, 3, 0, 0, 0, config('app.timezone'));
        $endDate = Carbon::create(2025, 3, 10, 23, 59, 59, config('app.timezone'));
        $currentTime = now();
    
       
        $registrationStatus = 'closed';
        
        if ($currentTime->lessThan($startDate)) {
            $registrationStatus = 'pending';
        } elseif ($currentTime->between($startDate, $endDate)) {
            $registrationStatus = 'open';
        }
    
        // Pass Carbon instances to the view
        return view('reg.itquiz', compact('registrationStatus', 'startDate', 'endDate'));


    }
    public function main_registration()
    {
        return view('reg.main_registration');
    }
}
