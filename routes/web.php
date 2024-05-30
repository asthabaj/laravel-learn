<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUSerController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $jobs = Job::all();
//     dd($jobs[0] -> title);
// });

Route::view('/','home');
// Route::get('/', function () {
//     return view('home');
// }); same as this


// //Index
// Route::get('/jobs', [JobController::class,'index']

// );

// //Create jobs
// Route::get('/jobs/create',[JobController::class,'create']);

// //store new job
// route::post('/jobs',[JobController::class,'store']);

// //Show a job
// Route::get('/jobs/{job}', [JobController::class,'show']);//wildcard generally bottom

// //update
// Route::patch('/jobs/{job}', [JobController::class,'update']);

// //destroy
// Route::delete('/jobs/{job}', [JobController::class,'destroy']);

// //edit
// Route::get('/jobs/{job}/edit', [JobController::class,'edit']);

Route::resource('jobs',JobController::class);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact','contact');

//Auth
Route::get('/register',[RegisteredUserController::class,'create']);

Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);

Route::post('/login',[SessionController::class,'store']);

Route::post('/logout',[SessionController::class,'destroy']);
