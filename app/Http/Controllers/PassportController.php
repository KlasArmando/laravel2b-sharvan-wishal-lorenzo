<?php

namespace App\Http\Controllers;

use Illuminate\Http\;

class PassportController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\  $
 * @return \Illuminate\Http\Response
 */

public function index()
{
    $passports=\App\Passport::all();
    return view('index',compact('passports'));
}
public function store(Request $request)
{
     return redirect()->back();
}