<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function first_login()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->confirm == 'トップに戻る') {
            return redirect()->action('TopController@top');
        }

        $validate_rule = [
            'email' => 'required|exists:members,email',
            'password_a' => 'required|exists:members,password',
        ];

        $this->validate($request, $validate_rule);

        $inputs = DB::table('members')->select('name_sei', 'name_mei')->where('email', $request->email)->first();
        $inputs->confirm = $request->confirm;
        return view('top', ['inputs' => $inputs]);
    }

    public function reset()
    {
        return view('reset.reset_password');
    }

    public function send(Request $request)
    {
        if ($request->confirm == 'トップに戻る') {
            return redirect()->action('TopController@top');
        }
    }
}
