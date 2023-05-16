@extends('layouts.main')

@section('title', 'user')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">No_Hp</th>
      <th scope="col">Addres</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach($data as $data)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->no_hp}}</td>
      <td>{{$data->addres}}</td>
      <td>
      <form action="{{route('indexEditUser', $data->id)}}" class="d-inline" >
            <button class="btn btn-outline-success">Edit</button>
            @csrf
          </form>
          <form action="{{route('delete', $data->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">    
            <button class="btn btn-outline-danger" >Delete</button>
            @csrf
          </form>
      </td>
        
      @endforeach
    </tr>
  </tbody>
</table>
@endsection