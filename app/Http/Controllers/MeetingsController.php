<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Meeting;

class MeetingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('meetings.meetings', ['meetings' => Meeting::where('user_id', Auth::user()->id)->get()]);
    }

    public function meetingsIndex()
    {
        return view('meetings.book-meeting');
    }

    public function createMeeting(Request $request)
    {
        $request->validate([
            'name' => ['required', 'alpha', "min:5"],
            'description' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
        ]);

        $meeting = Meeting::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => str_replace('/', '-', $request->date . ' ' . $request->time . ':00'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route("meetings");
    }

    public function cancelMeeting(Request $request)
    {
        $request->validate(['id' => ['required']]);

        $meeting = Meeting::find($request->id);
        if ($meeting) {
            $meeting->forceDelete();
        }

        return redirect()->route("meetings");
    }
}
