<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Member;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('member_regist');
    }

    public function confirm(Request $request)
    {
        $valdate_rule = [
            'name_sei' => 'bail|required|max:20',
            'name_mei' => 'bail|required|max:20',
            'nickname' => 'required|max:10',
            'gender' => 'bail|in:1,2|required',
            'password_a' => 'bail|required|min:8|max:20|regex:/^[a-zA-Z0-9]+$/',
            'password_check' => 'bail|required|min:8|max:20|regex:/^[a-zA-Z0-9]+$/|same:password_a',
            'email' => 'required|max:200|email|unique:members,email',
        ];

        $this->validate($request, $valdate_rule);
        $inputs = $request->all();

        return view('confirm', ['inputs' => $inputs]);
    }

    public function complete(Request $request)
    {

        if ($request->confirm === '前に戻る') {
            $inputs = $request->all();
            return redirect()->action('PostController@index')->withInput($inputs);
        }

        // 二重送信防止
        $request->session()->regenerateToken();

        // DBに登録
        $member = new Member();
        $member->name_sei = $request->name_sei;
        $member->name_mei = $request->name_mei;
        $member->nickname = $request->nickname;
        $member->gender = $request->gender;
        $member->password = $request->password_a;
        $member->email = $request->email;
        $member->save();

        // 送信メール
        Mail::to($request->email)->send(new Contact([
            'name_sei' => $request->name_sei,
            'name_mei' => $request->name_mei,
            'nickname' => $request->nickname,
            'gender' => $request->gender,
            'email' => $request->email,
        ]));
        
        return view('complete');
    }
}
