<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="css/index2.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/category.css">
</head>

<body>

    <div class="container-fluid m-0 p-0 position-relative">
        <div class="sticky-element m-0 p-0">
            <!-- menu -->
            <div class="row m-0">
                <div class="col-xl-12 m-0 p-0">
                    <nav>
                        <ul class="Resp">
                            <li onclick= "hidesidebar1(event)"><a href=""><svg width="30" height="30"
                                        fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m7 7 10 10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg></a></li>
                            <li><a href="">search</a></li>
                            <li><a href="">language</a></li>
                            <li><a href="">Wish List</a></li>
                            <li><a href="">Track Order</a></li>
                            <li><a href="">Cart</a></li>
                            <li><a href="">Sign in</a></li>
                        </ul>
                        <ul>
                            <li>
                                <div class="logo">
                                    <a href="">
                                        <img src="../updoads/logo.jpg" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="hideOnMobile"><a href="">search</a></li>
                            <li class="hideOnMobile"><a href="">language</a></li>
                            <li class="hideOnMobile"><a href="">Wish List</a></li>
                            <li class="hideOnMobile"><a href="">Track Order</a></li>
                            <li class="hideOnMobile"><a href="">Cart</a></li>
                            <li class="hideOnMobile"><a href="">Sign in</a></li>
                            <li class="btnMenu" onclick="showsidebar1()"><a href="#"><svg width="25"
                                        height="25" fill="#000000" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                        <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                        <path d="M12 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                    </svg></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--/menu -->
            <!--category-->
            <div class="row m-0">
                <div class="col-xl-12 m-0 p-0">
                    <nav class="category">
                        <ul class="sideBar">
                            <li onclick="hide(event)" style="background-color:#045ea7">
                                <a href="#" class="d-flex justify-content-between"
                                    onmouseover="this.style.backgroundColor='#045ea7'"
                                    onmouseout="this.style.backgroundColor='#045ea7'">
                                    <span class="text-light">CATEGORIES</span>
                                    <span>
                                        <svg width="30" height="30" fill="none" stroke="#FFFFFF"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m7 7 10 10"></path>
                                            <path d="M7 17 17 7"></path>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li><a href="../page/test1.blade.php" class="loadPage">search</a></li>
                            <li><a href="">language</a></li>
                            <li><a href="">Wish List</a></li>
                            <li><a href="">Track Order</a></li>
                            <li><a href="">Cart</a></li>
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Sign in</a></li>
                        </ul>
                        <ul class="menu2">
                            <li onclick="show()"><a href="#"><svg width="35" height="35" fill="none"
                                        stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 18h16M4 6h16H4Zm0 6h16H4Z"></path>
                                    </svg></a>
                            </li>
                            <li><a href="">Newest stock</a></li>
                            <li><a href="">Newest stock</a></li>
                            <li><a href="">Newest stock</a></li>
                            <li><a href="">Newest stock</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--/category-->
        </div>
        <!--main_content-->
        <div class="row m-0 p-0">
            <div class="col-xl-12 m-0 p-0" id="main_content">
                <div class="row m-0 p-0">
                    <div class="col-xl-12 m-0 py-1 px-0">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="../image/baner3.jpg" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="../image/banner2.jpg" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../image/banner4.jpg" class="d-block" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-xl-12 m-0 py-1 px-0">

                    </div>
                </div>
            </div>
        </div>
        <!--/main_content-->
        <!--footer-->
        <div class="row m-0 p-0">
            <div class="col-xl-12 m-0 p-0">
                <div class="add-business bg-danger">
                    <div class="btn d-flex flex-column">
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
        </div>
        <!--/footer-->
    </div>
</body>
<script src="js/index2.js"></script>
{{-- <script src="js/category.js"></script> --}}

</html>
