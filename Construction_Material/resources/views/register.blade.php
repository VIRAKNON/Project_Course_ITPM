
<?php 

    include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    {{-- <span>this is span </span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4 class="text-center">CAMEAGLE</h4>
                        <p class="text-center">Construction Material Platform</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp">
                                <span>
                                    <label for="lastname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp">
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" aria-describedby="phoneHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmpassword">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <textarea class="form-control" id="address" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <form action="" class="container d-flex align-items-center justify-content-center vh-100 ">
        <table class="table mx-auto ">
            <tr class="row">
               <td class="col-md-6">
                    <label for="">First Name</label> <br>
                    <input id="firstname" type="text" placeholder="Enter your First Name">
               </td>
               <td class="col-md-6"> 
                    <label for="">Last Name</label> <br>
                    <input id="lastname" type="text" placeholder="Enter your last Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Phone Number</label> <br>
                    <input id="phone" type="text" placeholder="Enter your phone number">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Email</label> <br>
                    <input id="email" type="email" placeholder="Enter your email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Address: (EX: #001,st192, Sangkat Teuk Laork 3 , Khan Toul Kork , Phnom Penh , Cambodia. )</label>
                    <input id="address" type="text" placeholder="Enter your address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Password</label>
                    <input id="password" type="password" placeholder="Enter your password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Confirm Password</label>
                    <input id="re-password" type="password" placeholder="Confirm Password">
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <button type="button" class="btn ">Register</button>
               </td>
            </tr>
            <tr>
                <td>
                    <p class="no-acc">Already have an Account? <span><a href="">Login!</a></span> </p>
                    
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
