<?php
include '../resources/views/root/header.blade.php';
?>
</head>
<body>
    <div class="container w-50">
        <form action="{{asset('brand/createBrand.php')}}" method="POST">
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand ID</label>
                <input type="text" class="form-control" id="brand_id" placeholder="Enter brand ID">
            </div>
            <div class="mb-3">
                <label for="brand_name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="brand_name" placeholder="Enter brand name">
            </div>
            <div class="mb-3">
                <label for="brand_namekh" class="form-label">Brand Name (Khmer)</label>
                <input type="text" class="form-control" id="brand_namekh" placeholder="Enter brand name (Khmer)">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="" id="" class="form-control">
                    <option value="">dasfa</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="" id="" class="form-control">
                    <option value="Y">Active</option>
                    <option value="N">Inactive</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" name="btnCreate" value="Create">
        </form>
    </div>
</body>

</html>
