@extends('templete.templete')
@section('title', 'トップ画面')
@section('body')
    @if ($inputs->confirm == 'ログイン')
        @include('templete.header_login')
    @else
        @include('templete.header')
    @endif
