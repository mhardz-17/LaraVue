<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return view('projects/index');
    }

    public function getList()
    {
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


        return \response()->json(collect($data));
    }
}
