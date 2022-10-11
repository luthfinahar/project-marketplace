<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;
    0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styler.css">
 </head>
 <body>
    <!-- Hero -->
    <div class="hero">
        <!-- Nav -->
        <div class="nav">
            <div class="container">
                <div class="row ai-center jc-spacebetween">
                    <div class="col3">
                        <div class="logo">
                            <h1>
                                Dashboard
                            </h1>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="menu">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#Pesanan">Pesanan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#Status Pengiriman">Status Pengiriman</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav -->
        <!-- Main -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col6">
                        <div class="main-desc">
                            <h1> <span>Pesanan dan Pengiriman LT Photography</span> </h1>
                            <p>"Kami hadir untuk penawaran yang lebih besar.
                                Khusus hari ini, dapatkan promo cashback Rp50 ribu untuk setiap 
                                pembelian produk seharga minimal Rp300 ribu."
                            </p>
                            <div class="iconblock">
                                <div class="iconblock-item active">
                                    <i class="bi bi-cart-check-fill"></i>
                                    <p>Pemesanan</p>
                                </div>
                                <div class="iconblock-item">
                                    {{-- <i class="bi bi-camera-fill"></i> --}}
                                    <i class="bi bi-box2-heart-fill"></i>
                                    <p>Pengiriman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="main-image">
                            <img src="img/market.png" alt="" class="img-custom">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- End Main -->
        <!-- Space -->     
        <div class="feature">
            <div class="container">
                <div class="row"> 
                </div>
            </div>
        </div>
        <!-- End Space -->
        
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
    <div class="align">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
               
            </div>
        </div>

    <section class="page-section" id="Pesanan">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-danger panel-colorful">
            <div class="panel-body text-center">
                <p class="text-uppercase mar-btm text-sm">New Order</p>
                <i class="fa fa-shopping-cart fa-5x"></i>
                <hr>
                <p class="h2 text-thin">39</p>
                <small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> 39</span> Need action Orders</small>
            </div> 
        </div>
        </div>
    </section>
    

    <section class="page-section" id="Status Pengiriman">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-primary panel-colorful">
            <div class="panel-body text-center">
                <p class="text-uppercase mar-btm text-sm">finished</p>
                <i class="fa fa-history fa-5x"></i>
                <hr>
                <p class="h2 text-thin">954</p>
                <small><span class="text-semibold"><i class="fa fa-history fa-fw"></i> 954</span> Finished Orders</small>
            </div>
        </div>
        </div>
    </section>


    <style type="text/css">
        /* body{
            background:#eee;
            margin-top:20px;
        } */
        
        .panel {
          box-shadow: 0 2px 0 rgba(0,0,0,0.05);
          border-radius: 0;
          border: 0;
          margin-bottom: 24px;
        }
        
        
        .panel-danger.panel-colorful {
          background-color: #242424;
          border-color: #242424;
          color: #fff;
        }
        
        .panel-primary.panel-colorful {
          background-color: #737171;
          border-color: #737171;
          color: #fff;
        }
        
        
        .panel-body {
          padding: 25px 20px;
        }
        
        .panel hr {
          border-color: rgba(0,0,0,0.1);
        }
        
        .mar-btm {
          margin-bottom: 15px;
        }
        
        h2, .h2 {
          font-size: 28px;
        }
        
        .small, small {
          font-size: 85%;
        }
        
        .text-sm {
          font-size: .9em;
        }
        
        .text-thin {
          font-weight: 300;
        }
        
        .text-semibold {
          font-weight: 600;
        }
        </style>
        
        <script type="text/javascript">
        
        </script>
    
</body>
