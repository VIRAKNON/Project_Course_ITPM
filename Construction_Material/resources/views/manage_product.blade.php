<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</header>
<style>

    .s1{
        color: var(--Theme-Color-Dark, #464255);
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .s2{
        color: #939393;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Barlow;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .r1{
        display: flex;
        width: 422px;
        height: 108px;
        padding: 20px;
        align-items: flex-start;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 10px;
        background: var(--white, #FFF);
        position: relative;
    }
    button{
        display: flex;
        width: 229px;
        
        padding-top: 11px;
        padding-right: 21px;
        padding-bottom: 10px;
        padding-left: 21px;
        /* padding: 11px 21px 10px 21px; */
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: #F60;
        border: none;
    }
    .add{
        color: #FFF;
        font-family: Inter;
        font-size: 22px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .box svg{
        position: absolute;
        bottom:3px;
    }
</style>

<body>
    
    <div class="container" style="background: #F0F2F5; height:1307px; width:1599px;float:right;">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="107" margin-bottom="3px" height="107" viewBox="0 0 107 107" fill="none">
                            <path d="M53.5003 13.375L54.1292 12.1172L53.5003 11.8028L52.8714 12.1172L53.5003 13.375ZM93.6253 33.4375H95.0316V32.5684L94.2542 32.1797L93.6253 33.4375ZM93.6253 73.5625L94.2542 74.8203L95.0316 74.4316V73.5625H93.6253ZM53.5003 93.625L52.8714 94.8828L53.5003 95.1972L54.1292 94.8828L53.5003 93.625ZM13.3753 73.5625H11.9691V74.4316L12.7464 74.8203L13.3753 73.5625ZM13.3753 33.4375L12.7464 32.1797L11.9691 32.5684V33.4375H13.3753ZM74.3858 57.9583C74.3858 58.735 75.0154 59.3646 75.792 59.3646C76.5687 59.3646 77.1983 58.735 77.1983 57.9583H74.3858ZM75.792 42.3542H77.1983V41.4851L76.4209 41.0964L75.792 42.3542ZM36.2959 21.0339C35.6012 20.6865 34.7565 20.9681 34.4092 21.6628C34.0619 22.3574 34.3435 23.2021 35.0381 23.5495L36.2959 21.0339ZM52.0941 91.3958C52.0941 92.1725 52.7237 92.8021 53.5003 92.8021C54.277 92.8021 54.9066 92.1725 54.9066 91.3958H52.0941ZM52.8714 14.6328L92.9964 34.6953L94.2542 32.1797L54.1292 12.1172L52.8714 14.6328ZM92.2191 33.4375V73.5625H95.0316V33.4375H92.2191ZM92.9964 72.3047L52.8714 92.3672L54.1292 94.8828L94.2542 74.8203L92.9964 72.3047ZM54.1292 92.3672L14.0042 72.3047L12.7464 74.8203L52.8714 94.8828L54.1292 92.3672ZM14.7816 73.5625V33.4375H11.9691V73.5625H14.7816ZM14.0042 34.6953L54.1292 14.6328L52.8714 12.1172L12.7464 32.1797L14.0042 34.6953ZM92.9964 32.1797L52.8714 52.2422L54.1292 54.7578L94.2542 34.6953L92.9964 32.1797ZM54.1292 52.2422L14.0042 32.1797L12.7464 34.6953L52.8714 54.7578L54.1292 52.2422ZM77.1983 57.9583V42.3542H74.3858V57.9583H77.1983ZM76.4209 41.0964L36.2959 21.0339L35.0381 23.5495L75.1631 43.612L76.4209 41.0964ZM54.9066 91.3958V53.5H52.0941V91.3958H54.9066Z" fill="#FF6600"/>
                        </svg>
                      </div>
                </div>
                <div class="col-xl-8">
                <div class="infor mt-1">
                    <span >
                        <button style="width:229px;" type="button">
                            <span style="float: left;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M22 40.3334C32.0833 40.3334 40.3333 32.0834 40.3333 22.0001C40.3333 11.9167 32.0833 3.66675 22 3.66675C11.9167 3.66675 3.66667 11.9167 3.66667 22.0001C3.66667 32.0834 11.9167 40.3334 22 40.3334Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.6667 22H29.3333" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 29.3334V14.6667" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="add">Add Product</span>
                        </button>
                    </span>
                </div>
                </div>
           </div>
        </div>
    </div>


</body>
</html>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>