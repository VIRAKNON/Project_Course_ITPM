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
        width: 290px;
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
</head>
<body>
    <div class="container" style="background: #F0F2F5; height:1307px; width:1599px;float:right;">
        <div class="row">
            <div class="col-xl-12 mt-5" style="margin-left:50px;">
                <p class="s1">Setting</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12" style="margin-left:50px;">
                <p class="s2">Hi, Samantha. Welcome back  to CAMEAGLE Admin!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 mt-3" style="border-radius: 10px;
            background: #FFF; width: 400px;
            height: 532px; margin-left:50px; ">
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
                        background: #F60;" type="submit" value="Change Profile" class="btn btnRegister form-control  ">
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
                            <input type="text" placeholder="admin first name" class="form-control mt-2" required>
                        </div>
                        <div class="col-xl-6 mt-3">
                            <label for="">Last Name</label>
                            <input type="text" placeholder="admin last name" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="admin phone number" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Email</label>
                            <input type="email" placeholder="admin email" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Address</label>
                            <input type="text" placeholder="admin address" class="form-control mt-2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Password</label>
                            <input type="password" placeholder="admin password" class="form-control mt-2" required>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>