




@extends("web/templete")
@section("body")





    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <!-- change image -->
                            <img class="img-fluid" src="./assets/img/no.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Aswan Bikes</b> </h1>
                                <h3 class="h2">Let's Discover The World Together</h3>
                                <p>
                                    Cycling can help to protect you from serious diseases such as stroke, heart attack, some cancers, depression, diabetes, obesity and arthritis.
                                    Riding a bike is healthy, fun and a low-impact form of exercise for all ages.
                                    Cycling is easy to fit into your daily routine by riding to the shops, park, school or work. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Aswan Bikes</h1>
                                {{-- <h3 class="h2">Aliquip ex ea commodo consequat</h3> --}}
                                <p>

                                    There are so many health benefits of rollerblading and roller skating it will surprise you. The extra-added bonus is that popular roller sports such as recreational inline skating, roller derby and speed skating are also fun!
                                    So it’s totally feasible for you to get fit roller skating or rollerblading and lose weight. Now you can kill two birds with one stone – roller skate to get fit and have fun while you do it.
                              </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/3.png" alt="" style="height: 400px;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Aswan Bikes</h1>
                                {{-- <h3 class="h2">Ullamco laboris nisi ut </h3> --}}
                                <p>

                                    There are so many health benefits of rollerblading and roller skating it will surprise you. The extra-added bonus is that popular roller sports such as recreational inline skating, roller derby and speed skating are also fun!
                                    So it’s totally feasible for you to get fit roller skating or rollerblading and lose weight. Now you can kill two birds with one stone – roller skate to get fit and have fun while you do it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Categories</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/bi.jpg" class="rounded-circle img-fluid border" style="height: 350px;"></a>
                <h5 class="text-center mt-3 mb-3">Bikes</h5>
               <p class="text-center"><a class="btn btn-success" href="shop">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/301.jpg" class="rounded-circle img-fluid border" style="height:350px ;"></a>
                <h2 class="h5 text-center mt-3 mb-3">Skates</h2>
                <p class="text-center"><a class="btn btn-success" href="shop">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/400.jpg" class="rounded-circle img-fluid border" style="height: 350px; width:340px"></a>
                <h2 class="h5 text-center mt-3 mb-3">Scooters</h2>
                <p class="text-center"><a class="btn btn-success"href="shop">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Aswan Tours</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/as1.jpg" class="card-img-top" alt="..."style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a> -->
                            <p class="card-text">
                                Philae Is Mentioned By Numerous Ancient Writers, Including Strabo, Diodorus Siculus, Ptolemy,Seneca,Pliny The Elder. It Was, As The Plural Name Indicates, The Appellation Of Two Small Islands Situated In Latitude 24° North, Just Above The First Cataract Near Aswan (Egyptian Swenet "Trade;" Ancient
                    </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/122as.jpg" class="card-img-top" alt="..." style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a> -->
                            <p class="card-text">
                                Abu Simbel Is A Historic Site Comprising Two Massive Rock-Cut Temples In The Village Of Abu Simbel (Arabic: أبو سمبل), Aswan Governorate, Upper Egypt, Near The Border With Sudan.                                     </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/as2.webp" class="card-img-top" alt="..."style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a> -->
                            <p class="card-text">
                                El Nabatat Island Is One Of Two Major Islands On The Nile In Vicinity Of Aswan, The Other One Being Elephantine. Elephantine Is The Larger One, And Is Located Between El Nabatat Island And The City Of Aswan (East Bank). Therefore, It Can Be Hard To See The Smaller El Nabatat Island From Aswan: "Aswan Disappears Behind Elephantine Island                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    @endsection
