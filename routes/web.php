<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;

// Route::get('/', function () {
//     $jobs = Job::all();
//     dd($jobs[0] -> title);
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/hi', function () {
    return 'Hello world';
});

Route::get('/jobs', function () {
    //$jobs= Job::with('employer')->get();//eager loading jobs along with employer for each
    $jobs= Job::with('employer')->paginate(3);
    return view('jobs',[
        
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
   
    return view('job',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});