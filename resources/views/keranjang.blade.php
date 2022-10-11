<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Produk | LT Photography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;
    0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
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
                                LT Studio
                            </h1>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="menu">
                            <ul>
                                <li><a href="profil">Profil</a></li>
                                <li><a href="menu">Menu</a></li>
                                <li><a href="produk">Produk</a></li>
                                <li><a href="jasa">Jasa</a></li>
                                <li><a href="keranjang">Keranjang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav -->
        <!-- Main -->
        
        <!-- End Main -->
    </div>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Shopping Cart</b></h4></div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
                    </div>
                </div>    
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="img/produk/5000.jfif"></div>
                        <div class="col">
                            <div class="row text-muted">Produk</div>
                            <div class="row">Canon 500D</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">Rp. 3.780.000,00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="img/produk/lensa4.jfif"></div>
                        <div class="col">
                            <div class="row text-muted">Produk</div>
                            <div class="row">Sigma 56mm F1.4 DC DN</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">Rp. 6.550.000,00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                {{-- <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div> --}}
                <div class="back-to-shop"><a href="produk">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Summary</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEMS 2</div>
                    <div class="col text-right">Rp. 10.330.000 </div>
                </div>
                <form>
                    <p>SHIPPING</p>
                    <select>
                        <option class="text-muted">JNE Regular- Rp. 20.000</option>
                        <option class="text-muted">J&T REG- Rp. 19.000</option>
                        <option class="text-muted">LION Parcels- Rp. 16.000</option>
                    </select>
                    <p>PAYMENT</p>
                    <select>
                        <option class="text-muted">BCA</option>
                        <option class="text-muted">BNI</option>
                        <option class="text-muted">BRI</option>
                    </select>
                    <input id="code" placeholder="Insert rekening">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">Rp. 10.350.000</div>
                </div>
                <button class="btn">CHECKOUT</button>
            </div>
        </div>
        
    </div>
    </section>
    <!--End Hero -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <!-- Produk -->
                <!-- End Produk -->      
            </div>
        </div>
    </div>
 </body>
 </html>