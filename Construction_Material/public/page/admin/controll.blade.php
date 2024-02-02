<?php
include '../root/header.blade.php';
?>
    <link rel="stylesheet" href="{{ asset('css/controll.css') }}">
</head>

<body style="background-color: #F0F2F5">
    <div class="container-fluid">
        <h3>Control</h3>
        <span>Hi, Samantha. Welcome back to CAMEAGLE Admin!</span>
        <div class="category p-2 mt-5 pb-4 bg-body shadow">
            <div class="row">
                <div class="col-12">
                    <div class="row p-3">
                        <div class="col-xl-5">
                            <div class="category d-flex">
                                <svg style="color: #FF6600" width="46" height="46" fill="currentColor"
                                    stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 11h8V3H3v8Zm2-6h4v4H5V5Z"></path>
                                    <path d="M13 3v8h8V3h-8Zm6 6h-4V5h4v4Z"></path>
                                    <path d="M3 21h8v-8H3v8Zm2-6h4v4H5v-4Z"></path>
                                    <path d="M18 13h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3Z"></path>
                                </svg>
                                <span class="px-3">
                                    <h6>Total <br> 2</h6>
                                </span>

                                <!-- Button trigger modal -->
                                <button type="submit" class="border-0 rounded-2 pe-4" data-bs-toggle="modal"
                                    data-bs-target="#create_category" style="background-color:#FF6600;">
                                    <svg width="36" height="36" fill="none" stroke="#fbf4f4"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                                        </path>
                                        <path d="M12 8v8"></path>
                                        <path d="M8 12h8"></path>
                                    </svg>
                                    <span style="color: #ffffff;">Category </span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="create_category" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Add
                                                    category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- body modal -->
                                            <div class="modal-body">
                                                <form action="action.php" class="w-100" method="post">
                                                    <div class="row">

                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Name</label>
                                                            <input class="form-control shadow-none" type="text"
                                                                name="name" id=""
                                                                placeholder="Enter your category name">
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">NameKH</label>
                                                            <input type="text" class="form-control shadow-none"
                                                                name="namekh" id=""
                                                                placeholder="Enter your category nameKH">
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            Description: <br>
                                                            <textarea class="form-control shadow-none" rows="5" cols="50" name="Description" id="Description">
                                                        </textarea>
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Status</label>
                                                            <select class="form-select shadow-none" name="gender"
                                                                id="">
                                                                <option value="Y">Active</option>
                                                                <option value="N">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-secondary shadow-none py-2 px-2 p-0"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2>Category</h2>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
            <script>
                new DataTable('#example');
            </script>
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <table style="width: 100%;" id="example" class="table table-striped">
                        <thead class="shadow p-3 rounded" style="background-color:#FF6600 ; color:#ffffff;">
                            <tr>
                                <th style="width: 6%;">No</th>
                                <th style="width: 10%;">Id</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 24%;">Name Kh</th>
                                <th style="width: 20%;">Discribtion </th>
                                <th style="width: 20%;">Status</th>
                                <th style="width: 0%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="d-flex justify-content-center pt-4 fs-4 ">Categories</p>
        </div>
        <!--sub_category-->
        <div class="sub_category p-2 mt-5 pb-4 bg-body shadow">
            <div class="row">
                <div class="col-12">
                    <div class="row p-3">
                        <div class="col-xl-5">
                            <div class="category d-flex">
                                <svg width="50" height="50" fill="none" stroke="#FF6600" stroke-width="1"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 14.6v5.8a.6.6 0 0 1-.6.6h-3.8a.6.6 0 0 1-.6-.6v-5.8a.6.6 0 0 1 .6-.6h3.8a.6.6 0 0 1 .6.6Z">
                                    </path>
                                    <path
                                        d="M7 9.1v5.8a.6.6 0 0 1-.6.6H2.6a.6.6 0 0 1-.6-.6V9.1a.6.6 0 0 1 .6-.6h3.8a.6.6 0 0 1 .6.6Z">
                                    </path>
                                    <path
                                        d="M22 3.6v5.8a.6.6 0 0 1-.6.6h-3.8a.6.6 0 0 1-.6-.6V3.6a.6.6 0 0 1 .6-.6h3.8a.6.6 0 0 1 .6.6Z">
                                    </path>
                                    <path d="M17 17.5h-3.5a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2H17"></path>
                                    <path d="M11.5 12H7"></path>
                                </svg>
                                <span class="px-3">
                                    <h6>Total <br> 2</h6>
                                </span>
                                <button type="submit" class="border-0 rounded-2 pe-4" data-bs-toggle="modal"
                                    data-bs-target="#create_subcategory" style="background-color:#FF6600;">
                                    <svg width="36" height="36" fill="none" stroke="#fbf4f4"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                                        </path>
                                        <path d="M12 8v8"></path>
                                        <path d="M8 12h8"></path>
                                    </svg>
                                    <span style="color: #ffffff;">Category </span>
                                </button>
                                <div class="modal fade" id="create_subcategory" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Add
                                                    Subcategory</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- body modal -->
                                            <div class="modal-body">
                                                <form action="action.php" class="w-100" method="post">
                                                    <div class="row">

                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Name</label>
                                                            <input class="form-control shadow-none" type="text"
                                                                name="name" id=""
                                                                placeholder="Enter your subcategory name">
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">NameKH</label>
                                                            <input type="text" class="form-control shadow-none"
                                                                name="namekh" id=""
                                                                placeholder="Enter your subcategory nameKH">
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            Description: <br>
                                                            <textarea class="form-control shadow-none" rows="5" cols="50" name="Description" id="Description">
                                                        </textarea>
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Status</label>
                                                            <select class="form-select shadow-none" name="gender"
                                                                id="">
                                                                <option value="Y">Active</option>
                                                                <option value="N">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-secondary shadow-none py-2 px-2 p-0"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2>Sub Category</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <table style="width: 100%;" id="example2" class="table table-striped">
                        <thead class="shadow p-3 rounded" style="background-color:#FF6600 ; color:#ffffff;">
                            <tr>
                                <th style="width: 6%;">No</th>
                                <th style="width: 10%;">Id</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 24%;">Name Kh</th>
                                <th style="width: 20%;">Discribtion </th>
                                <th style="width: 20%;">Status</th>
                                <th style="width: 0%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td>
                                    <a href="" class="btn_edite" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit">
                                        <svg width="18" height="18" fill="none" stroke="#007bff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                    <span class="btn delete">
                                        <i class="fa fa-trash-o" style="font-size:18px; color:red;"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td>
                                    <a href="" class="btn_edite" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit">
                                        <svg width="18" height="18" fill="none" stroke="#007bff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                    <span class="btn delete">
                                        <i class="fa fa-trash-o" style="font-size:18px; color:red;"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Steel</td>
                                <td>Dek</td>
                                <td>circle</td>
                                <td>active</td>
                                <td>
                                    <a href="" class="btn_edite" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit">
                                        <svg width="18" height="18" fill="none" stroke="#007bff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                    <span class="btn delete">
                                        <i class="fa fa-trash-o" style="font-size:18px; color:red;"></i>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        new DataTable('#example2');
                    </script>
                </div>
            </div>
            <p class="d-flex justify-content-center pt-4">sub-categories</p>
        </div>
        <!--banner-->
        <div class="p-2 banner mt-5 pb-4 bg-body shadow">
            <div class="row">
                <div class="col-12">
                    <div class="row p-3">
                        <div class="col-xl-5">
                            <div class="category d-flex">
                                <svg width="46" height="46" fill="none" stroke="#FF6600"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.25v8.625a1.884 1.884 0 0 0 1.875 1.875"></path>
                                    <path d="M9.75 10.125h6.75"></path>
                                    <path d="M9.75 13.875h6.75"></path>
                                    <path
                                        d="M5.25 16.875V6A.75.75 0 0 1 6 5.25h14.25A.75.75 0 0 1 21 6v11.25a1.5 1.5 0 0 1-1.5 1.5H3.375a1.885 1.885 0 0 0 1.875-1.875v0Z">
                                    </path>
                                </svg>
                                <span class="px-3">
                                    <h6>Total <br> 2</h6>
                                </span>
                                <button type="submit" class="border-0 rounded-2 pe-4" data-bs-toggle="modal"
                                    data-bs-target="#create_banner" style="background-color:#FF6600;">
                                    <svg width="36" height="36" fill="none" stroke="#fbf4f4"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                                        </path>
                                        <path d="M12 8v8"></path>
                                        <path d="M8 12h8"></path>
                                    </svg>
                                    <span style="color: #ffffff;">Add banner</span>
                                </button>
                                <div class="modal fade" id="create_banner" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Add
                                                    Subcategory</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- body modal -->
                                            <div class="modal-body">
                                                <form action="action.php" class="w-100" method="post">
                                                    <div class="row">

                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Name</label>
                                                            <input class="form-control shadow-none" type="text"
                                                                name="name" id=""
                                                                placeholder="Enter your subcategory name">
                                                        </div>
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Status</label>
                                                            <select class="form-select shadow-none" name="gender"
                                                                id="">
                                                                <option value="Y">Active</option>
                                                                <option value="N">Inactive</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12 mt-2">
                                                            Description: <br>
                                                            <textarea class="form-control shadow-none" rows="5" cols="50" name="Description" id="Description">
                                                        </textarea>
                                                        </div>


                                                        <div class="col-6">
                                                            <span>Upload your screenshot receipt</span>
                                                            <div id="imagePreview">
                                                                <img id="preview"
                                                                    src="https://lh3.googleusercontent.com/proxy/76SZbmxGaIHfbcuat2lqXfs5uYyG1PGosotbg98twqWLR-PKODek6d95XJRvxzIxtbmK1ypvl9CcskTjVJcLZvyj08AOFDaPASkSfKdn9mv4nKeZz5PxcFamiNMNPIA"
                                                                    alt="Image Preview">
                                                            </div>
                                                            <div class="mb-3 pt-3">
                                                                <span>Choose file </span><span><input type="file"
                                                                        id="imageInput"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-secondary shadow-none py-2 px-2 p-0"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2>Make your banner</h2>
                            <span>Banner must add follow by your event</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <table style="width: 100%;" id="example3" class="table table-striped">
                        <thead class="shadow p-3 rounded" style="background-color:#FF6600 ; color:#ffffff;">
                            <tr>
                                <th style="width: 10%;">No</th>
                                <th style="width: 10%;">Id</th>
                                <th style="width: 22%;">Name</th>
                                <th style="width: 33%;">Banner Preview</th>
                                <th style="width: 15%;">Discription</th>
                                <th style="width: 10%;">Status</th>
                                <th style="width: 0%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Khmer New Year</td>
                                <td>
                                    <div class="image" style="width: 90%; height:100px">
                                        <img style="width:100%; height:100%;"
                                            src="https://img.freepik.com/free-psd/digital-marketing-agency-corporate-facebook-cover-template_106176-2258.jpg?w=1380&t=st=1706456826~exp=1706457426~hmac=22535bce7c1a581d22955f14837d6f214dd80a454229aa1702321d5da1fc7fe5"
                                            alt="">
                                    </div>
                                </td>
                                <td>banner in slide</td>
                                <td>active</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Khmer New Year</td>
                                <td>
                                    <div class="image" style="width: 90%; height:100px">
                                        <img style="width:100%; height:100%;"
                                            src="https://img.freepik.com/free-vector/hand-drawn-horizontal-banner-template-chinese-new-year-celebration_52683-152938.jpg?w=1060&t=st=1706457092~exp=1706457692~hmac=9c5ef5135530dc118c158014cf25ffb52c32f070d064e6a9914ca8c2bab578e3"
                                            alt="">
                                    </div>
                                </td>
                                <td>banner in slide</td>
                                <td>active</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>Khmer New Year</td>
                                <td>
                                    <div class="image" style="width: 90%; height:100px">
                                        <img style="width:100%; height:100%;"
                                            src="https://img.freepik.com/free-psd/real-estate-house-property-facebook-cover-banner-template_120329-1862.jpg?size=626&ext=jpg&ga=GA1.2.726890622.1706456818&semt=sph"
                                            alt="">
                                    </div>
                                </td>
                                <td>banner in slide</td>
                                <td>active</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        new DataTable('#example3');
                    </script>
                </div>
            </div>
        </div>
        <!--Announcement-->
        <div class="Announcement p-2 mt-5 pb-4 bg-body shadow">
            <div class="row">
                <div class="col-12">
                    <div class="row p-3">
                        <div class="col-xl-5">
                            <div class="category d-flex">
                                <svg width="46" height="46" fill="none" stroke="#FF6600" stroke-width="1"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14 13.997H7a4 4 0 0 1 0-8h7m0 8v-8 8Zm0 0 6.102 3.487a.6.6 0 0 0 .898-.521V3.03a.6.6 0 0 0-.898-.521L14 5.997v8Z">
                                    </path>
                                    <path d="M7.757 19.3 7 14h4l.677 4.74a1.98 1.98 0 0 1-3.92.56Z"></path>
                                </svg>
                                <span class="px-3">
                                    <h6>Total <br> 2</h6>
                                </span>
                                <button type="submit" class="border-0 rounded-2 pe-4" data-bs-toggle="modal"
                                    data-bs-target="#create_announ" style="background-color:#FF6600;">
                                    <svg width="36" height="36" fill="none" stroke="#fbf4f4"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                                        </path>
                                        <path d="M12 8v8"></path>
                                        <path d="M8 12h8"></path>
                                    </svg>
                                    <span style="color: #ffffff;">Category </span>
                                </button>
                                <div class="modal fade" id="create_announ" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Add
                                                    Subcategory</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- body modal -->
                                            <div class="modal-body">
                                                <form action="action.php" class="w-100" method="post">
                                                    <div class="row">
                                                        <div class="col-xl-12 mt-2">
                                                            Description: <br>
                                                            <textarea class="form-control shadow-none" rows="5" cols="50" name="Description" id="Description">
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 mt-2">
                                                            <label for="">Status</label>
                                                            <select class="form-select shadow-none" name="gender"
                                                                id="">
                                                                <option value="Y">Active</option>
                                                                <option value="N">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-secondary shadow-none py-2 px-2 p-0"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2>Create your Announcement</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <table style="width: 100%;" id="example4" class="table table-striped">
                        <thead class="shadow p-3 rounded" style="background-color:#FF6600 ; color:#ffffff;">
                            <tr>
                                <th style="width: 10%;">No</th>
                                <th style="width: 10%;">Id</th>
                                <th style="width: 60%;text-align: center;">Discription</th>
                                <th style="width: 30%;">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#1</td>
                                <td>
                                    This type of announcement email has the purpose of introducing a new business or
                                    location. It also allows a company to reach out to an existing customer base
                                    instantly through their inboxes, instead of relying on mainstream channels such as
                                    TV advertisements or printed media.If you have an existing subscriber base, you can
                                    leverage this valuable contact list to share key business updates that help your
                                    brand stay top of mind. Note that business launch emails are mainly used by two
                                    types of businesses:(Personal) brands that have built a reputation and are now
                                    releasing their own store, service or product.Existing businesses that have built a
                                    customer base and are now opening a new store in a different area (or launching a
                                    new online retail store). Let’s look at an announcement email for the second
                                    instance: Opening a store in a new location.
                                    https://www.pipedrive.com/en/blog/business-email-announcements
                                </td>
                                <td>Inactive</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="">1</td>
                                <td>#1</td>
                                <td>
                                    This type of announcement email has the purpose of introducing a new business or
                                    location. It also allows a company to reach out to an existing customer base
                                    instantly through their inboxes, instead of relying on mainstream channels such as
                                    TV advertisements or printed media.If you have an existing subscriber base, you can
                                    leverage this valuable contact list to share key business updates that help your
                                    brand stay top of mind. Note that business launch emails are mainly used by two
                                    types of businesses:(Personal) brands that have built a reputation and are now
                                    releasing their own store, service or product.Existing businesses that have built a
                                    customer base and are now opening a new store in a different area (or launching a
                                    new online retail store). Let’s look at an announcement email for the second
                                    instance: Opening a store in a new location.
                                    https://www.pipedrive.com/en/blog/business-email-announcements
                                </td>
                                <td>Inactive</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        new DataTable('#example4');
                    </script>
                </div>
            </div>
        </div>


    </div>
</body>
<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const previewImage = document.getElementById('preview');
        const previewText = document.querySelector('#imagePreview p');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function() {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set the desired width and height
                    const maxWidth = 800;
                    const maxHeight = 200;

                    let width = img.width;
                    let height = img.height;

                    if (width > height) {
                        if (width > maxWidth) {
                            height *= maxWidth / width;
                            width = maxWidth;
                        }
                    } else {
                        if (height > maxHeight) {
                            width *= maxHeight / height;
                            height = maxHeight;
                        }
                    }
                    canvas.width = width;
                    canvas.height = height;

                    ctx.drawImage(img, 0, 0, width, height);

                    previewImage.src = canvas.toDataURL('image/jpeg');
                    previewText.textContent = '';
                };
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '';
            previewText.textContent = 'No image selected';
        }
    });
</script>

</html>
