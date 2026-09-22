<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index(){
        return DB::table('projects')->get();
    }

    public function store(Request $request){
        DB::table('projects')->insert([[
            'name'=>$request->name,
            'description'=>$request->description,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status,
        ]]);
        return'sorted';
    }


}


