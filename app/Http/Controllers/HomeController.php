<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInfo;


class HomeController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $person_login = User::where('id', $id)->first();
        if ($person_login->status == 1) {

            $users = User::where('status', 0)->count();
            $contacts  = Contact::count();
            return view('admin.index', compact('users', 'contacts'));
        } elseif ($person_login->status == 0) {
            return view('user.index');
        } else {
            abort(404);
        }
    }
    public function info()
    {
        $user = UserInfo::where('user_id', Auth::user()->id)->first();

        return view('user.user-info', compact('user'));
    }

    public function save_info(Request $request)
    {


        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'academic_year' => 'required',
            'university_id' => 'required',
            'facebook_link' => 'required',
            'mobile' => 'required',
            'reason' => 'required',
            'team' => 'required',
        ]);

        UserInfo::create([
            'user_id' => Auth::user()->id,
            'first_name' => 'required',
            'last_name' => $data['last_name'],
            'age' => $data['age'],
            'academic_year' => $data['academic_year'],
            'university_id' => $data['university_id'],
            'facebook_link' => $data['facebook_link'],
            'mobile' => $data['mobile'],
            'reason' => $data['reason'],
            'team' => $data['team'],

        ]);

        return redirect()->route('home');
    }
}
