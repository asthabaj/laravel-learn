<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUSerController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Faker\Guesser\Name;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('test',function (){
    $job = Job::first();
    TranslateJob::dispatch($job);
    
    return 'done';
});


// Route::get('/', function () {
//     $jobs = Job::all();
//     dd($jobs[0] -> title);
// });

Route::view('/','home');
// Route::get('/', function () {
//     return view('home');
// }); same as this


// //Index
Route::get('/jobs', [JobController::class,'index']);

// //Create jobs
Route::get('/jobs/create',[JobController::class,'create']);

// //store new job
route::post('/jobs',[JobController::class,'store'])
-> middleware('auth');

// //Show a job
Route::get('/jobs/{job}', [JobController::class,'show']);//wildcard generally bottom

// //update
Route::patch('/jobs/{job}', [JobController::class,'update']);

// //destroy
Route::delete('/jobs/{job}', [JobController::class,'destroy']);

// //edit
Route::get('/jobs/{job}/edit', [JobController::class,'edit'])
-> middleware('auth')
->can('edit','job');

// Route::resource('jobs',JobController::class);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact','contact');

//Auth
Route::get('/register',[RegisteredUserController::class,'create']);

Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create'])-> name('login');

Route::post('/login',[SessionController::class,'store']);

Route::post('/logout',[SessionController::class,'destroy']);
