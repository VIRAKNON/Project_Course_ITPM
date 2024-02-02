<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="{{ asset('css/manage_user.css') }}">
</head>

<body style="background: #F0F2F5;">

    <div class="container-fluid w-100">
        <div class="row">
            <div class="col-xl-12" style="width: 290px;">
                <p class="s1">Manage User</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12" style="width: 464px;">
                <p class="s2">Hi, Samantha. Welcome back to CAMEAGLE Admin!</p>
            </div>
        </div>

        <div class="row">
            <div class="r1 d-flex justify-content-center align-center mt-1">
                <div class="col-xl-2  m-0" style="width:12%;">
                    <div class="box">
                        <img src="{{ asset('images/manage_user.svg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 text">
                        <p>Total User <br>
                            <span>3</span>
                        </p>

                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="infor mt-1">
                        <span>
                            <button class="btnCreate" style="width:229px; height: 51px;" type="button"
                                data-bs-toggle="modal" data-bs-target="#editmodal">
                                <span style="float: left;">
                                    <img src="{{ asset('images/broom.svg') }}" alt="">
                                </span>
                                <span class="add">Clear all User</span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-xl-12 ">
                <table id="example" class="table table-hover" style="width:100%">
                    <thead style="background-color: #FF6600; color: white; border: none;">
                        <tr>
                            <th>No</th>
                            <th>User id</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Remark</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>Somalytadany</td>
                            <td>sompharongtha13@gmail.com</td>
                            <td>093234223</td>
                            <td>phone penh</td>
                            <td>1243rtegsdddddd</td>
                            <td>Clothes</td>
                            <td class="d-flex">
                                {{-- action edit  --}}
                                <div>
                                    <button type="button" style="color:#C8CAD8"
                                        class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal"
                                        data-bs-target="#edituser">
                                        <i class="far fa-edit fa-lg"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edituser" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-3 text-warning" id="exampleModalLabel">
                                                        Edit User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <form action="action.php" class="w-100" method="post">
                                                        <div class="row">

                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Full Name</label>
                                                                <input type="text" class="form-control shadow-none"
                                                                    name="fullname" id=""
                                                                    placeholder="Enter your full name">
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Email</label>
                                                                <input class="form-control shadow-none" type="email"
                                                                    name="email" id="">
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Phone Number</label>
                                                                <input class="form-control shadow-none" type="number"
                                                                    name="phone" id=""
                                                                    placeholder="Enter your phone number">
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Address</label>
                                                                <input type="text" class="form-control shadow-none"
                                                                    name="address" id=""
                                                                    placeholder="Enter your address">
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Password</label>
                                                                <input type="password" class="form-control shadow-none"
                                                                    name="password" id=""
                                                                    placeholder="Enter your password">
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <label for="">Remark</label>
                                                                <input type="text" class="form-control shadow-none"
                                                                    name="remark" id=""
                                                                    placeholder="Enter your remark">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary shadow-none"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button"
                                                        class="btn btn-warning shadow-none">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- action delete  --}}
                                <div>
                                    <button class="btn border-0 shadow-none" data-bs-toggle="modal"
                                        data-bs-target="#deleteuser">
                                        <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteuser" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Delete
                                                        User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure, You want to delete this user ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="alert"
                                                        data-target="#deleteAlert">Delete </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- action detail  --}}
                                <div>
                                    <button class="btn border-0 shadow-none">
                                        <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                            <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                            <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                include '../resources/views/root/dataTable.blade.php';
                ?>

            </div>
        </div>
    </div>


</body>

</html>
