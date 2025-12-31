<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () 
    {
        return view('home', ['greeting' => 'Hello']);
    }
);
Route::get('/jobs', function()
    {
        return view('jobs', [
            'jobs' => [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '£50,000.00'
                ],
                [
                    'id' => '2',
                    'title' => 'Programmer',
                    'salary' => '£40,000.00'
                ],
                [
                    'id' => '3',
                    'title' => 'Teacher',
                    'salary' => '£45,000.00'
                ]
            ]
        ]);
    }
);

Route::get('/jobs/{id}', function($id) //when laravel sees something in {} it knows it's a wild card
    {
        $jobs = [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '£50,000.00'
                ],
                [
                    'id' => '2',
                    'title' => 'Programmer',
                    'salary' => '£40,000.00'
                ],
                [
                    'id' => '3',
                    'title' => 'Teacher',
                    'salary' => '£45,000.00'
                ]
                ];
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
        //dd($job);    // dd is dump and die, 'dump the id and kill the execution'
        return view('job',['job' => $job]);
    }
);

Route::get('/contact', function()
    {
        return view('contact');
    }
);