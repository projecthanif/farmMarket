<div>
    <header class="header-area-v2 d-none d-lg-block">

        <div class="header-middle" style="padding-bottom: 2%">
            <div class="header-wrap">

                <div class="header-left">
                    <a href="{{ route('home') }}" class="nav-logo" style="color: black">
                        <img src="{{ asset('user/img/logo.png') }}" alt="" width="50" class=""> Farmers
                        Marketplace
                    </a>
                </div>
                <div class="header-bottom">
                    <nav class="menu-area">

                        <ul class="main-menu">
                            <span style="background-color: rgb(32, 220, 166);">
                                <li class="nav-item">
                                    <a class="button-3" href="{{ route('shop.product') }}" role="button">Shop</a>
                                </li>

                            </span>
                            <li class="menu-item menu-item-has-children active">
                                <a class="menu-link" href="{{ route('home') }}">About</a>
                            </li>
                            <li class="menu-item mega-menu-parent">
                                <a class="menu-link" href="{{ route('home') }}">More Products <i
                                        class="arrow-icon fas fa-angle-down"></i></a>
                                <div class="mega-menu-area">
                                    <div class="container">
                                        <ul class="mega-menu">
                                            <li class="mega-menu-item">
                                                <a class="mega-menu-title" href="#">Categories</a>
                                                <ul class="menu-items">
                                                    @forelse ($categories as $category)
                                                        <li class="mega-menu-items">
                                                            <a class="mega-menu-link"
                                                                href="{{ route('shop.category', ['name' => $category->name]) }}">{{$category->name}}</a>
                                                        </li>
                                                    @empty
                                                        <p>No category yet</p>
                                                    @endforelse
                                                </ul>
                                            </li>
                                            {{-- <li class="mega-menu-item">
                                                <a class="mega-menu-title" href="#">Brand</a>
                                                <ul class="menu-items">
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/1.html">Circle</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link"
                                                            href="product/brand/2.html">CodeLab</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/3.html">HEXLAB</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/4.html">Kanba</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/5.html">treva</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/6.html">Zootv</a>
                                                    </li>
                                                    <li class="mega-menu-items">
                                                        <a class="mega-menu-link" href="product/brand/7.html">BanCi</a>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                            <li class="mega-menu-item">
                                                <a class="mega-menu-banner" href="javascript:void(0)">

                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('home') }}">Policy</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="btn-list">
                        <li class="single-item cart-area">
                            <a class="single-btn cart-btn" href="{{ route('shop.cart') }}"><i
                                    class="btn-icon flaticon-shopping-bag"><span id="cart-count"
                                        style="color: red;"></span></i></a>
                        </li>
                        @if (auth()->user())
                            <li class="single-item user-area">
                                <div class="account-switcher">
                                    <a class="single-btn user-btn" href="javascript:void(0)"><i
                                            class="btn-icon flaticon-user"></i></a>
                                    <ul class="account-list">
                                        <li class="single-lang"><a class="lang-text"
                                                href="{{ route('user.profile') }}">Profile</a>
                                        </li>
                                        <li class="single-lang"><a class="lang-text"
                                                href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="single-item user-area">
                                <a class="single-btn user-btn" href="{{ route('user.login') }}"><i
                                        class="btn-icon flaticon-user"></i></a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>

    </header>
</div>

<div>
    <div class="mobile-header-area d-block d-lg-none">
        <div class="container">
            <div class="menu-wrap">
                <div class="header-left">
                    <a class="brand-logo" href="{{ route('home') }}" style="color: black">
                        <img src="{{ asset('user/img/logo.png') }}" alt="" width="50" class="">
                        Farmers
                        Marketplace
                    </a>
                </div>
                <div class="header-right">
                    <ul class="btn-list">


                        <li class="single-item cart-area">
                            <a class="single-btn cart-btn" data-bs-toggle="offcanvas"
                                href="{{ route('shop.cart') }}" role="button"
                                aria-controls="cartOffcanvasSidebar"><i
                                    class="btn-icon flaticon-shopping-bag"></i></a>
                        </li>
                        <li class="single-item user-area">
                            <a class="single-btn user-btn" href="{{ route('user.login') }}"><i
                                    class="btn-icon flaticon-user"></i></a>
                        </li>
                    </ul>
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
    <div class="mobile-menu-area">
        <div class="offcanvas-header">
            <a class="brand-logo" href="index.html">
                {{-- <img class="brand-image"
                    src="uploaded_files/logo/656f2f7abc3861701785466.png" alt="." /> --}}
            </a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <!-- <div class="menu-search-form">
      <form>
        <div class="search-wrap">
          <select class="form-select">
            <option selected>Categoria</option>
            <option value="product/category/1.html">Health Category</option>
            <option value="product/category/2.html">Women Fashion</option>
            <option value="product/category/3.html">Men Fashion</option>
            <option value="product/category/4.html">Electronic</option>
            <option value="product/category/11.html">
              SMM Panel Scripts
            </option>
          </select>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              id="mobilesearch"
              name="search"
              placeholder="Search Here"
            />
            <button type="button" class="search-btn">
              <i class="flaticon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div> -->
        <nav class="main-menu">
            <ul class="menu-list">
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('home') }}">About</a>
                </li>
                <li class="menu-item">
                    <span class="menu-expand"></span>
                    <a class="menu-link" href="#">More Products</a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sub-menu-link" href="product/category/1.html">Health Category</a>
                        </li>
                        <li class="sub-menu-item">
                            <a class="sub-menu-link" href="product/category/2.html">Women Fashion</a>
                        </li>
                        <li class="sub-menu-item">
                            <a class="sub-menu-link" href="product/category/3.html">Men Fashion</a>
                        </li>
                        <li class="sub-menu-item">
                            <a class="sub-menu-link" href="product/category/4.html">Electronic</a>
                        </li>
                        <li class="sub-menu-item">
                            <a class="sub-menu-link" href="product/category/11.html">SMM Panel Scripts</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="about-us.html">Policy</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="blog.html">FAQ</a>
                </li>

            </ul>
        </nav>
        <div class="menu-bottom">

            <a class="account-btn" href="user/sign-in.html"><i class="user-icon flaticon-user"></i> My Account
            </a>
        </div>
    </div>
</div>

{{-- @include('shop.include.cart_sidebar_menu') --}}

{{-- <div id="CartDeleteFromSession" data-url="cart/delete.json"></div>
<div id="CartIncrementFromSession" data-url="cart/increase.html"></div>
<div id="CartDecrementFromSession" data-url="cart/decrease.html"></div> --}}
<div class="featured-products-area-v2 section-bg-two section-top pb-100">
