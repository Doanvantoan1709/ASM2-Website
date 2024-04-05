
<!DOCTYPE html>
<html lang="en">

<<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>User Profile</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="/assets1/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="/assets1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/assets1/css/profile.css">



<!-- Custom CSS -->
<link href="/assets1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/assets1/css/ionicons.min.css" rel="stylesheet">
<link href="/assets1/css/main.css" rel="stylesheet">
<link href="/assets1/css/style.css" rel="stylesheet">
<link href="/assets1/css/responsive.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="/js/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap"> 
  
  <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo"> <a href="{{route('home.index')}}"><img class="img-responsive" src="/assets1/images/Logo.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          
           <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li class="dropdown active"> <a href="{{route('home.index')}}" class="dropdown-toggle" >Home</a>
                
              </li>
              <li class="dropdown"> <a href="{{route('home.blog-list')}}" class="dropdown-toggle">Blog</a>
              </li>
              
              <!-- Two Link Option -->
              <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Designer</a>
                <div class="dropdown-menu two-option">
                  <div class="row">
                    <ul class="col-sm-6">
                      <li> <a href="#">summer store</a></li>
                      <li> <a href="#"> sarees</a></li>
                      <li> <a href="#"> kurtas</a></li>
                      <li> <a href="#"> shorts & tshirts</a></li>
                      <li> <a href="#"> winter wear</a></li>
                      <li> <a href="#"> jeans</a></li>
                      <li> <a href="#"> bra</a></li>
                      <li> <a href="#"> babydools</a> </li>
                    </ul>
                    <ul class="col-sm-6">
                      <li> <a href="#">deodornts</a></li>
                      <li> <a href="#"> skin care</a></li>
                      <li> <a href="#"> make up</a></li>
                      <li> <a href="#"> watch</a></li>
                      <li> <a href="#"> siting bags</a></li>
                      <li> <a href="#"> totes</a></li>
                      <li> <a href="#"> gold rings</a></li>
                      <li> <a href="#"> jewellery</a> </li>
                    </ul>
                  </div>
                </div>
              </li>
              
              <!-- MEGA MENU -->
              <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">store</a>
                <div class="dropdown-menu">
                  <div class="row"> 
                    
                    
                    <!-- TOp Rate Products -->
                    <div class="col-md-4">
                      <h6>TOp Rate Products</h6>
                      <div class="top-rated">
                        <ul>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-fluid" style="width: 200px; height: 150px" src="/assets1/images/cart-img-1.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">WOOD CHAIR</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="/assets1/images/cart-img-2.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">STOOL</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="/assets1/images/cart-img-3.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">WOOD SPOON</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <!-- New Arrival -->
                    <div class="col-md-5">
                      <h5>NEW ARRIVAL 2024 <span>(Best Collection)</span></h5>
                      <img class="nav-img" src="/assets1/images/nav-img.png" alt="" >
                      <p>Lorem ipsum dolor sit amet,<br>
                        consectetur adipiscing elit. <br>
                        Donec faucibus maximus<br>
                        vehicula.</p>
                      <a href="{{route('home.shop-product')}}" class="btn btn-small btn-round">SHOP NOW</a> 
                    </div>
                  </div>
                </div>
              </li>
              <li> <a href="{{route('home.contact')}}"> contact</a> </li>
            </ul>
          </div>
          
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                <ul class="dropdown-menu">
                @if(auth('cus')->check())
                  <li>
                    <h6>Hello! {{ auth('cus')->user()->name }}</h6>
                  </li>
                  @endif
                  <li><a href="{{route('account.change-pwd')}}">CHANGE PASSWORD</a></li>
                  <li><a href="{{route('account.profile')}}">ACCOUNT INFO</a></li>
                  <li><a href="{{route('home.index-header')}}">LOG OUT</a></li>
                </ul>
              </li>
              
              <!-- USER BASKET -->
              <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i> </a>
                <ul class="dropdown-menu">         
                  <li class="margin-0">
                    <div class="row">
                      <div class="col-xs-6"> <a href="{{route('cart.index')}}" class="btn">VIEW CART</a></div>
                      <div class="col-xs-6 "> <a href="{{route('order.checkout')}}" class="btn">CHECK OUT</a></div>
                    </div>
                  </li>
                </ul>
              </li>
              
              <!-- SEARCH BAR -->
              <li class="dropdown"> <a href="javascript:void(0);" class="search-open"><i class=" icon-magnifier"></i></a>
                <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                  <div class="search-overlay"></div>
                  <div class="position-center-center">
                    <div class="search">
                      <form>
                        <input type="search" placeholder="Search Shop">
                        <button type="submit"><i class="icon-check"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  

  
  <!-- Content -->
            
  <form action="" method="post">
        @csrf
            <div class="PF">
                <div class="row">
                <div class="row">
    <div class="col-md-4 border-right d-flex align-items-center justify-content-center">
        <div class="text-center p-3 py-5">
            <img class="user" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold"></span>
            <span class="text-black-50"></span>
        </div>
    </div>
    <div class="col-md-6 border-right">
        <div class="p-3 py-5 d-flex flex-column justify-content-between">
            <div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Profile Settings</h2>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Full name</label><input type="text" class="form-control" placeholder="enter full name" name="name"  value="{{ $auth->name }}" required="true"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input readonly type="text" class="form-control" placeholder="enter e-mail" name="email"  value="{{ $auth->email }}"></div>
                    <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" placeholder="enter phone number" name="phone" value="{{ $auth->phone }}" required="true"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" name="address" value="{{ $auth->address }}" required="true"></div>
                </div>
            </div>
            <div class="mt-5 text-center"><button class="profile-button" type="submit">Save Profile</button></div>
        </div>
    </div>
