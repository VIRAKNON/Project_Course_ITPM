<?php
include '../resources/views/root/header.blade.php';
?>
<style>
    frame {
        overflow: hidden;
    }
</style>
</head>
<frameset rows="6%,*" frameborder="no" border="0" framespacing="0">
    <frame src="page/menu.blade.php" scrolling="no"></frame>
    <frameset cols="230px,*" frameborder="no" border="0" framespacing="0">
        <frame src="page/category.blade.php"></frame>

        <frameset rows="6%,*">
            <frame src="page/headerContent.blade.php"></frame>
            <frame src="page/homePage.blade.php" name="content" scrolling="auto"></frame>
        </frameset>
    </frameset>
</frameset>
</html>
