@extends('layouts.master')
@section('title', 'Edit Index')
@section('content')

<form action="{{route('updateIndex' , $data->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name" value="{{$data->name}}" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{$data->email}}" name="email">
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No. Hp</label>
        <input type="no_hp" class="form-control" id="no_hp" value="{{$data->no_hp}}" name="no_hp">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="address" class="form-control" id="address" value="{{$data->address}}" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection