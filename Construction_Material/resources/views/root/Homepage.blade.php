<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="{{ url('CSS/Homepage.css') }}">
</head>

<body>
    <div class="header">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="#">Home</a></li>
                <li><a class="menu__item" href="#">About</a></li>
                <li><a class="menu__item" href="#">Team</a></li>
                <li><a class="menu__item" href="#">Contact</a></li>
                <li><a class="menu__item" href="#">Twitter</a></li>
            </ul>
        </div>
        <div class="image">
            <img src="../image/logo.jpg" alt="">
        </div>
        <div class="InputContainer">
            <input type="text" name="text" class="input" id="input" placeholder="Search">
            <label for="input" class="labelforsearch">
                <svg viewBox="0 0 512 512" class="searchIcon">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                    </path>
                </svg>
            </label>
            <div class="border"></div>
            <button class="micButton"><svg viewBox="0 0 384 512" class="micIcon">
                    <path
                        d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z">
                    </path>
                </svg>
            </button>
        </div>
        <select name="" id="">
            <option value="">KH</option>
            <option value="">EN</option>
            <option value="">China</option>
        </select>
        <div class="wish">
            <i class="far fa-heart"></i>&nbsp;
            <a href="#">Wish List</a>
        </div>
        <div class="track">
            <a href="#">Track Order</a>
        </div>
        <div class="cart">
            <i class="fas fa-shopping-cart"></i>&nbsp;
            <a href="#">Cart</a>
        </div>
        <div class="sigin">
            <i class="fas fa-user-circle"></i>&nbsp;
            <a href="#">Sign In</a>
        </div>
    </div>
    <nav>
        <ul class="sidebar">
            <li><a href="#">Electricity</a></li>
            <li><a href="#">Steel</a></li>
            <li><a href="#">Bath-Room</a></li>
            <li><a href="#">Lamp</a></li>
            <li><a href="#">Macine</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../image/baner3.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../image/banner2.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../image/banner4.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="feature pt-4">
                <label>Feature Product</label>
                <div class="feature-product">
                    <div class="row">
                        <div class="col-12">
                            <div class="row pt-3">
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine2.webp"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine3.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img
                                                            src="https://royaltoiletry.com/wp-content/uploads/2022/01/premium-gold-toilet5.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/paint1.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature pt-4">
                <label style="background-color: #0066FF">Recommended Product</label>
                <div class="recommade-product">
                    <div class="row">
                        <div class="col-12">
                            <div class="row pt-3">
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/paint2.webp"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine4.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine5.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine6.webp"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row pt-3">
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine10.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine8.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine7.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="shadow p-3 bg-body rounded">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="like float-end"><i class="far fa-heart"></i></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="image">
                                                    <a href="#"><img src="../image/machine9.jfif"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text">Bath room premium 180x220cm</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="stars float-left">⭐️ ⭐️ ⭐️ ⭐️</span><span
                                                    class="price float-end">$299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Business --}}
        <div class="add-business bg-danger">
            <div class="btn d-flex flex-column p-4">
                <div class="p-1 fs-4"><b>MERCHANT OR SHOPOWNER</b></div>
                <div class="p-1 fs-6">
                    <p>Be our partner business and increase your online sales service more customers</p>
                </div>
                <div class="p-1"><button>ADD YOUR BUSINESS</button></div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="detail">
                    <span>Get to know us</span>
                    <a href="">Career</a>
                    <a href="">Blog</a>
                    <a href="">About Shop</a>
                    <a href="">Investor Relation</a>
                    <a href="">Shop Device</a>
                    <a href="">Shop Science</a>
                </div>
                <div class="detail">
                    <span>Make money with us</span>
                    <a href="">Sell product shop</a>
                    <a href="">Sell on product business</a>
                    <a href="">Sell app on shop</a>
                    <a href="">Become an Affiliate</a>
                    <a href="">Advertise your product</a>
                    <a href="">Sell-publish with us</a>
                    <a href="">Host a shop Hub</a>
                </div>
                <div class="detail">
                    <span>Shop payment product</span>
                    <a href="">Shop business cart</a>
                    <a href="">Shop with point</a>
                    <a href="">Reload your balance</a>
                    <a href="">Shop currentcy convertor</a>
                </div>
                <div class="detail">
                    <span>Let us help you</span>
                    <a href="">Shop and Covid19</a>
                    <a href="">Your account</a>
                    <a href="">Your order</a>
                    <a href="">Shipping rate and policies</a>
                    <a href="">Return and Replacement</a>
                    <a href="">Manage your content and device</a>
                    <a href="">Shop assistance</a>
                    <a href="">Help</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
