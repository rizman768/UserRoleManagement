<?php

namespace App\Http\Controllers;
use App\Models\LogActivity;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(Request $request)
    {
        $data = LogActivity::orderBy('id','DESC')->paginate(5);
        return view('logs.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
