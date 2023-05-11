@extends('layouts.master')
@section('title', 'User',)
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">No.hp</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
        @foreach($data as $dt)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$dt->name}}</td>
        <td>{{$dt->email}}</td>
        <td>{{$dt->no_hp}}</td>
        <td>{{$dt->address}}</td>
        <td>
          <form action="{{route('indexEditUser', $dt->id)}}" class="d-inline">
            <button type="submit" class="btn btn-outline-success">Edit</button>
            @csrf
          </form>
          <form action="{{route('delete', $dt->id)}}" method="post" class="d-inline" onsubmit="return confirm('are you sure to delete this data?')">
            <button type="submit" class="btn btn-outline-danger">Delete</button>
            @csrf
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection