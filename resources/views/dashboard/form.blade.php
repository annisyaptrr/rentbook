@extends('layouts.main')
@section  ('title', 'form')
@section('content')

<h1>CREATE DATA Books</h1> <br>
<form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="name" class="form-control" id="name" name="title">
    </div>
    <div class="mb-3">
        <label for="writer" class="form-label">Writer</label>
        <input type="writer" class="form-control" id="writer"  name="writer">
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">Publisher</label>
        <input type="publisher" class="form-control" id="publisher"  name="publisher">
    </div>
    <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis</label>
     <textarea class="form-control" id="synopsis" rows="3"  name="synopsis"></textarea> 
    </div>
    <div class="mb-3">
        <label class="form-label">Cover Book</label>
        <input class="form-control" name="image" type="file" required>
      </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection