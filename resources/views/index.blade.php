<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <style>
        * {
            font-family: bold;
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        nav {
            height: 80px;
            background: rgba(0, 125, 196, 1);
        }

        nav img {
            width: 400px;
            position: absolute;
            top: 15px;
            left: 5%;
        }

        nav ul {
            float: right;
            margin-right: 25px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 15px;
        }

        nav ul li a {
            position: relative;
            color: white;
            font-size: 18px;
            padding: 5px 0;
            text-transform: uppercase;
        }

        nav ul li a:before {
            position: absolute;
            content: '';
            left: 0;
            bottom: 0;
            height: 2px;
            width: 100%;
            background: white;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform .4s linear;
        }

        nav ul li a:hover:before {
            transform: scaleX(1);
            transform-origin: left;
        }

        label #btn,
        label #cancel {
            color: white;
            font-size: 30px;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        #check {
            display: none;
        }

        @media (max-width: 1118px) {
            nav img {
                left: 8%;
            }
        }

        @media (max-width: 944px) {
            nav img {
                left: 6%;
                top: 15px;
                width: 350px;
            }

            nav ul li a {
                font-size: 17px;
            }
        }

        @media (max-width: 860px) {
            label #btn {
                display: block;
            }

            ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #34495e;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav ul li {
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }

            nav ul li a {
                font-size: 20px;
            }

            #check:checked~ul {
                left: 0;
            }

            #check:checked~label #btn {
                display: none;
            }

            #check:checked~label #cancel {
                display: block;
            }
        }

        nav ul li a.disabled {
            pointer-events: none;
            color: #ccc;
        }

        /* The footer is fixed to the bottom of the page */

        footer {
            position: relative;
            bottom: 0;
        }

        @media (max-height:800px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }

        .footer-distributed {
            background-color: #2d2a30;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 0;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            width: 30%;
        }

        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'bold', cursive;
            margin: 0;
        }


        .footer-distributed h3 span {
            color: #e0ac1c;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-company-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center {
            width: 35%;
        }

        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }

        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .footer-distributed .footer-center p a {
            color: #e0ac1c;
            text-decoration: none;
            ;
        }

        /* Footer Right */

        .footer-distributed .footer-right {
            width: 30%;
        }

        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons {
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }

        .footer-distributed .footer-icons a:hover {
            background-color: #3F71EA;
        }

        .footer-links a:hover {
            color: #3F71EA;
        }

        @media (max-width: 880px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i {
                margin-left: 0;
            }
        }
    </style>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!-- <a href="https://dgblaoleasing.com/">Home</a>
    <a href="{{url('/admin')}}">Admin</a>
    <a href="{{url('/form')}}">App</a> -->

    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <a href="https://dgblaoleasing.com/"><img src="assets/img/DGB-LOGO.png" alt=""></a>
        <ul>
            <li>
                <a href="https://dgblaoleasing.com/">Home</a>
            </li>
            <li>
                <a href="{{url('/')}}">App</a>
            </li>
            <li>
                <a href="{{url('/admin')}}">DashBorad</a>
            </li>
        </ul>
    </nav>
    <div class="row">
        <img src="assets/img/DGB-SOON.jpg" alt="" width="100%">
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>DGB LAO LEASING</h3>
            <p class="footer-link">
                <a href="https://dgblaoleasing.com/">Home</a>
                |
                <a href="https://dgblaoleasing.com/about-dllc/">About</a>
                |
                <a href="https://www.facebook.com/dgblao">Contact</a>
            </p>
            <p class="footer-company-name">
                Copyright © 2023 <strong>DGB LAO LEASING</strong> All rights reserved
            </p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span><a href="">KOLAO Tower 6th fl, 23 Singha Rd, Vientiane, Laos</a></span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+021 417 566</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><span><a href="">info@dgblao.com</a></span></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>DGB Lao Leasing Co., Ltd</strong> is a limited company that was established in 2016 as a
                joint-venture between DGB Capital Co., Ltd that is having 90% of shares and Lanexang Leasing Co., Ltd
                that is having 10% of shares in the company.
            </p>
            <div class="footer-option">
                <select name="links" id="" size="1" onchange="window.location.href=this.value;"
                    style="width: 250px; height: 30px;">
                    <option selected disabled>DGB Financial Group Network</option>
                    <option value="http://www.dgbfg.co.kr/" target="_blank">DGB Financial Group</option>
                    <option value="https://www.dgb.co.kr/">DGB Daegu Bank</option>
                    <option value="https://www.dgbupay.com/">DGB U Pay</option>
                    <option value="https://www.dgbfnlife.com/">DGB Life</option>
                    <option value="https://www.dgbcap.co.kr/">DGB Capital</option>
                    <option value="https://www.dgbds.co.kr/">DGB Data System</option>
                    <option value="https://www.dgbci.co.kr/">DGB Credit Information</option>
                    <option value="https://www.hi-ib.com/">HI Investment & Securities</option>
                    <option value="https://www.hi-investment.com/">HI Investment Partners</option>
                    <option value="https://www.hi-asset.com/">HI Asset Mannagement</option>
                    <option value="https://www.newsystock.com/">Newsystock</option>
                </select>
            </div>
        </div>
    </footer>
</body>
</html>