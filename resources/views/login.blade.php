@extends('templete.templete')
@section('title', 'ログインフォーム')
@section('body')
    <h1>ログイン</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        {{-- メールアドレス（ID） --}}
        <div class="form_row">
            <p>メールアドレス（ID）</p>
            <input type="text" name="email" value="{{ old('email') }}">
        </div>
        {{-- パスワード --}}
        <div class="form_row">
            <p>パスワード</p>
            <input type="password" name="password_a" value="">
        </div>
        {{-- パスワード再設定画面のリンク --}}
        <div class="form_row">
            <p>　</p>
            <a href="{{ route('reset_password') }}" class="forget_pass">パスワードを忘れた方はこちら</a>
        </div>
        {{-- エラーメッセージ --}}
        @if ($errors->has('email') || $errors->has('password_a'))
            <div class="error">※IDもしくはパスワードが間違っています</div>
        @endif
        {{-- ログイン・戻る --}}
        <div class="button">
            <input type="submit" name="confirm" value="ログイン" class="submit">
            <input type="submit" name="confirm" value="トップに戻る" class="submit_re">
        </div>
    </form>
