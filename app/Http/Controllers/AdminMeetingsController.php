<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\UnregisteredMeeting;
use App\Models\Meeting;

class AdminMeetingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.meetings', ['meetings' => Meeting::all()->all(), 'unregisteredMeetings' => UnregisteredMeeting::all()->all()]);
    }

    public function bookMeetingIndex()
    {
        return view('admin.book-meeting');
    }

    public function createMeeting(Request $request)
    {
        $request->validate([
            'name' => ['required', 'alpha_spaces', "min:5"],
            'description' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'firstname' => ['required', 'alpha'],
            'lastname' => ['required', 'alpha'],
            'phone_number' => ['required', 'string', 'numeric', 'min:9'],
            'petname' => ['required', 'alpha_spaces'],
        ]);

        $meeting = UnregisteredMeeting::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => str_replace('/', '-', $request->date . ' ' . $request->time . ':00'),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone_number' => $request->phone_number,
            'petname' => $request->petname,
        ]);

        return redirect()->route("admin-meetings");
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
