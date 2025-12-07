<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () 
    {
        return view('home');
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
Route::get('/contact', function()
    {
        return view('contact');
    }
);