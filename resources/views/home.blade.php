<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Klassy Cafe - Restaurant HTML Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-Klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/Klassy-logo.png" align="Klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                        
                        <!-- Cart Icon with Modal Trigger -->
                        <li class="nav-item position-relative">
    @auth
        <a href="{{ url('cartshow', [Auth::user()->id]) }}" class="nav-link d-flex align-items-center position-relative">
    @else
        <a href="{{ url('login') }}" class="nav-link d-flex align-items-center position-relative">
    @endauth
            <img src="https://cdn-icons-png.flaticon.com/512/107/107831.png" alt="Cart" width="30" class="me-1">
            @auth
                <span class="badge bg-primary text-white position-absolute top-0 start-100 translate-middle rounded-pill">{{$count}}</span>
            @endauth  
            @guest
                <span class="badge bg-primary text-white position-absolute top-0 start-100 translate-middle rounded-pill">0</span>
            @endguest                 
        </a>
</li>


                        </li> 

                        <!-- Authentication Links -->
                        <li>
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <li><x-app-layout></x-app-layout></li>
                                @else
                                    <li><a href="{{ route('login') }}">Log in</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                    </ul>        
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>At Klassy Cafe, we create unforgettable dining experiences where every bite leaves a lasting memory. Our specially crafted dishes are made with fresh ingredients and a perfect blend of flavors. Come and be a part of an extraordinary taste journey!</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
     @include('food')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
     @include('chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">+92303-12345678</a><br><a href="#">+92303-12345678</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">ahmed@gmail.com</a><br><a href="#">Asad@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('reservation')}}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number_guests" id="number-guests">
                                    <option value="number-guests">Number Of Guests</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time">Time</option>
                                    <option name="Breakfast" id="Breakfast">Breakfast</option>
                                    <option name="Lunch" id="Lunch">Lunch</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
    <section class='tabs-content'>
        <article id='tabs-1'>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="left-list">
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-01.png" alt="">
                                    <h4>Fresh Chicken Salad</h4>
                                    <p>Fresh chicken ke juicy pieces, crisp lettuce aur special dressing ka zabardast combination.</p>
                                    <div class="price">
                                        <h6>$10.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-02.png" alt="">
                                    <h4>Orange Juice</h4>
                                    <p>Freshly squeezed oranges ka 100% natural juice jo refreshment ka behtareen zariya hai.</p>
                                    <div class="price">
                                        <h6>$8.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-03.png" alt="">
                                    <h4>Fruit Salad</h4>
                                    <p>Seasonal fruits ka healthy aur tasty mix, jo har bite ko lajawab banata hai.</p>
                                    <div class="price">
                                        <h6>$9.90</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="right-list">
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-04.png" alt="">
                                    <h4>Eggs Omelette</h4>
                                    <p>Fluffy omelette jo fresh eggs aur herbs ke saath tayar hota hai.</p>
                                    <div class="price">
                                        <h6>$6.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-05.png" alt="">
                                    <h4>Dollma Pire</h4>
                                    <p>Traditional stuffed dish jo mouth-watering flavors se bhari hui hai.</p>
                                    <div class="price">
                                        <h6>$5.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-06.png" alt="">
                                    <h4>Omelette & Cheese</h4>
                                    <p>Creamy cheese aur perfectly cooked omelette ka lajawab combination.</p>
                                    <div class="price">
                                        <h6>$4.10</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>  
        <article id='tabs-2'>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="left-list">
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-04.png" alt="">
                                    <h4>Eggs Omelette</h4>
                                    <p>Golden brown omelette jo energy aur taste ka perfect blend hai.</p>
                                    <div class="price">
                                        <h6>$14</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-05.png" alt="">
                                    <h4>Dollma Pire</h4>
                                    <p>Traditional dish jo spices aur fresh ingredients se bharpoor hai.</p>
                                    <div class="price">
                                        <h6>$18</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-06.png" alt="">
                                    <h4>Omelette & Cheese</h4>
                                    <p>Cheese se loaded omelette jo breakfast ke liye ek behtareen choice hai.</p>
                                    <div class="price">
                                        <h6>$22</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="right-list">
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-01.png" alt="">
                                    <h4>Fresh Chicken Salad</h4>
                                    <p>Light aur nutritious chicken salad jo healthy aur tasty dono hai.</p>
                                    <div class="price">
                                        <h6>$10</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-02.png" alt="">
                                    <h4>Orange Juice</h4>
                                    <p>Sweet aur tangy orange juice jo natural freshness ka maza deta hai.</p>
                                    <div class="price">
                                        <h6>$20</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-item">
                                    <img src="assets/images/tab-item-03.png" alt="">
                                    <h4>Fruit Salad</h4>
                                    <p>Delicious aur colorful fruit salad jo vitamins se bharpoor hai.</p>
                                    <div class="price">
                                        <h6>$30</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>  
    </section>
</div>
                                <article id='tabs-3'>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="left-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-05.png" alt="">
                            <h4>Eggs Omelette</h4>
                            <p>Fluffy eggs omelette served with crispy toast and fresh herbs.</p>
                            <div class="price">
                                <h6>$14</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-03.png" alt="">
                            <h4>Orange Juice</h4>
                            <p>Freshly squeezed orange juice, packed with vitamins and flavor.</p>
                            <div class="price">
                                <h6>$18</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-02.png" alt="">
                            <h4>Fruit Salad</h4>
                            <p>A refreshing mix of seasonal fruits topped with honey and mint.</p>
                            <div class="price">
                                <h6>$10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="right-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-06.png" alt="">
                            <h4>Fresh Chicken Salad</h4>
                            <p>Grilled chicken served on a bed of fresh greens with a light dressing.</p>
                            <div class="price">
                                <h6>$8.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-01.png" alt="">
                            <h4>Pumpkin Soup</h4>
                            <p>Creamy pumpkin soup with a touch of spice, perfect for cozy meals.</p>
                            <div class="price">
                                <h6>$9</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-04.png" alt="">
                            <h4>Omelette & Cheese</h4>
                            <p>Classic omelette stuffed with melted cheese and served with toast.</p>
                            <div class="price">
                                <h6>$11</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright SPJCODER
                        
                        <br>Code by Spjcoder</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>