<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/hi', function () {
    return 'Hello world';
});

Route::get('/jobs', function () {
    return view('jobs',[
        //'greeting' => 'hello', //access to $geeting key value pair of arrays
        'jobs' => [//list of jobs
            [
                'id'=>1,
                'title' => 'director',
                'salary' => '$500',
            ],
            [
                'id'=>2,
                'title' => 'programmer',
                'salary' => '$600',
            ],
            [
                'id'=>3,
                'title' => 'teacher',
                'salary' => '$400',
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [//list of jobs
        [
            'id'=>1,
            'title' => 'director',
            'salary' => '$500',
        ],
        [
            'id'=>2,
            'title' => 'programmer',
            'salary' => '$600',
        ],
        [
            'id'=>3,
            'title' => 'teacher',
            'salary' => '$400',
        ],
    ];
    
    $job= \Illuminate\Support\Arr::first($jobs, fn($jobs) => $jobs['id'] == $id);
    return view('job',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});