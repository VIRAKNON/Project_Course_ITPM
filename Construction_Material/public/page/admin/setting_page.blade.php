<?php
include '../root/header.blade.php';
?>
<link rel="stylesheet" href="css/setting_page.css">
</head>

<body style="background: #F0F2F5; ">
    <div class="container p-0 m-0">
        <div class="row ms-4">
            <div class="col-xl-12 mt-5">
                <p class="s1">Setting</p>
            </div>
        </div>
        <div class="row ms-4">
            <div class="col-xl-12">
                <p class="s2">Hi, Samantha. Welcome back to CAMEAGLE Admin!</p>
            </div>
        </div>
        <div class="row ms-4">
            <div class="col-xl-3 mt-3"
                style="border-radius: 10px;
            background: #FFF; width: 400px;
            height: 532px;  ">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5">
                        <p class="s3">Profile</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 d-flex justify-content-center mt-3 ">
                        <img style="width:50%;" src="https://play-lh.googleusercontent.com/C9CAt9tZr8SSi4zKCxhQc9v4I6AOTqRmnLchsu1wVDQL0gsQ3fmbCVgQmOVM1zPru8UH=w240-h480-rw"
                            alt="Description of the image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mt-4 text-center">
                        <p class="s4">Admin Fullname</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <p class="s5">Account admin of CamEagle</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 w-20 d-flex justify-content-center mt-4">
                        <input style="border-radius: 8px;
                        background: #F60;" type="submit"
                            value="Change Profile" class="btn btnRegister form-control" data-bs-toggle="modal"
                            data-bs-target="#editmodal">
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-3 text-success" id="exampleModalLabel">Change Profile</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <form action="action.php" class="w-100" method="post">
                                        <div class="row">

                                            <div class="col-xl-6 mt-2">
                                                <label for="">First Name</label>
                                                <input class="form-control shadow-none" type="text" name="firstname"
                                                    id="" placeholder="Enter your first name">
                                            </div>
                                            <div class="col-xl-6 mt-2">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control shadow-none" name="lastname"
                                                    id="" placeholder="Enter your last name">
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label for="">Phone Number</label>
                                                <input class="form-control shadow-none" type="number" name="phone"
                                                    id="" placeholder="Enter your phone number">
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label for="">Email</label>
                                                <input class="form-control shadow-none" type="email" name="email"
                                                    id="" placeholder="Enter your email">
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label for="">Address</label>
                                                <input type="text" class="form-control shadow-none" name="address"
                                                    id="" placeholder="Enter your address">
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control shadow-none" name="password"
                                                    id="" placeholder="Enter your password">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success shadow-none">Change</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-3"
                style="border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25); width: 540px; height: 532px; margin-left:50px;">
                <div class="infor">
                    <div class="row">
                        <div class="col-xl-6 mt-3">
                            <label for="">First Name</label>
                            <input type="text" disabled placeholder="admin first name" class="form-control mt-2"
                                required>
                        </div>
                        <div class="col-xl-6 mt-3">
                            <label for="">Last Name</label>
                            <input type="text" disabled placeholder="admin last name" class="form-control mt-2"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Phone Number</label>
                            <input type="number" disabled placeholder="admin phone number" class="form-control mt-2"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Email</label>
                            <input type="email" disabled placeholder="admin email" class="form-control mt-2"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Address</label>
                            <input type="text" disabled placeholder="admin address" class="form-control mt-2"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Password</label>
                            <input type="password" disabled placeholder="admin password" class="form-control mt-2"
                                required>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
