@extends ('layouts.main')
@section ('container')

<h1>Data Character</h1>

<table class="table">
<thead class="table-dark">
    <th>Character Name</th>
    <th>Character Gender</th>
    <th>Action</th>
    </thead>
    @foreach ($characters as $character)
    <tbody>
        <td>{{$character["name"]}}</td>
        <td>{{$character["gender"]}}</td>
        <td>
        <a type="button" href="/characters/detail{{$character->id}}"  class="btn btn-primary"  style="color: black">Detail</a>
        </td>
    </tbody>
    @endforeach
@endsection