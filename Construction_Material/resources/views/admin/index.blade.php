<?php
include '../resources/views/root/header.blade.php';
?>
    <link rel="stylesheet" href="css/admin/style.css">
    <title>CAMEAGLE Admin</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img
                src="https://img.freepik.com/premium-vector/man-avatar-profile-picture-vector-illustration_268834-538.jpg"
                alt=""></div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="updoads/logo1.jpg" width="27px" alt="" class="rounded-circle ">
                    <span class="nav_logo-name">CAMEAGLE Admin</span>
                </a>
                <div class="nav_list">
                    <a href="{{route('admin.dashboard')}}" class="nav_link" data-content="{{route('admin.dashboard')}}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{route('admin.manageProduct')}}" class="nav_link" data-content="{{route('admin.manageProduct')}}">
                        <i class='bx bx-package nav_icon'></i>
                        <span class="nav_name">Manage Product</span>
                    </a>
                    <a href="{{route('admin.manageUser')}}" class="nav_link" data-content="{{route('admin.manageUser')}}">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Manage User</span>
                    </a>
                    <a href="{{route('admin.control')}}" class="nav_link" data-content="{{route('admin.control')}}">
                        <i class='bx bx-chip nav_icon'></i>
                        <span class="nav_name">Control</span>
                    </a>
                    <a href="{{route('admin.setting')}}" class="nav_link" data-content="{{route('admin.setting')}}">
                        <i class='bx bx-cog nav_icon'></i>
                        <span class="nav_name">Setting</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link" data-content="#">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="main_content" id="main_content">
        <div class="row">
            <div class="col-xl-12">
                <h1>Home</h1>
                <p class="">Hi, Samantha. Welcome back  to CAMEAGLE Admin!</p>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12 ">
                        <h3 class="text-center fs-1">Profile</h3>
                    </div>
                    <div class="col-xl-12 d-flex justify-content-center">
                        <img style="width:30%;" src="{{ asset('images/Ellipse 1.svg') }}" alt="Description of the image">
                    </div>
                    <div class="col-xl-12 text-center mt-3">
                        <p class="h1">Welcome, User Fullname</p>
                        <p class="text-center p">Manage your Activity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->
    <script>
        $(document).ready(function() {
            $(".nav_link").click(function(e) {
                e.preventDefault(); // Prevent the default link behavior
                var contentUrl = $(this).data("content");
                $("#main_content").load(contentUrl);
            });
        });
    </script>
    <script src="js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
