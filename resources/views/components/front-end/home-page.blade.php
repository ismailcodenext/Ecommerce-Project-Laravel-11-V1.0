@extends('layout.master')
@section('title', 'Home Page')
@section('content')
@include('components.front-end.components.navbar')


<!-- Hero Start -->
<section id="hero">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-wrapper">
                    <img src="./front-end/assets/img/chowdhurani-ayrveda-header-banner-1.png" alt="" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-wrapper">
                    <img src="./front-end/assets/img/chowdhurani-ayrveda-header-banner-1.png" alt="" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-wrapper">
                    <img src="./front-end/assets/img/chowdhurani-ayrveda-header-banner-1.png" alt="" />
                </div>
            </div>
        </div>
        <div class="swiper-button-prev">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="swiper-button-next">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Hero End -->

<!-- SHOP BY CATEGORY Start -->
<section id="category">
    <div class="container">
        <div class="category-wrapper">
            <div class="header">
                <h1><span>SHOP BY CATEGORY</span></h1>
            </div>
            <div class="box-wrapper">
                <div class="box">
                    <a href="">
                        <div class="category-img">
                            <img src="./front-end/assets/img/category-1.jpeg" alt="Category 1" />
                        </div>
                        <h2>Hair Care</h2>
                    </a>
                </div>

                <div class="box">
                    <a href="">
                        <div class="category-img">
                            <img src="./front-end/assets/img/category-2.jpg" alt="Category 2" />
                        </div>
                        <h2>Skin Care</h2>
                    </a>
                </div>

                <div class="box">
                    <a href="">
                        <div class="category-img">
                            <img src="./front-end/assets/img/category-3.jpeg" alt="Category 3" />
                        </div>
                        <h2>Lips Care</h2>
                    </a>
                </div>

                <div class="box">
                    <a href="">
                        <div class="category-img">
                            <img src="./front-end/assets/img/category-4.jpg" alt="Category 4" />
                        </div>
                        <h2>Body Care</h2>
                    </a>
                </div>

                <div class="box">
                    <a href="">
                        <div class="category-img">
                            <img src="./front-end/assets/img/category-3.jpeg" alt="Category 3" />
                        </div>
                        <h2>Baby Care</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Start -->
<section id="product">
    <div class="container">
        <div class="header">
            <h1><span>FEATURED PRODUCTS</span></h1>
        </div>
        <div class="product-wrapper">
            <div class="row">
                <!-- Product Card -->
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Biotin-Collagen-Shampoo.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Biotin Collagen Shampoo</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Chowdhurani-Hair-Tonic.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Hair Tonic</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Gold-Oxidizing-Emulsion.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Gold Oxidizing Emulsion</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Chowdhurani-Lip-Balm.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Chowdhurani Lip Balm</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Chowdhurani-Whitening-Soap.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Chowdhurani Whitening Soap</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Crystal-Kojic-Out-Serum.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Biotin Collagen Shampoo</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Crystal-Spot-Out-Cream.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Crystal Spot Out Cream</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Gold-and-Saffron-Serum.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Gold and Saffron Serum</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Biotin-Collagen-Shampoo.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Biotin Collagen Shampoo</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Chowdhurani-Hair-Tonic.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Hair Tonic</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Gold-Oxidizing-Emulsion.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Gold Oxidizing Emulsion</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="./front-end/assets/img/Chowdhurani-Lip-Balm.png" alt="Product Image" />
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Chowdhurani Lip Balm</h6>
                            <p class="card-text">
                                <span class="price">৳ 1,450.00</span>
                            </p>
                            <div class="card-icons">
                                <button type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- More product cards as needed -->
            </div>
        </div>
        <div class="view-more-container">
            <button class="view-more-btn">Veiw More Product</button>
        </div>
    </div>
</section>
<!-- Product End -->

<!-- Service Start -->
<section id="service">
    <div class="container">
        <div class="service-wrapper">
            <div class="row">
                <div class="col d-flex align-items-stretch">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="./front-end/assets/img/home-service-card-logo-1.png" alt="" />
                        </div>

                        <div class="status">
                            <div class="customer_name">Curated Products</div>
                            <div class="comment">From Nature</div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-stretch">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="./front-end/assets/img/home-service-card-logo-2.jpg" alt="" />
                        </div>

                        <div class="status">
                            <div class="customer_name">Handmade</div>
                            <div class="comment">
                                Made with passion by 300+ curators across the countr
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-stretch">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="./front-end/assets/img/home-service-card-logo-3.png" alt="" />
                        </div>

                        <div class="status">
                            <div class="customer_name">100% Natural</div>
                            <div class="comment">
                                Use local, consume local, closer to nature.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-stretch">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="./front-end/assets/img/home-service-card-logo-4.jpg" alt="" />
                        </div>

                        <div class="status">
                            <div class="customer_name">Shipping</div>
                            <div class="comment">Across whole country</div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-stretch">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="./front-end/assets/img/home-service-card-logo-5.jpg" alt="" />
                        </div>

                        <div class="status">
                            <div class="customer_name">Save Money</div>
                            <div class="comment">At lowest price</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->



@include('components.front-end.components.footer')
@endsection