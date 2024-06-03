<h2>
    {{$job->title}}
</h2>
<p>
    Congrats! Your job has been posted :D
</p>
<p>
    <a href="{{url('/jobs/'. $job->id)}}">View your Job Listing</a>
</p>