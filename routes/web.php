<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () 
    {
        return view('home', ['greeting' => 'Hello']);
    }
);
Route::get('/jobs', function(){
        return view('jobs', [
            'jobs' => Job::allJobs()
        ]);
    }
);

Route::get('/jobs/{id}', function($id) { //when laravel sees something in {} it knows it's a wild card
        $job = Job::findJob($id);
        return view('job',['job' => $job]);
    }
);

Route::get('/contact', function()
    {
        return view('contact');
    }
);