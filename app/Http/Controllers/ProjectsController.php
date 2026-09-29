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
    public function destroy($id,Request $request){
        DB::table('comments')->where('id',$id)->delete();
        return'deleted';
    }
    public function index1($name){
        return DB::table('comments')->where('name',$name)->get();
    }
    public function store_task(Request $request){
        DB::table('comments')->insert([[
            'task_id'=>$request->task_id,
            'comment_text'=>$request->comment_text,
            'start_date'=>$request->start_date,
            'author'=>$request->author,

        ]]);
        return'sorted';
    }
}


