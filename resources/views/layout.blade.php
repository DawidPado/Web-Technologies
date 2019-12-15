<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <meta charset="UTF-8">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    @yield('css')
</head>
<body>

<!-- Start Header Area -->
<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="list">
                    <li><a href="tel:+39 1234567890">+39 123 456 7890</a></li>
                    <li><a href="support@progettoTdW.com">support@progettoTdW.com</a></li>
                </ul>
                <ul class="list">
                    <li><a href="/login">login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                @yield('navbar')
                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/category">Category</a>
                            <a class="dropdown-item" href="/single">Single</a>
                            <a class="dropdown-item" href="/cart">Cart</a>
                            <a class="dropdown-item" href="/checkout">Checkout</a>
                            <a class="dropdown-item" href="/confermation">Confermation</a>
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="/tracking">Tracking</a>
                            <a class="dropdown-item" href="/generic">Generic</a>
                            <a class="dropdown-item" href="/elements">Elements</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Area -->
@yield('area-unica')

<!-- Start Most Search Product Area -->
<section class="section-half">
    <div class="container">
        <div class="organic-section-title text-center">
            <h3>Most Searched Products</h3>
        </div>
        <div class="row mt-30">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r1.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Blueberry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r2.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Cabbage</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r3.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Raspberry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r4.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Kiwi</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r5.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore Bell Pepper</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r6.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Blackberry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r7.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Brocoli</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r8.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Carrot</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r9.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Strawberry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r10.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Prixma MG2 Light Inkjet</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r11.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Cherry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="img/r12.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Pixelstore fresh Beans</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Most Search Product Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        sito creato da Dawid Pado, Bryant Sarabia e Giacomo Sfratato
                    </p>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                    <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->
@yield('js')
</body>
</html>
