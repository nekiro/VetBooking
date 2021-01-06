<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Meeting;
use App\Models\MeetingState;

class MeetingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $meetings = Meeting::where('phone_number', Auth::user()->phone_number)->where('state', MeetingState::ACTIVE)->get();
        return view('meetings.meetings', ['meetings' => $meetings]);
    }

    public function bookMeetingIndex()
    {
        return view('meetings.book-meeting');
    }

    public function createMeeting(Request $request)
    {
        $request->validate([
            'name' => ['required', 'alpha_spaces', "min:5"],
            'description' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'petname' => ['required', 'alpha_spaces'],
        ]);

        $user = Auth::user();

        $meeting = Meeting::create([
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'phone_number' => $user->phone_number,
            'name' => $request->name,
            'description' => $request->description,
            'date' => str_replace('/', '-', $request->date . ' ' . $request->time . ':00'),
            'petname' => $request->petname,
        ]);

        return redirect()->route("meetings");
    }

    public function cancelMeeting(Request $request)
    {
        $request->validate(['id' => ['required']]);

        $meeting = Meeting::find($request->id);
        if ($meeting && $meeting->state != MeetingState::CANCELLED) {
            $meeting->state = MeetingState::CANCELLED;
            $meeting->save();
        }

        return redirect()->route("meetings");
    }
}
