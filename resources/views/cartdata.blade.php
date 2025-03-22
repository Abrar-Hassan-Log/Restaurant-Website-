<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Klassy Cafe - Restaurant</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>

<!-- ***** Header Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav d-flex justify-content-between align-items-center">
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" alt="Klassy Cafe">
                    </a>

                    <ul class="nav">
                        <li><a href="#top" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#chefs">Chefs</a></li>
                        <li><a href="#reservation">Contact</a></li>

                        <!-- Cart -->
                        <li class="nav-item position-relative px-3">
                            @auth
                                <a href="{{ url('cartshow', Auth::user()->id) }}" class="nav-link">
                            @else
                                <a href="{{ url('login') }}" class="nav-link">
                            @endauth
                                    <img src="https://cdn-icons-png.flaticon.com/512/107/107831.png" alt="Cart" width="30">
                                    @auth
                                        <span class="badge bg-primary position-absolute top-0 start-100 translate-middle rounded-pill">{{$count}}</span>
                                    @endauth  
                                    @guest
                                        <span class="badge bg-primary text-white position-absolute top-0 start-100 translate-middle rounded-pill">0</span>
                                    @endguest                 
                                </a>
                        </li>

                        <!-- Authentication -->
                        <li>
                            @if (Route::has('login'))
                                @auth
                                    <li><x-app-layout></x-app-layout></li>
                                @else
                                    <li><a href="{{ route('login') }}">Log in</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </li>
                    </ul>        
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header End ***** -->

<!-- ***** Table Section ***** -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Team</h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle shadow-lg rounded-3 table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody class="p-3">
                @foreach($data as $datas)
                <tr>
                    <td>{{$datas->title}}</td>
                    <td>{{$datas->price}}</td>
                    <td>{{$datas->quantity}}</td>
                </tr>
                @endforeach
        </tbody>
        </table>
    </div>
</div>

</body>
</html>
