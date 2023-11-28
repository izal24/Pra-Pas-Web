@extends('layouts.main')
@section('container')
<ul style="list-style-type: none">
<li>
    Name: {{$author->name}}
</li>
<li>
    Date of birth: {{$author->date_of_birth}}
</li>
<li>
    Background: {{$author->background}}
</li>
<li>
    Total Comics: {{$author->number_of_comics}}
</li>
<li>
    Popular Comics: {{$author->popular_comics}}
</li>
</ul>

<a href="/author/all">Back</a>
@endsection