<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Fashion Footer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        
        .simple-footer {
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        
        .footer-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 1rem;
        }
        
        .footer-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }
        
        .footer-link {
            color: #bdc3c7;
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
            border-color: #e74c3c;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
            background-color: #34495e;
            color: #ecf0f1;
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
            background-color: #1a252f;
            border-top: 1px solid #34495e;
        }
        
        .payment-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #bdc3c7;
        }
    </style>
</head>
<body>
    <!-- Sample content -->
    <div class="container py-5 text-center">
        <h1 class="display-4 mb-4">Simple Fashion Footer</h1>
        <p class="lead">Clean and minimal footer design</p>
    </div>

    <!-- SIMPLE FOOTER STARTS HERE -->
    <footer class="simple-footer py-5">
        <div class="container">
            <div class="row">
                <!-- Brand Section -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-brand">StyleShop</div>
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
                            1-800-FASHION
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            support@styleshop.com
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
                            © <span id="currentYear"></span> StyleShop. All rights reserved.
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
    <!-- SIMPLE FOOTER ENDS HERE -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
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