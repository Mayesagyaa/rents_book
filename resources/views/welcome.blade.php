<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/books-emoji.png') }}" alt="Logo" width="40" height="34"
                    class="d-inline-block align-text-top ">
                Rent Books
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Fiction</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Non-fiction</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Novel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @if(Auth::user())
                        <a class="nav-link btn btn-white active" href="/logout">Logout</a>
                        @else
                        <a class="nav-link btn btn-white active" href="/login">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->

    <!--carousel-->
    <div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-width: 100%"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="https://i.pinimg.com/564x/d1/4a/d3/d14ad3ca9bd9d02eed6919c0340309ab.jpg" class="d-block w-100"
                    alt="..." style="max-height: 400px;">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="https://i.pinimg.com/564x/d1/4a/d3/d14ad3ca9bd9d02eed6919c0340309ab.jpg" class="d-block w-100"
                    alt="..." style="max-height: 400px;">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="https://i.pinimg.com/564x/d1/4a/d3/d14ad3ca9bd9d02eed6919c0340309ab.jpg" class="d-block w-100"
                    alt="..." style="max-height: 400px;">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--end carousel-->

    <!-- jumbotron -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <h2>Rent Books</h2>
                <a href="/index-register" class="btn btn-outline-success">Register now!</a>
            </div>
            <div class="col-7">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates odit vel, harum, nostrum deserunt
                    cupiditate assumenda eligendi facere debitis, cum optio minus quos corrupti tempora illum veniam
                    voluptatem voluptatibus tempore?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, rerum. Atque quibusdam numquam
                    porro perferendis ab unde tempore
                    eligendi, recusandae molestiae consectetur, nemo ipsum nobis quasi animi minus hic sed.</p>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- popular books card -->
    <section style="background-color: whitesmoke;">
        <div class="container my-5">
            <div class="row text-center">
                <h2>Popular books</h2>
                <hr class="solid">
            </div>
            <div class="row my-4 ms-5">
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.pinimg.com/564x/e4/f6/c3/e4f6c3d24bc1292d28f3d11f70bdea9d.jpg"
                            class="card-img-top" alt="..." style="max-height: 400px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.pinimg.com/564x/22/63/82/226382aa5680ba4c76a8c6697bbe4321.jpg"
                            class="card-img-top" alt="..." style="max-height: 400px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.pinimg.com/564x/50/d1/2b/50d12b0aa26bf8bdd900d043b11a29a6.jpg"
                            class="card-img-top" alt="..." style="max-height: 400px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
    </section>
    </div>
    </div>
    <!-- end popular books card -->

    {{-- messege --}}
    <div class="contaiter">
        <div class="row text-center">
            <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Messege</label>
                        <textarea type="message" name="message" class="form-control" id="message"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    {{-- akhir messege --}}


    {{-- footer --}}
    <footer class="mt-5 bg-secondary text-center" style="height: 40px;">
        <p>Created by <a href="#" style="text-decoration: none; color: white" target="_blank">
                mayesa agya dwisa</a></p>
    </footer>
    {{-- akhir footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>

</html>
