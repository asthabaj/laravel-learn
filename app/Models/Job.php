<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
    use HasFactory;

    protected $table = 'job_listings';
    //protected $fillable = ['employer_id','title','salary'];
    protected $guarded = [];

    public function employer()  
    {
        return  $this -> belongsTo(Employer::class) ;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id" );
    }
}
