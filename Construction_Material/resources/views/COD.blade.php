<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/COD.css")}}">
    <title>cardpay</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h4>Your ordering with <span style="color: #FF6600;">Eagle Construction Shop</span></h4>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12 btn">
                <span class="btn-scan" >
                    <button  type="submit"><i class="fa fa-qrcode" style="font-size:20px"></i> Scan KHQR</button>
                </span>
                <span class="btn_card">
                    <button type="submit"><i class="fa fa-credit-card" style="font-size:20px; color:white;"></i> Card Pay</button>
                </span>
                <span class="COD">
                    <button type="submit"><i class="fa fa-dollar" style="font-size:17px"></i> COD</button>
                </span>
                <span>Please Select Payment Type!</span>
            </div>
        </div>
        <div class="row">
            <div class="col-9 shadow p-3 bg-body rounded">
                <div class="no_selection">
                    <h5 style="text-align: center;">Welcome to COD payment!</h5>
                </div>
                <div class="row mt-5">
                    <div class="infomation">
                        <span>Order Infomation</span>
                        <div class="col-12 pt-3">
                            <div class="row">
                                <div class="col-4">
                                    <form action="">
                                        <label for="">First Name</label><br>
                                        <input type="text" name="" id="f_name" placeholder="Enter your First Name">
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form action="">
                                        <label for="">last Name</label><br>
                                        <input type="text" name="" id="l_name" placeholder="Enter your Last Name">
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <form action="">
                                        <label for="">Your Phone Number</label><br>
                                        <input type="text" name="" id="num_phone" placeholder="Enter Your Phone Number">
                                    </form>
                                </div>
                                <div class="col-6 float-start">
                                    <form action="">
                                        <label for="">Your Email</label><br>
                                        <input type="email" name="" id="" placeholder="Enter Your Email">
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <label for="">Address: ( EX: #001, St192 , sangkat teuk la’ork 3 , khan Toul kork , Phnom Penh, Cambodia.)</label><br>
                                    <input type="text" name="" id="Address" placeholder="Enter Your Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 pb">
                <div class="payment p-4">
                    <div class="row shadow p-3 bg-body rounded">
                        <div class="col-12">
                            <h6>ORDER SUMMARY</h6>
                            <span class="float-start">Price</span><span class="float-end">$0.00</span><br>
                            <span class="float-start">Shipping</span><span class="float-end">$0.00</span><br>
                            <span class="float-start">Tax</span><span class="float-end">$0.00</span><br>
                            <span class="float-start">Discount price</span><span class="float-end">$0.00</span><br>
                            <hr>
                            <span class="float-start">Total</span><span class="float-end">$0.00</span>
                        </div>
                        <button class="btn_pay mt-4" type="submit">Pay Now!</button>
                    </div>
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
            const maxWidth = 200;
            const maxHeight = 470;

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

