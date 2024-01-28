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
                <span class="btn-scan " >
                    <button  type="submit">
                        <svg width="25" height="25" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6.6v1.8a.6.6 0 0 1-.6.6H6.6a.6.6 0 0 1-.6-.6V6.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6Z"></path>
                            <path d="M6 12h3"></path>
                            <path d="M15 12v3"></path>
                            <path d="M12 18h3"></path>
                            <path d="m12 12.011.01-.011"></path>
                            <path d="m18 12.011.01-.011"></path>
                            <path d="m12 15.011.01-.011"></path>
                            <path d="m18 15.011.01-.011"></path>
                            <path d="m18 18.011.01-.011"></path>
                            <path d="M12 9.011 12.01 9"></path>
                            <path d="M12 6.011 12.01 6"></path>
                            <path d="M9 15.6v1.8a.6.6 0 0 1-.6.6H6.6a.6.6 0 0 1-.6-.6v-1.8a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6Z"></path>
                            <path d="M18 6.6v1.8a.6.6 0 0 1-.6.6h-1.8a.6.6 0 0 1-.6-.6V6.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6Z"></path>
                            <path d="M18 3h3v3"></path>
                            <path d="M18 21h3v-3"></path>
                            <path d="M6 3H3v3"></path>
                            <path d="M6 21H3v-3"></path>
                        </svg>
                         Scan KHQR</button>
                    {{-- <button  type="submit"><i class="fa fa-qrcode" style="font-size:20px"></i> Scan KHQR</button> --}}
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
            <div class="col-9 shadow p-3 bg-body rounded">
                <div class="no_selection">
                    <h5>No select payment type!</h5>
                </div>
            </div>
            <div class="col-3">
                <div class="payment p-4 shadow p-3 bg-body rounded">
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
