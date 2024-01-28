<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="css/category.css">
</head>

<body>
    <div class="category">
        <nav>
            <ul class="sideBar">
                <li onclick="hide(event)"><a href="#"><svg width="25" height="25" fill="none" stroke="#ffffff"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="m7 7 10 10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg></a></li>
                <li><a href="">search</a></li>
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
            <ul>
                <li onclick="show()"><a href="#"><svg width="35" height="35" fill="none"
                            stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 18h16M4 6h16H4Zm0 6h16H4Z"></path>
                        </svg></a></li>
                <li><a href="">search</a></li>
                <li><a href="">language</a></li>
                <li><a href="">Wish List</a></li>
            </ul>
        </nav>
    </div>
    <script type="text/javascript">
        function show() {
            const side_bar = document.querySelector(".sideBar");
            side_bar.style.display = 'flex';
        }

        function hide(event) {
            event.preventDefault();
            const side_bar = document.querySelector(".sideBar");
            side_bar.style.display = 'none';
        }
    </script>
</body>

</html>
