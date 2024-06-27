<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gracia Fashion</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/svg+xml" href="./images/header/favicon.svg">
    </head>
    <body>
        <img src="./images/header/headerprod.jpg" style="display: none;">
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="./index.html"><img src="{{ asset('images/image2.png') }}" alt="Example Image" style="width: 300px; height: auto;">
                        </a>
                    </div>
                    <nav>
                        <ul class="nav-menu">
                            <li class="nav-item"><a href="index.html">Home</a></li>
                            <li class="nav-item"><a href="products.html">Products</a></li>
                            <li class="nav-item"><a href="#footer">Login</a></li>
                            <li class="nav-item"><a href="account.html">Register</a></li>
                        </ul>
                    </nav>
                    <!-- <a href="./cart.html"><img class="cart" src="./images/header/cart.svg"></a> -->
                    <div class="toggle"><i class="fa fa-bars"></i></div>
                </div>
            </div>
        </div>
        <div class="headerimg">
            <h1>Jelajahi gaya baru dalam berbelanja baju perempuan di toko kami, dengan koleksi gaun elegan dan baju tidur yang nyaman.</h1>
            <h3>Temukan pilihan terbaik kami mulai dari Rp 139.000!</h3>
            <a href="./product_details.html" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="offer">
            <div class="small-container">
                <div class="child">
                    <div class="halfchild">
                    <img src="{{ asset('images/image1.png') }}" alt="Example Image">
                    </div>
                    <div class="halfchild">
                        <p>Exclusively available here</p>
                        <h1>Gaun Merah Elegan</h1>
                            <small>
                                Gaun yang dirancang khusus untuk tampil anggun dan percaya diri. Tunjukkan pesona Anda dan melangkahlah
                                dengan gaya yang menawan.<br>
                            </small>

                        <a href="./product_details.html" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-container">
            <h2>Hot Releases</h2>
            <div class="line1"></div>
            <div class="child">
                <div class="childprods">
                    <a href="./product_details.html"><img src="{{ asset('images/image3.jpg') }}" alt="Example Image" ></a>
                    <h4>Gaun Wanita</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp 176.000</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="{{ asset('images/image4.jpg') }}" alt="Example Image" ></a>
                    <h4>Baju Tidur Wanita </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp 99.000</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="{{ asset('images/image5.jpg') }}" alt="Example Image" ></a>
                    <h4>Baju Harian</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Rp 119.000</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="{{ asset('images/image6.jpg') }}" alt="Example Image" ></a>
                    <h4>Gaun Hitam</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp 250.000</p>
                </div>
            </div>
            <h2>Latest Releases</h2>
            <div class="line1"></div>
            <div class="child">
                <!-- <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-5.webp"></a>
                    <h4>Adventure Hoodies</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$63.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-6.webp"></a>
                    <h4>Red Unisex T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$57.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-7.webp"></a>
                    <h4>Black Sweatpants for Women</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$45.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-8.webp"></a>
                    <h4>Black Unisex Jeans</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$59.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-9.webp"></a>
                    <h4>Blue Wardrobe Ties</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$15.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-10.webp"></a>
                    <h4>Black T-Shirts for Men</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$80.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-11.webp"></a>
                    <h4>Sweatpants for Men</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$60.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-12.webp"></a>
                    <h4>Socks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$19.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-13.webp"></a>
                    <h4>Trekking Shoes</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$149.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-14.webp"></a>
                    <h4>Sports Wear</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$72.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-15.webp"></a>
                    <h4>Blue Hats</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$29.99</p>
                </div>
                <div class="childprods">
                    <a href="./product_details.html"><img src="./images/products/product-16.webp"></a>
                    <h4>Black Ties</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$19.99</p>
                </div> -->
            </div>
        </div>
        <div class="more">
            <a href="./products.html">See More</a>
        </div>
        <div class="offer">
            <div class="small-container">
                <div class="child">
                    <div class="halfchild">
                    <img src="{{ asset('images/image1.png') }}" alt="Example Image">
                    </div>
                    <div class="halfchild">
                        <p>Exclusively avaliable here</p>
                        <h1>Gaun Merah Elegan</h1>
                        <small>
                            Gaun yang dirancang khusus untuk tampil anggun dan percaya diri. Tunjukkan pesona Anda dan melangkahlah
                            dengan gaya yang menawan.<br>
                        </small>

                        <a href="./product_details.html" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="testimonial">
            <div class="small-container">
                <h3><i class="fa fa-quote-left"></i> &emsp;See what our clients say about us -</h3>
                <div class="child">
                    <div class="testchild">
                        <p>Absolutely loved the fine hoodies I brought from this place. 11/10 would buy from here again.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="./images/testimonials/jemma.jpg">
                        <h3>Jemma Stone</h3>
                    </div>
                    <div class="testchild">
                        <p>Jesus Christ who put up this ugly website. Recommend firing that guy. Jk good site pls no remove comment.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="./images/testimonials/rachel.jpg">
                        <h3>Rachel Myers</h3>
                    </div>
                    <div class="testchild">
                        <p>No wonder this site is so popular! It has the best prices in the city and really like the styles.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <img src="./images/testimonials/anne.jpg">
                        <h3>Anne Jordan</h3>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="footer" id="footer">
            <div class="container">
                <div class="child">
                    <div class="footerChild1">
                    <img src="{{ asset('images/image2.png') }}" alt="Example Image">
                        <h4>Mail us at: <a href="mailto:graciafashion@gmail.com">graciafashion@gmail.com</a></h4>
                    </div>
                    <div class="footerChild2">
                        <h3>Help</h3>
                        <ul>
                            <li><a href="linkgoeshere">Payments</a></li>
                            <li><a href="linkgoeshere">Shipping</a></li>
                            <li><a href="linkgoeshere">Return Policy</a></li>
                            <li><a href="linkgoeshere">FAQ Topics</a></li>
                        </ul>
                    </div>
                    <div class="footerChild2">
                        <h3>Our Socials</h3>
                        <ul>
                            <li><a href="linkgoeshere">Instagram</a></li>
                            <li><a href="linkgoeshere">Facebook</a></li>
                            <li><a href="linkgoeshere">Twitter</a></li>
                            <li><a href="linkgoeshere">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="footerChild2">
                        <h3>Registered Office</h3>
                        <ul>
                            <li> Metro Atom Plaza Lt 3</li>
                            <li>Jl. Ps. Baru No.14, RT.15/RW.4</li>
                            <li>Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</li>
                            <li>-</li>
                        </ul>
                    </div>
                </div>
                <div class="belowfooter">
                    &copy; Gracia Fashion <br>

                </div>
            </div>
        </div>
        <script src="./src/js/script.js"></script>
    </body>
</html>