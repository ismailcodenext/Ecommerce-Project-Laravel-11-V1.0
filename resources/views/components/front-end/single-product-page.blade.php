@extends('layout.master')
@section('title', 'Single Product Page')
@section('content')
@include('components.front-end.components.navbar')



<!-- Product Details Start -->
<section id="product-details">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <span>/</span>
                <li class="breadcrumb-item active">{{ $product->product_name }}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-xl-6 my-2">
                <div class="single-product">
                    <img src="/{{ $product->img_url }}" alt="{{ $product->product_name }}" />
                </div>
            </div>
            <div class="col-xl-6 my-2 details-item">
                <div class="details">
                    <div class="heading">
                        <h1>{{ $product->product_name }}</h1>
                        <div class="price d-flex">
                            <span>Price :</span>
                            <div class="dual-price">
                                <span>৳{{ $product->bd_price }}</span>
                                <span>${{ $product->usd_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="name">
                    <div class="product-code">
                        <h2>Product Code:</h2>
                        <span>{{ $product->product_code }}</span>
                    </div>
                    <div class="availability">
                        <h2>Availability:</h2>
                        <span style="color: rgba(3, 143, 0, 1)">
                            {{ $product->stock ? 'In Stock' : 'Out of Stock' }}
                        </span>
                    </div>
                </div>
                <div class="quantity-main">
                    <div class="quantity">
                        <div class="quantity-name">
                            <h2>Quantity:</h2>
                        </div>
                        <div class="box">
                            <div class="product-quantity">
                                <button class="quantity_btn decrement">
                                    <p>-</p>
                                </button>
                                <div class="quantity_counter">
                                    <div class="quantity_count">0</div>
                                </div>
                                <button class="quantity_btn increment">
                                    <p> +</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="action_btn">
                        <button class="add-to-cart">Add to Cart</button>
                        <button class="buy-now-btn">Buy It Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details End -->
<!-- Product Details End -->

<!-- Description Start -->
<section id="description">
    <div class="container">
        <div class="description-wrapper">
            <div class="heading">
                <h1><span>Description</span></h1>
            </div>
            <div class="description-content">
                <p>{{ $product->description }}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Description End -->

<!-- More Product Start -->
<section id="more-product">
    <div class="container">
        <div class="more-product-wrapper">
            <div class="heading">
                <h1><span>More Product</span></h1>
            </div>
            <div class="row">
                <!-- Product Card -->
                <div class="col-lg-3 col-6 mb-4 d-flex align-items-stretch">
                    <a href="#" class="card h-100">
                        <div class="card-img-top">
                            <img src="front-end/assets/img/Biotin-Collagen-Shampoo.png" alt="Product Image" />
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
                <div class="col-lg-3 col-6 mb-4 d-flex align-items-stretch">
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
                <div class="col-lg-3 col-6 mb-4 d-flex align-items-stretch">
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
                <div class="col-lg-3 col-6 mb-4 d-flex align-items-stretch">
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
            </div>
        </div>
    </div>
</section>
<!-- More Product End -->




@include('components.front-end.components.footer')
@endsection
