 <!-- Topbar Start -->
 <div class="topbar">
    <div class="container">
      <div class="topbar-wrapper">
        <div class="contact">
          <i class="fa-regular fa-clock"></i> Always Open <span>|</span>
          <a href="tel:01739681362"
            ><i class="fa-solid fa-phone"></i> 01739681362</a
          >
        </div>
        <div class="topbar-text">
          <p>ORGANIC SKIN CARE AND HAIR CARE PRODUCTS IN BANGLADESH</p>
        </div>
        <div class="topbar-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav id="header-sticky" class="header-intro-version-one-area">
    <div class="container">
      <div class="nav-wrapper">
        <div class="menu-body">
          <div class="main-menu">
            <div id="mobile-menu">
              <ul>
                <li>
                  <a href="{{url('home-page')}}">Home</a>
                </li>
                  <li>
                  <a href="{{url('shop-page')}}">Shop</a>
                </li>

                <li class="has-dropdown has-dropdown-none">
                  <a href="#"
                    >Category <i class="fa-solid fa-angle-down"></i
                  ></a>
                  <ul class="sub-menu">
                    <li><a href="#">Combo Offer</a></li>
                    <li>
                      <a href="#">Hair Combo</a>
                    </li>
                    <li>
                      <a href="#">Acne Cure Product</a>
                    </li>
                    <li>
                      <a href="#">Special Combo Offer</a>
                    </li>
                    <li>
                      <a href="#">Skin Combo</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{url('about-page')}}">About</a>
                </li>
                <li>
                  <a href="{{url('contact-page')}}">Contact</a>
                </li>

                <li><a href="contact.html">Blog</a></li>
              </ul>
            </div>
          </div>

          <div class="side-menu-icon d-lg-none text-end">
            <a
              href="javascript:void(0)"
              class="info-toggle-btn sidebar-toggle-btn"
              ><i class="fa-solid fa-bars"></i> <span>Menu</span></a
            >
          </div>
        </div>

        <div class="logo-area d-flex justify-content-center">
          <div class="logo" style="width: 60px">
            <a href="index.html"
              ><img
                style="width: 100%"
                src="./front-end/assets/img/navbar-logo.png"
                alt=""
            /></a>
          </div>
        </div>

        <div class="location-email-intro">
          <div class="inner-location-email-intro pr-30">
            <div class="search">
              <input type="text" placeholder="I'm searching for..." />
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
          </div>
          <span class="bar">|</span>
          <div class="inner-location-email-intro">
            <div class="icons">
              <a href="#"><i class="fa-solid fa-user"></i></a>
            </div>
          </div>
          <span class="bar">|</span>
          <div class="inner-location-email-intro">
            <div class="icons">
              <a href="#"
                ><i class="fa-solid fa-cart-shopping"></i
                ><span class="cart-count">{{ count((array) session('cart')) }}</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="mobile-view-search-wrapper">
    <div class="container">
      <div class="mobile-view-search">
        <input type="text" placeholder="I'm searching for..." />
        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </div>
    </div>
  </div>
  <!-- Navbar End -->

      <!-- mobile sidebar area start -->
      <div class="mobile-sidebar-area">
        <div class="sidebar__wrapper">
          <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="sidebar__content">
            <div class="sidebar__logo mb-20">
              <div class="logo-item">
                <a href="index.html">
                  <img src="./assets/img/navbar-logo.png" alt="logo" />
                </a>
              </div>
              <p>ORGANIC SKIN CARE AND HAIR CARE PRODUCTS SERVICE!</p>
            </div>
            <div class="sidebar__search mb-25">
              <form action="#">
                <input type="text" placeholder="Find A Service!" />
                <button type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </form>
            </div>
            <div class="mobile-menu fix"></div>
          </div>
        </div>
      </div>
      <div class="body-overlay"></div>
      <!-- mobile sidebar area end -->
