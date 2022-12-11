<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&family=Quicksand:wght@300;400;500&display=swap" 
    rel="stylesheet">

    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!-- Css landing -->
    <link rel="stylesheet" href="landing.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
            <div class="container">
                <a class="navbar-brand" href="#"><span>MEMORY</span>JINGGA CAFE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active me-4" href="#home">Home</a>
                        <a class="nav-link me-4" href="#service">About</a>
                        <a class="nav-link me-4" href="#product">Menu</a>
                        <a class="nav-link me-4" href="#blog">Place</a>
                        <a class="nav-link me-4" href="#contact">Contact</a>
                        <a class="nav-link me-4" href="">Sign Up</a>
                        <div class="icons-home mt-2">
                            <a href=""><i class='bx bx-user'></i></a>
                            <!-- <a href=""><i class='bx bx-log-out-circle'></i></a> -->
                        </div>
                    </div> 
                </div>
            </div>
          </nav>
    </header>

    <!-- home -->
    <section class="home" id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 d-flex flex-column justify-content-end content-left">
                    <h1 class="heading">Our Mission Is To Provide An Unforgettable Experience</h1>
                    <p class="subheading text-white">There are several variants of food that you can choose, both local food and foreign food</p>
                    <div class="btn-home mt-5">
                        <a href="#" class="btn btn-buy py-2 px-3">Buy Now</a>
                        <a href="#" class="btn btn-learn ms-4 py-2 px-3">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="img/fooddrink.png" class="img-fluid position-absolute" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="service section-margin" id="service">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="heading">Our Services</h1>
                    <p class="subheading">We provide quality and comfortable interior fittings</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
                        <div class="detail">
                            <p class="label">Favorit Food</p>
                            <h3 class="heading">Juz Campur Buah</h3>
                           
                                <a href="" class="btn-service btn mt-4"><i class='bx bx-shopping-bag'></i>shop</a>
                            
                        </div>
                        <div class="img-service">
                            <img src="img/foot1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
                        <div class="detail">
                            <p class="label">Favorit Food</p>
                            <h3 class="heading">Juz Campur Buah</h3>
                           
                                <a href="" class="btn-service btn mt-4"><i class='bx bx-shopping-bag'></i>shop</a>
                            
                        </div>
                        <div class="img-service">
                            <img src="img/foot1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
                        <div class="detail">
                            <p class="label">Favorit Food</p>
                            <h3 class="heading">Juz Campur Buah</h3>
                           
                                <a href="" class="btn-service btn mt-4"><i class='bx bx-shopping-bag'></i>shop</a>
                            
                        </div>
                        <div class="img-service">
                            <img src="img/foot1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner1 -->
    <section class="banner1 section-margin px-2">
        <div class="container rounded-3 pt-5 pt-lg-0 h-100">
            <div class="row text-white h-100 d-lg-flex align-items-lg-center">
                <div class="col-lg-6">
                    <p class="label">Black Friday</p>
                    <h3 class="heading">Sale Up To <span>50%</span> Off</h3>
                    <a href="#" class="btn btn-banner1 mt-4">Shop Now</a>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="img/kurss.png" class="img-fluid position-absolute end-0" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- product -->
    <section class="product section-margin" id="product">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="heading">Our Food and Drink</h1>
                    <p class="subheading">Available for all your needs</p>
                </div>
            </div>
            <div class="row">
                <div class="col populer d-lg-flex justify-content-lg-between">
                    <h3 class="heading">Populer Categories</h3>
                    <div class="toggle-slider d-lg-block d-flex justify-content-end">
                        <i class='bx bxs-chevron-left-circle'></i>
                        <i class='bx bxs-chevron-right-circle'></i>
                    </div>    
                </div>
            </div>
            <div class="row mt-4 product-populer">
                <div class="col">
                    <!-- Swiper -->
                    <div class="swiper mySwiperPopuler">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card-product">
                                <div class="img-box rounded-3 d-flex justify-content-center align-items-center p-4 px-2">
                                    <img src="img/kursi4.png" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2">Chair</p>
                                        <p>30 Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-product">
                                <div class="img-box rounded-3 d-flex justify-content-center align-items-center p-4 px-2">
                                    <img src="img/kursi4.png" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2">Chair</p>
                                        <p>30 Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-product">
                                <div class="img-box rounded-3 d-flex justify-content-center align-items-center p-4 px-2">
                                    <img src="img/kursi4.png" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2">Chair</p>
                                        <p>30 Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-product">
                                <div class="img-box rounded-3 d-flex justify-content-center align-items-center p-4 px-2">
                                    <img src="img/kursi4.png" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2">Chair</p>
                                        <p>30 Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-product">
                                <div class="img-box rounded-3 d-flex justify-content-center align-items-center p-4 px-2">
                                    <img src="img/kursi4.png" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2">Chair</p>
                                        <p>30 Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Menu Makanan -->
            <div class="row mt-5">
                <div class="col">
                    <h1 class="heading">Menu Food</h1>
                </div>
            </div>
            <div class="row new-product mt-5">
                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card" style="width: 17rem;">
                        <div class="img-box d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="card new-card">
                        <p>-------Tidak Ada Product-------</p>
                    </div>
                    
                </div>
            </div>
            <div class="btn-load text-center mt-2">
                <a href="" class="btn load-more">Load More</a>
            </div>

            <!-- Menu Minuman -->
            <div class="row mt-5">
                <div class="col">
                    <h1 class="heading">Menu Drink</h1>
                </div>
            </div>
            <div class="row new-product2 mt-5">
                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card2" style="width: 17rem;">
                        <div class="img-box2 d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body2 position-relative">
                            <h5 class="card-title2">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper2 d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card2" style="width: 17rem;">
                        <div class="img-box2 d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body2 position-relative">
                            <h5 class="card-title2">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper2 d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card2" style="width: 17rem;">
                        <div class="img-box2 d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body2 position-relative">
                            <h5 class="card-title2">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper2 d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 my-3">
                    <div class="card mx-auto new-card2" style="width: 17rem;">
                        <div class="img-box2 d-flex justify-content-center align-items-center py-3">
                            <img src="img/kursi2.png" width="150" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body2 position-relative">
                            <h5 class="card-title2">Chair Minimalis</h5>
                            <div class="rate d-flex">
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>
                                <p>12(k)</p>
                            </div>
                            <div class="price-wrapper2 d-flex justify-content-between">
                                <h3 class="price">$200</h3>
                                <a href="#" class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3">
                                    <i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="card new-card2">
                        <p>-------Tidak Ada Product-------</p>
                    </div>
                    
                </div>
            </div>
            <div class="btn-load2 text-center mt-5">
                <a href="" class="btn load-more2">Load More</a>
            </div>
            </div>
        </div>

        <!-- Banner2 -->
        <div class="banner2 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-white">
                        <div class="banner-wrapper rounded-3 py-4 px-3 d-flex justify-content-between align-items-center">
                            <div class="content-left">
                                <p class="label">Hot Deal</p>
                                <h1 class="heading">Sofa Premium Comfort</h1>
                                <div class="price d-flex justify-content-between align-items-center mt-4">
                                    <p class="normal">$700</p>
                                    <p class="promo">$500</p>
                                </div>
                            </div>
                            <div class="content-right">
                                <img src="img/kursi3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-white mt-3 mt-lg-0">
                        <div class="banner-wrapper rounded-3 py-4 px-3 d-flex justify-content-between align-items-center">
                            <div class="content-left">
                                <p class="label">Hot Deal</p>
                                <h1 class="heading">Sofa Premium Comfort</h1>
                                <div class="price d-flex justify-content-between align-items-center mt-4">
                                    <p class="normal">$700</p>
                                    <p class="promo">$500</p>
                                </div>
                            </div>
                            <div class="content-right">
                                <img src="img/kursi3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog mt-5" id="blog">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="heading">Latest Blog</h1>
                    <p class="subheading">we provide a variety of interesting information about the interior</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">

                    <!-- Swipper -->
                    <div class="swiper mySwiperBlog py-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="img/tempat.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">How To Make A Room 
                                        Look Neat</h5>
                                    <p class="date">11 November 2022</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="contact mt-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="heading">Contact Us</h1>
                    <p class="subheading">We serve you all the time</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 text-center">
                    <img src="img/dekor.png" class="img-fluid rounded-3" width="600" alt="">
                </div>
                <div class="col-lg-6 mt-4">
                    <form id="contactForm">

                        <!-- Name input -->
                        <div class="mb-3">
                          <label class="form-label" for="name">Name</label>
                          <input class="form-control" id="name" type="text" placeholder="Name" />
                        </div>
                    
                        <!-- Email address input -->
                        <div class="mb-3">
                          <label class="form-label" for="emailAddress">Email Address</label>
                          <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
                        </div>
                    
                        <!-- Message input -->
                        <div class="mb-3">
                          <label class="form-label" for="message">Message</label>
                          <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                        </div>
                    
                        <!-- Form submit button -->
                        <div class="d-grid">
                          <button class="btn btn-lg" type="submit">Submit</button>
                        </div>
                    
                      </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col1">
                    <h3 class="footer-brand"><span>MEMORY</span>JINGGA CAFE</h3>
                    <a href="#" class="mt-3 d-inline-block">cafejingga@gmail.com</a>
                    <a href="#" class="d-block">+6287734248496</a>
                    <div class="icon-footer mt-3">
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt mx-2' ></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col2 mt-4 mt-md-0">
                    <h3>Service</h3>
                    <ul class="ps-0">
                        <li><a href="#">House Plant</a></li>
                        <li><a href="#">Garden Plant</a></li>
                        <li><a href="#">Vase</a></li>
                        <li><a href="#">Fertilizer</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col3 mt-4 mt-md-0">
                    <h3>Information</h3>
                    <ul class="ps-0">
                        <li><a href="#">Office House</a></li>
                        <li><a href="#">Requirements</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col4 mt-4 mt-lg-0">
                    <h3>Helpfull Link</h3>
                    <ul class="ps-0">
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col5 mt-4 mt-lg-0">
                    <h3>Address</h3>
                    <p class="text-white">Jl. Telang Indah No. 123 Blok. A23 Bangkalan, Jawa Timur</p>
                    <a href="#">Google Maps</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="text-white">&copy;Copyright 2022 All Right Reverse | Built By <a href="#">Kelompok PPL</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="script.js"></script>
</body>
</html>