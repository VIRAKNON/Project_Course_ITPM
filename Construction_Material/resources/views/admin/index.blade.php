<!DOCTYPE html <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">CAMEAGLE Admin</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="../page/admin/manageProduct.blade.php" class="nav_link" data-content="../page/admin/manageProduct.blade.php">
                        <i class='bx bx-package nav_icon'></i>
                        <span class="nav_name">Manage Product</span>
                    </a>
                    <a href="../page/admin/manage_user.blade.php" class="nav_link" data-content="../page/admin/manage_user.blade.php">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Manage User</span>
                    </a>
                    <a href="../page/admin/controll.blade.php" class="nav_link" data-content="../page/admin/controll.blade.php">
                        <i class='bx bx-chip nav_icon'></i>
                        <span class="nav_name">Control</span>
                    </a>
                    <a href="../page/admin/setting_page.blade.php" class="nav_link" data-content="../page/admin/setting_page.blade.php">
                        <i class='bx bx-cog nav_icon'></i>
                        <span class="nav_name">Setting</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="main_content" id="main_content">
        <h4>Main Components</h4>
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
