@extends ('layouts.main')
@section ('container')

<h1>Data Komik</h1>

<table class="table">
<thead class="table-dark">
    <th>Title</th>
    <th>Category</th>
    <th>Action</th>
    </thead>
    @foreach ($komik as $komiks)
    <tbody>
        <td>{{$komiks["title"]}}</td>
        <td>{{$komiks["category"]}}</td>
        <td>
            <a type="button" href="/komik/detail{{$komiks->id}}"  class="btn btn-primary"  style="color: black">Detail</a></td>
    </tbody>
    @endforeach
@endsection