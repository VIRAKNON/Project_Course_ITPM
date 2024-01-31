<?php
include '../resources/views/root/header.blade.php';
?>

<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    .s1{
        /* width: 290px; */
        color: var(--Theme-Color-Dark, #464255);
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .s2{
        width: 464px;
        color: #939393;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Barlow;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .s3{
        color: #939393;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 500; 
        line-height: 24px; /* 66.667% */
        letter-spacing: -0.54px;
    }
    .s4{
        color: #939393;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px; /* 66.667% */
        letter-spacing: -0.54px;
    }
    .s5{
        color: #939393;
        font-family: Inter;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 171.429% */
        letter-spacing: -0.21px;
    }
    .btnRegister{
        color: #FFF;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        height: 51px;
        width: 267px;
    }
    .infor{
        padding: 30px;
    }
    label{
        color: var(--text-secondary, #5A5A5D);
        font-family: Inter;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%; /* 20px */
        text-transform: capitalize;
    }
    input::placeholder {
        color: #939393;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px; /* 150% */
        letter-spacing: -0.24px;
    }

</style>
</head >
<body  style="background: #F0F2F5; ">
    <div class="container-fluid p-0 m-0">
        <div class="row ms-4">
            <div class="col-xl-12 mt-5" >
                <p class="s1">Setting</p>
            </div>
        </div>
        <div class="row ms-4">
            <div class="col-xl-12" >
                <p class="s2">Hi, Samantha. Welcome back  to CAMEAGLE Admin!</p>
            </div>
        </div>
        <div class="row ms-4">
            <div class="col-xl-3 mt-3" style="border-radius: 10px;
            background: #FFF; width: 400px;
            height: 532px;  ">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5">
                        <p class="s3">Profile</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 d-flex justify-content-center mt-3 ">
                        <img style="width:50%;" src="{{ asset('images/Ellipse 1.svg') }}" alt="Description of the image">
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
                        background: #F60;" type="submit" value="Change Profile" class="btn btnRegister form-control" data-bs-toggle="modal" data-bs-target="#editmodal">
                    </div>
                       <!-- Modal -->
                    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title fs-3 text-success" id="exampleModalLabel">Change Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                <form action="action.php" class="w-100" method="post">
                                    <div class="row">
                                        
                                        <div class="col-xl-6 mt-2">
                                            <label for="">First Name</label>
                                            <input class="form-control shadow-none" type="text" name="firstname" id="" placeholder="Enter your first name">
                                        </div>
                                        <div class="col-xl-6 mt-2">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control shadow-none" name="lastname" id="" placeholder="Enter your last name">
                                        </div>
                                        <div class="col-xl-12 mt-2">
                                            <label for="">Phone Number</label>
                                            <input class="form-control shadow-none" type="number" name="phone" id=""  placeholder="Enter your phone number">
                                        </div>
                                        <div class="col-xl-12 mt-2">
                                            <label for="">Email</label>
                                            <input class="form-control shadow-none" type="email" name="email" id="" placeholder="Enter your email">
                                        </div>
                                        <div class="col-xl-12 mt-2">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control shadow-none" name="address" id="" placeholder="Enter your address">
                                        </div>
                                        <div class="col-xl-12 mt-2">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control shadow-none" name="password" id="" placeholder="Enter your password">
                                        </div>
                                    </div>                                       
                                </form>
                                </div>
                        
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success shadow-none">Change</button>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
       
            <div class="col-xl-4 mt-3" style="border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25); width: 540px; height: 532px; margin-left:50px;" >
                <div class="infor">
                    <div class="row">
                        <div class="col-xl-6 mt-3">
                            <label for="">First Name</label>
                            <input type="text" disabled placeholder="admin first name" class="form-control mt-2" required>
                        </div>
                        <div class="col-xl-6 mt-3">
                            <label for="">Last Name</label>
                            <input type="text" disabled placeholder="admin last name" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Phone Number</label>
                            <input type="number" disabled placeholder="admin phone number" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Email</label>
                            <input type="email" disabled placeholder="admin email" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Address</label>
                            <input type="text" disabled placeholder="admin address" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Password</label>
                            <input type="password" disabled placeholder="admin password" class="form-control mt-2" required>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>