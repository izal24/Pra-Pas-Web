@extends('layouts.main')
@section('container')
<ul style="list-style-type: none">
<li>
    Title: {{$komik->title}}
</li>
<li>
    Category: {{$komik->category}}
</li>
<li>
    Total Chapters: {{$komik->total_chapters}}
</li>
<li>
    Genre: {{$komik->genre}}
</li>
<li>
    Release Date: {{$komik->release_date}}
</li>
</ul>

<a href="/komik/all">Back</a>
@endsection