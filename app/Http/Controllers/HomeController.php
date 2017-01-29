<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Flash;
use App\Http\Requests;
use App\Patient;
use App\Date;
use App\Objective;
use App\Assessment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retrieves = Patient::with('assessments')->get();
        // echo json_encode($retrieves);
        // foreach ($retrieves as $info ) {
        //     $test = $info->assessments->first();
        //     echo $test['assessment'];
        // }
        return view('home', compact('retrieves'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        $datas = new Patient;
        $datas->lastname=$request->Input('lastname');
        $datas->firstname=$request->Input('firstname');
        $datas->middlename=$request->Input('middlename');
        $datas->age=$request->Input('age');
        $datas->sex=$request->Input('sex');
        $datas->civilstatus=$request->Input('civilstatus');
        $datas->address=$request->Input('address');
        $datas->contact=$request->Input('contact');
        $datas->occupation=$request->Input('occupation');
        $datas->save();
        
        flash()->success('Patient\'s information successfully added to our database');
        return back()->withInput();
    }
}
