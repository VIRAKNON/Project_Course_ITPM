<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <nav>
        <ul class="Resp">
            <li onclick= "hidesidebar1(event)"><a href=""><svg width="25" height="25" fill="none" stroke="#000000"
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
        </ul>
        <ul>
            <li><a href="">logo</a></li>
            <li class="hideOnMobile"><a href="">search</a></li>
            <li class="hideOnMobile"><a href="">language</a></li>
            <li class="hideOnMobile"><a href="">Wish List</a></li>
            <li class="hideOnMobile"><a href="">Track Order</a></li>
            <li class="hideOnMobile"><a href="">Cart</a></li>
            <li class="hideOnMobile"><a href="">Sign in</a></li>
            <li class="btnMenu" onclick="showsidebar1()"><a href="#"><svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 7.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                <path d="M12 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
            </svg></a></li>
        </ul>
    </nav>
</body>
<script src="js/menu.js"></script>
</html>
