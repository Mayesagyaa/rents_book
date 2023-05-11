@extends('layouts.master')

@section('title', 'book')
@section('content')
<h1>Books</h1>

<form action="{{route('add')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center> Add New Book's</center>
            </h1>
            <br>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Title Book</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Add Title Book" value="">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Writer</label>
                    <input type="text" class="form-control" id="writer" name="writer" placeholder="Add Writer" value="">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Add Publisher" value="">
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Synopsis</label>
                    <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Add Synopsis" value="">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Cover Book</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Add Cover Book" value="">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary bi bi-plus">Add</button>
                </div>
            </form>
        </div>
</form>
        @endsection