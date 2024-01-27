<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/CheckOut.css")}}">
    <title>CheckoutPage</title>
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
                    <button type="submit"><i class="fa fa-credit-card" style="font-size:20px"></i> Card Pay</button>
                </span>
                <span class="COD">
                    <button type="submit"><i class="fa fa-dollar" style="font-size:17px"></i> COD</button>
                </span>
                <span>Please Select Payment Type!</span>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="no_selection">
                    <h5>No select payment type!</h5>
                </div>
            </div>
            <div class="col-3">
                <div class="payment p-4">
                    <h6>ORDER SUMMARY</h6>
                    <div class="row">
                        <div class="col-12">
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
</html>
