<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $projects = Project::all()->toArray();
        return view('projects/index',compact('projects'));
    }

    public function getList(Request $request)
    {

        return \response()->json(['projects' => Project::all()->toArray()]);

        $page = $request->get('page', 1);
        if($page == 1) {
            $data = [
                'projects' => [
                    [
                        'id' => 1,
                        'title' => 'Hello World',
                        'description' => 'Hhahaha this a test that i just want to do something to make it work hahaha',
                        'start_date' => Carbon::now()->toDateString(),
                        'end_date' => Carbon::now()->toDateString(),
                        'member_count' => 15,
                        'total_task' => 10,
                        'completed_task_count' => 5,
                    ],
                    [
                        'id' => 2,
                        'title' => 'Hello World',
                        'description' => 'Hhahaha this a test that i just want to do something to make it work hahaha',
                        'start_date' => Carbon::now()->toDateString(),
                        'end_date' => Carbon::now()->toDateString(),
                        'member_count' => 15,
                        'total_task' => 10,
                        'completed_task_count' => 5,
                    ]
                ]
            ];
        } else {
            $data = [
                'projects' => [
                    [
                        'id' => 1,
                        'title' => 'Page 2 Desu',
                        'description' => 'Hhahaha this a test that i just want to do something to make it work hahaha',
                        'start_date' => Carbon::now()->toDateString(),
                        'end_date' => Carbon::now()->toDateString(),
                        'member_count' => 15,
                        'total_task' => 10,
                        'completed_task_count' => 5,
                    ],
                    [
                        'id' => 2,
                        'title' => 'Hello World in Page 2',
                        'description' => 'Hhahaha this a test that i just want to do something to make it work hahaha',
                        'start_date' => Carbon::now()->toDateString(),
                        'end_date' => Carbon::now()->toDateString(),
                        'member_count' => 15,
                        'total_task' => 10,
                        'completed_task_count' => 5,
                    ]
                ]
            ];
        }



        return \response()->json($data);
    }
}
