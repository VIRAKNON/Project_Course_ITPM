<?php
include '../resources/views/root/header.blade.php';
?>
</head>
<frameset rows="6%,*" frameborder="no" border="0" framespacing="0">
    <frame src="page/menu.blade.php"></frame>
    <frameset cols="230px,* ,230px">
        <frame src="page/category.blade.php"></frame>
        <frameset rows="6%,*">
            <frame src="page/headerContent.blade.php"></frame>
            <frame src="" name="content" style="background-color:#F0F2F5 "></frame>
        </frameset>
        {{-- right side of webpage --}}
        <frameset rows="6%,*">
            <frame src="page/headerContentRight.blade.php"></frame>
            <frame src="" style="background-color:#F0F2F5 "></frame>
        </frameset>
    </frameset>
</frameset>
</html>
