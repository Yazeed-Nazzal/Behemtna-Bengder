<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
