@extends('layout.master')
@section('title', 'Product Page')
@section('content')
@include('components.front-end.components.navbar')

<!-- Products Start -->


<section id="products">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <span>/</span>
        <li class="breadcrumb-item active">Products</li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-lg-3">
        <div class="sidebar">
          <h5>Browse :</h5>
          <div class="sidebar-item">
            <ul class="list-group">
              <li class="list-group-item">Hair Care</li>
              <li class="list-group-item">Skin Care</li>
              <li class="list-group-item">Lips Care</li>
              <li class="list-group-item">Body Care</li>
              <li class="list-group-item">Baby Care</li>
            </ul>
          </div>
          <div class="filter-section mt-4">
            <h5>Filter by price</h5>
            <div id="priceSlider"></div>
            <p>
              Price: ৳ <span id="priceMin">0</span> – ৳
              <span id="priceMax">1500</span>
            </p>
            <button class="btn btn-primary">Filter</button>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="select-wrapper">
          <p>Showing 1–20 of 77 results</p>
          <select class="custom-select" style="width: auto">
            <option selected>Default sorting</option>
            <option value="1">Sort by popularity</option>
            <option value="2">Sort by average rating</option>
            <option value="3">Sort by latest</option>
            <option value="4">Sort by price: low to high</option>
            <option value="5">Sort by price: high to low</option>
          </select>
        </div>
        <div id="ProductItem" class="row">
          <!-- Product Card -->





          <!-- More product cards as needed -->
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>


<!-- Products End -->



<script>
  ProductItem();
  async function ProductItem() {
    try {
      let res = await axios.get("/api/product-Data");
      $("#ProductItem").empty();

      if (res.data['ProductFront_Data'].length === 0) {
        console.warn("No Get Product Data found");
        return;
      }

      res.data['ProductFront_Data'].forEach((item, i) => {
        let EachItem = `
                   <div class="col-lg-3 col-md-4 col-6 mb-4 d-flex align-items-stretch">
            <a href="#" class="card h-100">
              <div class="card-img-top">
                <img src="${item['img_url']}" alt="Product Image" />
              </div>
              <div class="card-body text-center">
                <h6 class="card-title">${item['product_name']}</h6>
                <p class="card-text">
                  <span class="price">৳ ${item['bd_price']}</span>
                </p>
                <div class="card-icons">
                  <button type="button">ADD TO CART</button>
                </div>
              </div>
            </a>
          </div>`;
        $("#ProductItem").append(EachItem);
      });
    } catch (error) {
      console.error("Error fetching Product Item:", error);
    }
  }

</script>



@include('components.front-end.components.footer')
@endsection