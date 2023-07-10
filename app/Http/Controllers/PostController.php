<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('member_regist');
    }
    public function index1(Request $request)
    {
        return view('confirm');
    }

    public function post(Request $request)
    {
        $valdate_rule = [
            'name_sei' => 'bail|required|max:20',
            'name_mei' => 'bail|required|max:20',
            'nickname' => 'required|max:10',
            'gender' => 'bail|in:1,2|required',
            'password_a' => 'bail|required|min:8|max:20|regex:/^[a-zA-Z0-9]+$/',
            'password_check' => 'bail|required|min:8|max:20|regex:/^[a-zA-Z0-9]+$/|same:password_a',
            'email' => 'required|max:200|email',
        ];

        $this->validate($request, $valdate_rule);
        $inputs = $request->all();

        return view('confirm', ['inputs' => $inputs]);
    }
}
