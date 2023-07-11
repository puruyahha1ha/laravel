<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class TopController extends Controller
{
    public function top() {
        $inputs = new stdClass();
        $inputs->confirm = '';
        return view('top', ['inputs' => $inputs]);
    }
}
