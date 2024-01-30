<?php 

    include '../resources/views/root/header.blade.php';
?>
{{-- <link rel="stylesheet" href="{{asset('css/register.css')}}"> --}}
</head>
<style>
    *{
        padding: 0px;
        margin: 0px; 
        box-sizing: border-box;
    }
    .h1{
        width: 234px;
        color: #393F42;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 120% */
        letter-spacing: -0.3px;
        margin: auto;
    }
    .p{
        color: #939393;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 171.429% */
        letter-spacing: -0.21px;
    }
    /* .register{
        color: #393F42;
        font-family: 'PT Sans', sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    } */
    .btnRegister{
        color: #FFF;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        height: 33px;
        width: 222px;
    }
    /* input::placeholder {
        color: #000;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    } */
    .left-child{
        border-radius: 5px;
        background: #FFF;
        margin-left: 70px;
        /* padding: 30px; */
    }
    .sub{
        background: #F0F2F5;
        height: 900px;
    }
    .info{
        padding: 30px;
    }
 
    .right-child{
        background: #FFF;
        margin-left: 90px;
        box-sizing: border-box;
    }
    .s1{
        color: #000;
        font-family: Inter;
        font-size: 11px;
        font-style: normal;
        font-weight: 400;
        line-height: 1.9;
    }
    .bold-1{
        color: #000;
        font-family: Inter;
        font-size: 10px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .s2{
        color: #939393;
        font-family: Inter;
        font-size: 10px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    
    .infor-1 .row{
        border-bottom: 1px solid rgba(147, 147, 147, 0.25);
    }

 /* .right p{
    line-height: 28px;

 } */
</style>


<body>
    <div class="container sub ">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center mt-5">
                <img src="{{ asset('images/Ellipse 1.svg') }}" alt="Description of the image">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-3">
                <p class="h1">Welcome, User Fullname</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-2">
                <p class="text-center p">Manage your information</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 w-20 d-flex justify-content-center">
                <input style="border-radius: 8px;
                background: #F60;" type="submit" value="Update Profile" class="btn btnRegister form-control  ">
            </div>
        </div>

        <div class="row parent">
            <div class="col-xl-4 mt-5 left-child py-3" >
                <div class="info">
                    <div class="row">
                            <div class="input-group w-60 mb-3">
                                <input style="border-radius: 5px; color: #000;
                                background: #F0F2F5;" type="text" class="form-control" placeholder="Your personalization" aria-label="Username">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                        <path d="M37.1562 37.1563L30.3698 30.4265" stroke="#FF6600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.1787 34.5938C27.6701 34.5938 34.5537 27.7101 34.5537 19.2188C34.5537 10.7274 27.6701 3.84375 19.1787 3.84375C10.6873 3.84375 3.80371 10.7274 3.80371 19.2188C3.80371 27.7101 10.6873 34.5938 19.1787 34.5938Z" stroke="#FF6600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M24.3315 16.4775C24.3315 17.1541 24.1982 17.8242 23.9392 18.4494C23.6803 19.0745 23.3008 19.6426 22.8223 20.121C22.3438 20.5995 21.7757 20.9791 21.1506 21.238C20.5254 21.497 19.8554 21.6302 19.1787 21.6302C17.8121 21.6302 16.5015 21.0874 15.5352 20.121C14.5688 19.1547 14.0259 17.8441 14.0259 16.4775C14.0259 15.1109 14.5688 13.8003 15.5352 12.8339C16.5015 11.8676 17.8121 11.3247 19.1787 11.3247C19.8554 11.3247 20.5254 11.458 21.1506 11.7169C21.7757 11.9759 22.3438 12.3554 22.8223 12.8339C23.3008 13.3124 23.6803 13.8804 23.9392 14.5056C24.1982 15.1308 24.3315 15.8008 24.3315 16.4775Z" stroke="#FF6600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.5625 30.296C8.5625 28.0838 9.681 25.9623 11.6719 24.3981C13.6629 22.8338 16.3631 21.9551 19.1787 21.9551C21.9943 21.9551 24.6946 22.8338 26.6855 24.3981C28.6765 25.9623 29.795 28.0838 29.795 30.296" stroke="#FF6600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                    </div>

                    <div class="row">
                                <div class="col-xl-12 ">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="user firstname" class="form-control" required>
                                </div>
                                <div class="col-xl-12 mt-3">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="user lastname" class="form-control" required>
                                </div>
                                <div class="col-xl-12 mt-3">
                                    <label for="">Phone Number</label>
                                    <input type="text" placeholder="user tel" class="form-control" required>
                                </div>
                                <div class="col-xl-12 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="user@gmail.com" class="form-control" required>
                                </div>
                                <div class="col-xl-12 mt-3">
                                    <label for="">Address</label>
                                    <input type="text" placeholder="user address" class="form-control" required>
                                </div>
                            </div>
                    </div>
                </div>
            <div class="col-xl-6 right-child mt-5">
                <div class="infor-1">
                    <div class="row">
                        <div class="input-group mt-5 mb-3 px-30">
                            <input style="border-radius: 5px; color: #000;
                            background: #F0F2F5;" type="text" class="form-control" placeholder="Your personalization" aria-label="Username">
                            <span class="input-group-text ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                    <circle cx="20.5" cy="20.5001" r="11.9583" stroke="#FF6600" stroke-width="3"/>
                                    <path d="M10.1897 5.35784C9.03111 5.66829 7.97461 6.27826 7.12644 7.12644C6.27826 7.97461 5.66829 9.03111 5.35784 10.1897" stroke="#FF6600" stroke-width="3" stroke-linecap="round"/>
                                    <path d="M30.8103 5.35784C31.9689 5.66829 33.0254 6.27826 33.8736 7.12644C34.7217 7.97461 35.3317 9.03111 35.6422 10.1897" stroke="#FF6600" stroke-width="3" stroke-linecap="round"/>
                                    <path d="M20.5 13.6667V20.2501C20.5 20.3882 20.6119 20.5001 20.75 20.5001H25.625" stroke="#FF6600" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 d-flex justify-content-center mb-2"  > 
                            <img style="width: 70%;" src="{{ asset('images/Rectangle 1399.svg') }}" alt="Description of the image">
                        </div>
                        <div class="col-xl-8 right">
                            <p class="s1" style="margin: 0px; text-align:justify;">Nitecore P10iX Tactical Flashlight Floodlight, 4000 Lumen LED USB-C Rechargeable 
                                Super Bright Compact with LumenTac Organizer
                            </p>
                            <p  class="mt-3 bold-1" style="margin: 0px;">$20.34</p>
                            <p class="mt-3 s2" style="margin: 0px;">CON-00001 (Order id)
                                <span style="float: right; " class="mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <path d="M2.375 4.75H3.95833H16.625" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.33331 4.74992V3.16659C6.33331 2.74666 6.50013 2.34393 6.79706 2.047C7.09399 1.75007 7.49672 1.58325 7.91665 1.58325H11.0833C11.5032 1.58325 11.906 1.75007 12.2029 2.047C12.4998 2.34393 12.6666 2.74666 12.6666 3.16659V4.74992M15.0416 4.74992V15.8333C15.0416 16.2532 14.8748 16.6559 14.5779 16.9528C14.281 17.2498 13.8782 17.4166 13.4583 17.4166H5.54165C5.12172 17.4166 4.71899 17.2498 4.42206 16.9528C4.12513 16.6559 3.95831 16.2532 3.95831 15.8333V4.74992H15.0416Z" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.91669 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.0833 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 d-flex justify-content-center mb-2 "  > 
                            <img style="width: 70%;" src="{{ asset('images/Rectangle 1399.svg') }}" alt="Description of the image">
                        </div>
                        <div class="col-xl-8 right">
                            <p class="s1" style="margin: 0px; text-align:justify;">Nitecore P10iX Tactical Flashlight Floodlight, 4000 Lumen LED USB-C Rechargeable 
                                Super Bright Compact with LumenTac Organizer
                            </p>
                            <p  class="mt-3 bold-1" style="margin: 0px;">$20.34</p>
                            <p class="mt-3 s2" style="margin: 0px;">CON-00001 (Order id)
                                <span style="float: right; " class="mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <path d="M2.375 4.75H3.95833H16.625" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.33331 4.74992V3.16659C6.33331 2.74666 6.50013 2.34393 6.79706 2.047C7.09399 1.75007 7.49672 1.58325 7.91665 1.58325H11.0833C11.5032 1.58325 11.906 1.75007 12.2029 2.047C12.4998 2.34393 12.6666 2.74666 12.6666 3.16659V4.74992M15.0416 4.74992V15.8333C15.0416 16.2532 14.8748 16.6559 14.5779 16.9528C14.281 17.2498 13.8782 17.4166 13.4583 17.4166H5.54165C5.12172 17.4166 4.71899 17.2498 4.42206 16.9528C4.12513 16.6559 3.95831 16.2532 3.95831 15.8333V4.74992H15.0416Z" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.91669 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.0833 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 d-flex justify-content-center mb-2"  > 
                            <img style="width: 70%;" src="{{ asset('images/Rectangle 1399.svg') }}" alt="Description of the image">
                        </div>
                        <div class="col-xl-8 right">
                            <p class="s1" style="margin: 0px; text-align:justify;">Nitecore P10iX Tactical Flashlight Floodlight, 4000 Lumen LED USB-C Rechargeable 
                                Super Bright Compact with LumenTac Organizer
                            </p>
                            <p  class="mt-3 bold-1" style="margin: 0px;">$20.34</p>
                            <p class="mt-3 s2" style="margin: 0px;">CON-00001 (Order id)
                                <span style="float: right; " class="mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <path d="M2.375 4.75H3.95833H16.625" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.33331 4.74992V3.16659C6.33331 2.74666 6.50013 2.34393 6.79706 2.047C7.09399 1.75007 7.49672 1.58325 7.91665 1.58325H11.0833C11.5032 1.58325 11.906 1.75007 12.2029 2.047C12.4998 2.34393 12.6666 2.74666 12.6666 3.16659V4.74992M15.0416 4.74992V15.8333C15.0416 16.2532 14.8748 16.6559 14.5779 16.9528C14.281 17.2498 13.8782 17.4166 13.4583 17.4166H5.54165C5.12172 17.4166 4.71899 17.2498 4.42206 16.9528C4.12513 16.6559 3.95831 16.2532 3.95831 15.8333V4.74992H15.0416Z" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.91669 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.0833 8.70825V13.4583" stroke="#C8CAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <hr style="border:1px solid red;"> --}}
            </div>
        </div>
    </div>
    
</body>
</html>