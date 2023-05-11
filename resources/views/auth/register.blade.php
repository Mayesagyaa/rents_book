@extends('layouts.main')
@section('konten')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-register">
                        <form action="{{route('registerStore')}}" method="POST">
                            @csrf {{-- biar kekirim --}}
                            <h1 class="h3 mb-9 fw-normal p-4 row justify-content-center "> Form Register</h1>

                            <div class="form-floating">
                                <input type="name" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" name="no_hp" class="form-control mt-2" id="no_hp" placeholder="no_hp">
                                <label for="no_hp">Phone</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="address" class="form-control mt-2" id="address" placeholder="address">
                                <label for="address">Address</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                            
                        </form>
                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection
