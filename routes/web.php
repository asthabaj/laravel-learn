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


Route::get('/jobs', function () {
    //$jobs= Job::with('employer')->get();//eager loading jobs along with employer for each
    $jobs= Job::with('employer')->latest()->paginate(3);
    return view('jobs.index',[
        
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
   
    return view('jobs.show',['job' => $job]);
});//wildcard generally bottom

route::post('/jobs',function()
{
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});