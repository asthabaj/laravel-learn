<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// class Job extends{
//     public static function all(): array
//     {
//     //  return (
//     //       [//list of jobs
//     //         //'greeting' => 'hello', //access to $geeting key value pair of arrays
//     //         [
//     //             'id'=>1,
//     //             'title' => 'director',
//     //             'salary' => '$500',
//     //         ],
//     //         [
//     //             'id'=>2,
//     //             'title' => 'programmer',
//     //             'salary' => '$600',
//     //         ],
//     //         [
//     //             'id'=>3,
//     //             'title' => 'teacher',
//     //             'salary' => '$400',
//     //         ],
//     //     ]
//     //     );   
//     }
//     public static function find(int $id): array
//     {
//         $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);

//         if (! $job)
//         {
//             abort(404);
//         }
//         return $job;
//     }
// }

class Job extends Model{
    protected $table = 'job_listings';
    protected $fillable = ['title','salary'];
}