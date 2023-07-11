@extends('templete.templete')
@section('title', 'パスワード再設定画面')
@section('body')
    <header></header>
    <p>パスワード再設定用のURLを記載したメールを送信します。</p>
    <p>ご登録されたメールアドレスを入力してください。</p>
    <form action="{{ route('send') }}" method="post">
        @csrf
        {{-- メールアドレス --}}
        <div class="form_row">
            <p>メールアドレス</p>
            <input type="text" name="email" value="{{ old('email') }}">
        </div>
        </div>
        {{-- 送信・戻る --}}
        <div class="button">
            <input type="submit" name="confirm" value="送信する" class="submit">
            <input type="submit" name="confirm" value="トップに戻る" class="submit_re">
        </div>
    </form>
