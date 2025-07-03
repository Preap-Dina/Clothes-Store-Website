<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('css/frontend/theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('backend/vendor/css/core.css')}}" class="template-customizer-core-css" />
        <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <style>           
            .simple-footer {
                background-color: #EBEBEB;
                color: gray;
            }
            
            .footer-brand {
                font-size: 1.8rem;
                font-weight: bold;
                color: black;
                margin-bottom: 1rem;
            }
            
            .footer-title {
                font-size: 1.1rem;
                font-weight: 600;
                color: black;
                margin-bottom: 1rem;
                text-transform: uppercase;
            }
            
            .footer-link {
                color: gray;
                text-decoration: none;
                display: block;
                padding: 0.3rem 0;
                transition: color 0.3s ease;
            }
            
            .footer-link:hover {
                color: #e74c3c;
            }
            
            .social-link {
                display: inline-block;
                width: 40px;
                height: 40px;
                background-color: #34495e;
                color: #ecf0f1;
                text-align: center;
                line-height: 40px;
                margin-right: 10px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
            
            .social-link:hover {
                background-color: #e74c3c;
                color: #ffffff;
            }
            
            .newsletter-input {
                border: 1px solid #34495e;
                background-color: #34495e;
                color: #ecf0f1;
                border-radius: 5px;
            }
            
            .newsletter-input:focus {
                border-color: black;
                box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
                background-color: #34495e;
                color: #ecf0f1;
            }
            .newsletter-input::placeholder{
                color: gray;
            }
            
            .newsletter-btn {
                background-color: #e74c3c;
                border-color: #e74c3c;
                border-radius: 5px;
            }
            
            .newsletter-btn:hover {
                background-color: #c0392b;
                border-color: #c0392b;
            }
            
            .footer-bottom {
                background-color: #EBEBEB;
                border-top: 1px solid #34495e;
            }
            
            .payment-icon {
                font-size: 1.5rem;
                margin-right: 15px;
                color: gray;
            }
        </style>
    </head>
    <body>    
        <header>
            <div class="container">
                <div class="logo">
                    <a href="">
                        {{-- <img src="../uploads/{{$Logo[0]->thumbnail}}" width="180px"> --}}
                        <h1>
                            KH FASHION
                        </h1>
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="shop">SHOP</a>
                    </li>
                    <li>
                        <a href="news">NEWS</a>
                    </li>
                </ul>
                <div class="search">
                    <form action="/search" method="get">
                        <input type="text" name="s" class="box" placeholder="SEARCH HERE">
                        <button>
                            <div style="background-image: url(uploads/search.png);
                                        width: 28px;
                                        height: 28px;
                                        background-position: center;
                                        background-size: contain;
                                        background-repeat: no-repeat;
                            "></div>
                        </button>
                    </form>
                </div>
                <div>
                    @auth
                        <div class="d-flex gap-2">
                            {{-- <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('logout') }}">Logout</a></button>                       --}}
                             <li class="list-unstyled nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ Auth::user()->profile }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ Auth::user()->profile }}" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">
                                            @auth
                                            {{ Auth::user()->name }}
                                            @endauth
                                        </span>
                                        <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        </div>
                    @else
                        <div class="border rounded-2 py-2 px-3">
                            <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('login') }}">Login</a></button>
                            <button class="btn btn-light"><a class="text-decoration-none" href="{{ route('register') }}">Signup</a></button>
                        </div>
                    @endauth
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="d-grid flex-column simple-footer py-5">
            <div class="container">
                <div class="row">
                    <!-- Brand Section -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="footer-brand">KH FASHION</div>
                        <p class="mb-4">
                            Your trusted destination for quality fashion and style. 
                            Discover the latest trends at affordable prices.
                        </p>
                        <div>
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Shop Links -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="footer-title">Shop</h5>
                        <a href="#" class="footer-link">Women</a>
                        <a href="#" class="footer-link">Men</a>
                        <a href="#" class="footer-link">Kids</a>
                        <a href="#" class="footer-link">Shoes</a>
                        <a href="#" class="footer-link">Accessories</a>
                        <a href="#" class="footer-link">Sale</a>
                    </div>
    
                    <!-- Customer Service -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="footer-title">Help</h5>
                        <a href="#" class="footer-link">Contact Us</a>
                        <a href="#" class="footer-link">Size Guide</a>
                        <a href="#" class="footer-link">Shipping</a>
                        <a href="#" class="footer-link">Returns</a>
                        <a href="#" class="footer-link">FAQ</a>
                        <a href="#" class="footer-link">Track Order</a>
                    </div>
    
                    <!-- Company -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="footer-title">Company</h5>
                        <a href="#" class="footer-link">About Us</a>
                        <a href="#" class="footer-link">Careers</a>
                        <a href="#" class="footer-link">Press</a>
                        <a href="#" class="footer-link">Privacy</a>
                        <a href="#" class="footer-link">Terms</a>
                    </div>
    
                    <!-- Newsletter -->
                    <div class="col-lg-3 col-md-12 mb-4">
                        <h5 class="footer-title">Newsletter</h5>
                        <p class="mb-3">Subscribe for updates and exclusive offers!</p>
                        <form>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control newsletter-input" placeholder="Your email">
                                <button class="btn btn-primary newsletter-btn" type="submit">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                        
                        <!-- Contact Info -->
                        <div class="mt-4">
                            <p class="mb-2">
                                <i class="fas fa-phone me-2"></i>
                                (+855) 82-837-1919
                            </p>
                            <p class="mb-2">
                                <i class="fas fa-envelope me-2"></i>
                                khfashion@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Footer Bottom -->
            <div class="footer-bottom py-3 mt-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="mb-0">
                                © <span id="currentYear"></span> KH FASHION. All rights reserved.
                            </p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="payment-icons">
                                <i class="fab fa-cc-visa payment-icon"></i>
                                <i class="fab fa-cc-mastercard payment-icon"></i>
                                <i class="fab fa-paypal payment-icon"></i>
                                <i class="fab fa-apple-pay payment-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script>
            // Set current year
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Simple newsletter form
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                if (email) {
                    alert('Thank you for subscribing!');
                    this.reset();
                }
            });
        </script>
    </body>
    
</html>