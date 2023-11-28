@extends ('layouts.main')
@section ('container')

<h1>Data Author</h1>

<table class="table">
<thead class="table-dark">
    <th>Author Name</th>
    <th>Author Total Comics</th>
    <th>Action</th>
    </thead>
    @foreach ($author as $authors)
    <tbody>
        <td>{{$authors["name"]}}</td>
        <td>{{$authors["number_of_comics"]}}</td>
        <td>
        <a type="button" href="/author/detail{{$authors->id}}"  class="btn btn-primary"  style="color: black">Detail</a>
         
        </td>
    </tbody>
    @endforeach
@endsection