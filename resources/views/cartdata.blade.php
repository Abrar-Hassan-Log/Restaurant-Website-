<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Klassy Cafe - Restaurant</title>
    <!-- Bootstrap JS (Required for Modal) -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

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
                        <li>
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
<i class="fa fa-shopping-cart"></i>
    Order Now
</button>


                        </li>
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

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('conformOder',Auth::user()->id)}}" method="POST">
            @csrf
          <!-- Name Field -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>

          <!-- Email Field -->
          <div class="mb-3">
            <label for="number" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phonenumber" name="phone" placeholder="Enter your phone number">
          </div>

          <!-- Message Field -->
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary" >Order Confirm</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ***** Table Section ***** -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Team</h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle shadow-lg rounded-3 table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="p-3">
                @foreach($data as $datas)
                <tr>
                    <td>{{$datas->cart_id}}</td>  
                    <td>{{$datas->title}}</td>
                    <td>{{$datas->price}}</td>
                    <td>{{$datas->quantity}}</td>
                    <td>
                    <a href="{{url('remove',$datas->cart_id)}}" class="btn-danger btn-d btn-sm delete-btn">Delete</a>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
