@extends('layouts.main')
@section('container')
<ul style="list-style-type: none">
<li>
    Name: {{$character->name}}
</li>
<li>
    Age: {{$character->age}}
</li>
<li>
    Gender: {{$character->gender}}
</li>
<li>
    Height: {{$character->height}}
</li>
<li>
    First Appearance: {{$character->first_appearance}}
</li>
</ul>

<a href="/characters/all">Back</a>
@endsection