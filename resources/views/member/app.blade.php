<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGB LAO LEASING</title>
    @vite('resources/css/app.css')

    <link rel="icon" href="assets/img/web.png" type="image/x-icon">
        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2-1?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core-1.css">
    <link rel="stylesheet" href="assets/vendor/css/theme-default-1.css">
    <link rel="stylesheet" href="assets/css/demo-1.css">

    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar-1.css">

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css">
    
    <link rel="stylesheet" href="assets/css/font.css">

    <style>
    #app-vue {
        width:800px;
    }
    </style>
</head>
<body>

  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a href="https://dgblaoleasing.com/"><img src="assets/img/DGB-LOGO.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-ex-2">
        <div class="navbar-nav ms-auto">
          <a class="nav-item nav-link active" href="https://dgblaoleasing.com/">Home</a>
          <a class="nav-item nav-link" href="{{url('/')}}">About</a>
          <a class="nav-item nav-link" href="{{url('/admin')}}">Contact</a>
        </div>

        <!-- <span class="navbar-text">Marshmallow brownie lemon drops cheesecake.</span> -->
      </div>
    </div>
  </nav>
    <div class="container-fluid mt-2" id="app-vue"></div>
    
    <div class="row">
        
    </div>

    <footer class="footer bg-dark">
    <div class="container-fluid d-flex flex-md-row flex-column align-items-center justify-content-center gap-1 container-p-x py-3">
      <div class="col-sm-4">
        <a href="https://dgblaoleasing.com/"><img src="assets/img/web.png" width="80px" alt=""></a>
      </div>
      <div class="col-sm-4">
        <p>Copyright © 2023 DGB LAO LEASING All rights reserved</p>
      </div>
      <div class="col-sm-4">
        <div class="dropdown dropup footer-link">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          DGB Financial Group Network
          </button>
          <div class="dropdown-menu dropdown-menu-end" style="">
            <a class="dropdown-item" href="http://www.dgbfg.co.kr/">DGB Financial Group</a>
            <a class="dropdown-item" href="https://www.dgb.co.kr/">DGB Daegu Bank</a>
            <a class="dropdown-item" href="https://www.dgbupay.com/">DGB U Pay</a>
            <a class="dropdown-item" href="https://www.dgbfnlife.com/">DGB Life</a>
            <a class="dropdown-item" href="https://www.dgbcap.co.kr/">DGB Capital</a>
            <a class="dropdown-item" href="https://www.dgbds.co.kr/">DGB Data System</a>
            <a class="dropdown-item" href="https://www.dgbci.co.kr/">DGB Credit Information</a>
            <a class="dropdown-item" href="https://www.hi-ib.com/">HI Investment & Securities</a>
            <a class="dropdown-item" href="https://www.hi-investment.com/">HI Investment Partners</a>
            <a class="dropdown-item" href="https://www.hi-asset.com/">HI Asset Mannagement</a>
            <a class="dropdown-item" href="https://www.newsystock.com/">Newsystock</a>
            <div class="dropdown-divider"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

    @vite('resources/js/app.js')

    <script src="assets/vendor/libs/jquery/jquery-1.js"></script>
    <script src="assets/vendor/libs/popper/popper-1.js"></script>
    <script src="assets/vendor/js/bootstrap-1.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar-1.js"></script>
    <script src="assets/vendor/js/menu-1.js"></script>
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="assets/js/main-1.js"></script>

    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->
    <script src="assets/js/dashboards-analytics.js"></script>
</body>
</html>