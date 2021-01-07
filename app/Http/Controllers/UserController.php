<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        return view('auth\user-settings', ['user' => Auth::user()]);
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'old_password' => ['required', 'current_password:'.$user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'different:old_password'],
            'password_confirmation' => ['required', 'string'],
        ]);

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user-settings')->with('status', 'Hasło zostało zmienione pomyślnie.');
    }
}