</div>

                </div>
            </div>
    </form>
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
      
      <!-- Location -->
      <div class="col-md-3">
        <div class="about-footer"> <img class="margin-bottom-30" src="" alt="" >
          <p><i class="icon-pointer"></i> No. 81 adjacent to 23, Van Canh urban area, <br>  Van Canh commune, Hoai Duc district, Hanoi city.
</p>
          <p><i class="icon-call-end"></i>  0967.327.356</p>
          <p><i class="icon-envelope"></i> Doanvantoan3365@gmail.com</p>
        </div>
      </div>
      
      <!-- HELPFUL LINKS -->
      <div class="col-md-3">
        <h6>HELPFUL LINKS</h6>
        <ul class="link">
          <li><a href="#."> Products</a></li>
          <li><a href="#."> Find a Store</a></li>
          <li><a href="#."> Features</a></li>
          <li><a href="#."> Privacy Policy</a></li>
          <li><a href="#."> Blog</a></li>
          <li><a href="#."> Press Kit </a></li>
        </ul>
      </div>
      
      <!-- SHOP -->
      <div class="col-md-3">
        <h6>SHOP</h6>
        <ul class="link">
          <li><a href="#."> About Us</a></li>
          <li><a href="#."> Career</a></li>
          <li><a href="#."> Shipping Methods</a></li>
          <li><a href="#."> Contact</a></li>
          <li><a href="#."> Support</a></li>
          <li><a href="#."> Retailer</a></li>
        </ul>
      </div>
      
      <!-- MY ACCOUNT -->
      <div class="col-md-3">
        <h6>MY ACCOUNT</h6>
        <ul class="link">
          <li><a href="#."> Login</a></li>
          <li><a href="#."> My Account</a></li>
          <li><a href="#."> My Cart</a></li>
          <li><a href="#."> Wishlist</a></li>
          <li><a href="#."> Checkout</a></li>
        </ul>
      </div>
      
      <!-- Rights -->
      <div class="rights">
        <p>©  2024 yunoshop All right reserved.</p>
        <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
      </div>
    </div>
  </footer>  
</div>
<script src="/assets1/js/jquery-1.11.3.min.js"></script> 
<script src="/assets1/js/bootstrap.min.js"></script> 
<script src="/assets1/js/own-menu.js"></script> 
<script src="/assets1/js/jquery.lighter.js"></script> 
<script src="/assets1/js/owl.carousel.min.js"></script> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="/assets1/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="/assets1/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="/assets1/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>

@if(Session::has('ok'))
        <script>
            alert("Update successful!");
        </script>
        @endif

</body>
</html>