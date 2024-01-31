<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="{{asset('css/manage_product.css')}}">
</head>
<body  style="background: #F0F2F5;">

   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12" style="width: 290px;">
             <p class="s1">Manage Product</p>
         </div>
     </div>
     <div class="row">
         <div class="col-xl-12" style="width: 464px;">
             <p class="s2">Hi, Samantha. Welcome back  to CAMEAGLE Admin!</p>
         </div>
     </div>
     <div class="row" >
        <div class="r1 d-flex justify-content-center align-center mt-1" style="margin-left: 20px;" >
             <div class="col-xl-3  m-0" style="width:32%;">            
                   <div class="box">
                     <svg xmlns="http://www.w3.org/2000/svg" width="80" margin-bottom="3px" height="80" viewBox="0 0 107 107" fill="none">
                         <path d="M53.5003 13.375L54.1292 12.1172L53.5003 11.8028L52.8714 12.1172L53.5003 13.375ZM93.6253 33.4375H95.0316V32.5684L94.2542 32.1797L93.6253 33.4375ZM93.6253 73.5625L94.2542 74.8203L95.0316 74.4316V73.5625H93.6253ZM53.5003 93.625L52.8714 94.8828L53.5003 95.1972L54.1292 94.8828L53.5003 93.625ZM13.3753 73.5625H11.9691V74.4316L12.7464 74.8203L13.3753 73.5625ZM13.3753 33.4375L12.7464 32.1797L11.9691 32.5684V33.4375H13.3753ZM74.3858 57.9583C74.3858 58.735 75.0154 59.3646 75.792 59.3646C76.5687 59.3646 77.1983 58.735 77.1983 57.9583H74.3858ZM75.792 42.3542H77.1983V41.4851L76.4209 41.0964L75.792 42.3542ZM36.2959 21.0339C35.6012 20.6865 34.7565 20.9681 34.4092 21.6628C34.0619 22.3574 34.3435 23.2021 35.0381 23.5495L36.2959 21.0339ZM52.0941 91.3958C52.0941 92.1725 52.7237 92.8021 53.5003 92.8021C54.277 92.8021 54.9066 92.1725 54.9066 91.3958H52.0941ZM52.8714 14.6328L92.9964 34.6953L94.2542 32.1797L54.1292 12.1172L52.8714 14.6328ZM92.2191 33.4375V73.5625H95.0316V33.4375H92.2191ZM92.9964 72.3047L52.8714 92.3672L54.1292 94.8828L94.2542 74.8203L92.9964 72.3047ZM54.1292 92.3672L14.0042 72.3047L12.7464 74.8203L52.8714 94.8828L54.1292 92.3672ZM14.7816 73.5625V33.4375H11.9691V73.5625H14.7816ZM14.0042 34.6953L54.1292 14.6328L52.8714 12.1172L12.7464 32.1797L14.0042 34.6953ZM92.9964 32.1797L52.8714 52.2422L54.1292 54.7578L94.2542 34.6953L92.9964 32.1797ZM54.1292 52.2422L14.0042 32.1797L12.7464 34.6953L52.8714 54.7578L54.1292 52.2422ZM77.1983 57.9583V42.3542H74.3858V57.9583H77.1983ZM76.4209 41.0964L36.2959 21.0339L35.0381 23.5495L75.1631 43.612L76.4209 41.0964ZM54.9066 91.3958V53.5H52.0941V91.3958H54.9066Z" fill="#FF6600"/>
                     </svg>
                   </div>
             </div>
             <div class="col-xl-8">
             <div class="infor mt-1">
                 <span >
                     <button class="btnCreate" style="width:229px; height: 51px;" type="button" data-bs-toggle="modal" data-bs-target="#editmodal">
                         <span style="float: left;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 44 44" fill="none">
                                 <path d="M22 40.3334C32.0833 40.3334 40.3333 32.0834 40.3333 22.0001C40.3333 11.9167 32.0833 3.66675 22 3.66675C11.9167 3.66675 3.66667 11.9167 3.66667 22.0001C3.66667 32.0834 11.9167 40.3334 22 40.3334Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M14.6667 22H29.3333" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M22 29.3334V14.6667" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </span>
                         <span class="add">Add Product</span>
                     </button>              
            

                     <!-- Modal -->
                     <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <!-- body modal -->
                                 <div class="modal-body">
                                    <form action="action.php" class="w-100" method="post">
                                       <div class="row">
                                          
                                          <div class="col-xl-4 mt-2">
                                             <label for="">Product Name</label>
                                             <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                          </div>
                                          <div class="col-xl-4 mt-2">
                                             <label for="">Brand Name</label>
                                             <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                          </div>
                                          <div class="col-xl-4 mt-2">
                                             <label for="">Stock Date</label>
                                             <input class="form-control shadow-none" type="date" name="std" id="">
                                          </div>
                                          <div class="col-xl-6 mt-2">
                                             <label for="">Category</label>
                                             <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                          </div>
                                          <div class="col-xl-4 mt-2">
                                             <label for="">Unit Price ($)</label>
                                             <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                          </div>
                                          <div class="col-xl-2 mt-2">
                                             <label for="">Unit Cost ($)</label>
                                             <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                          </div>
                                          <div class="col-xl-6 mt-2">
                                             <label for="">In Stock</label>
                                             <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                          </div>
                                          <div class="col-xl-6 mt-2">
                                             <label for="">Status</label>
                                             <select class="form-select shadow-none" name="gender" id="">
                                                <option value="Y">Active</option>
                                                <option value="N">Inactive</option>
                                             </select>
                                          </div>
                                          <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                             <label for="">Upload your Product Image</label>
                                          </div> 
                                          <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                             <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                          </div>                
                                          <div class="col-xl-4 mt-2">
                                          </div> 
                                          <div class="col-xl-4 mt-2">
                                             <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                          </div> 
                                          <div class="col-xl-4 mt-2">
                                          </div> 
                                       </div>                                       
                                    </form>
                                 </div>
                            
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary shadow-none">Create</button>
                                 </div>
                              </div>
                        </div>
                     </div>

                 </span>
             </div>
             </div>
        </div>

     </div>
     <div class="row mt-4">
        <div class="col-xl-12 ">
         <table id="example" class="table table-hover" style="width:100%">
            <thead style="background-color: #FF6600; color: white; border: none;" >
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Brand Name</th>
                    <th>Stock Date</th>
                    <th>Category</th>
                    <th>Unit Price ($)</th>
                    <th>Unit Cost ($)</th>
                    <th>In Stock</th>
                    <th>Path Sample</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-warning" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-warning shadow-none">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                              <path d="M18 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                           </svg>
                        </button>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>Product Id</td>
                  <td>Product Name</td>
                  <td>Brand Name</td>
                  <td>Stock Date</td>
                  <td>Category</td>
                  <td>Unit Price ($)</td>
                  <td>Unit Cost ($)</td>
                  <td>In Stock</td>
                  <td>Path Sample</td>
                  <td>Status</td>
                  <td class="d-flex">
                     {{-- action edit  --}}
                     <div>
                        <button type="button"  style="color:#C8CAD8"  class="btn px-2 m-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#editproduct">
                           <i class="far fa-edit fa-lg"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title fs-3 text-primary" id="exampleModalLabel">Edit Product</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                       <form action="action.php" class="w-100" method="post">
                                          <div class="row">
                                             
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Product Name</label>
                                                <input class="form-control shadow-none" type="text" name="productname" id="" placeholder="Enter your product name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Brand Name</label>
                                                <input type="text" class="form-control shadow-none" name="brandname" id="" placeholder="Enter your brand name">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Stock Date</label>
                                                <input class="form-control shadow-none" type="date" name="std" id="">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Category</label>
                                                <input class="form-control shadow-none" type="text" name="category" id="" placeholder="Enter your category">
                                             </div>
                                             <div class="col-xl-4 mt-2">
                                                <label for="">Unit Price ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitprice" id="" placeholder="Enter your unit price">
                                             </div>
                                             <div class="col-xl-2 mt-2">
                                                <label for="">Unit Cost ($)</label>
                                                <input type="number" step="0.01" class="form-control shadow-none" name="unitcost" id="" placeholder="Enter your unit cost">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">In Stock</label>
                                                <input type="number" class="form-control shadow-none" name="instock" id="" placeholder="Enter your stock number">
                                             </div>
                                             <div class="col-xl-6 mt-2">
                                                <label for="">Status</label>
                                                <select class="form-select shadow-none" name="gender" id="">
                                                   <option value="Y">Active</option>
                                                   <option value="N">Inactive</option>
                                                </select>
                                             </div>
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <label for="">Upload your Product Image</label>
                                             </div> 
                                             <div class="col-xl-12 mt-3 d-flex justify-content-center">
                                                <img src="../updoads/blankimage.jpg" width="300px" alt="">
                                             </div>                
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                                <input type="file" class="form-control shadow-none" name="pathsimple" id="" placeholder="Enter your path simple">
                                             </div> 
                                             <div class="col-xl-4 mt-2">
                                             </div> 
                                          </div>                                       
                                       </form>
                                    </div>
                                 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary shadow-none py-2 px-2 p-0" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-primary shadow-none py-2 px-2 p-0">Update</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     {{-- action delete  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <i style="color:#C8CAD8" class="fas fa-trash fa-lg"></i>
                        </button>
                     </div>
                     {{-- action detail  --}}
                     <div>
                        <button class="btn border-0 shadow-none">
                           <svg width="30" height="30" fill="#C8CAD8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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