<?php

namespace App\Http\Controllers\dep;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;

class TodayActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $session = Session::find(session('session_id'));
        return view('dep.todayactivity.index', compact('session'));
    }
}
