@extends('website.layout.index')
@section('title', 'Home Page')
@section('content')

<div class="hero-slider-section">
    <!-- Slider main container -->
    <div class="hero-slider-active swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @foreach($banner as $item)
            <div class="hero-single-slider-item swiper-slide">
                <!-- Hero Slider Image -->
                <div class="hero-slider-bg">
                    <img src="{{asset('storage/'. $item->image)}}" alt="" style="object-fit: cover">
                </div>
                <!-- Hero Slider Content -->
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">
                                    <h4 class="subtitle">{{$item->title}}</h4>
                                    <h2 class="title">{{$item->heading}}</h2>
                                    <a href="product-details-default.html"
                                       class="btn btn-lg btn-outline-golden">shop now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination active-color-golden"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev d-none d-lg-block"></div>
        <div class="swiper-button-next d-none d-lg-block"></div>
    </div>
</div>
<!-- End Hero Slider Section-->

<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100 section-fluid">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row mb-n6">

                <div class="col-lg-6 col-12 mb-6">
                    <!-- Start Banner Single Item -->
                    <div class="banner-single-item banner-style-1 banner-animation img-responsive"
                         data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                            <img src="{{asset('image/ac407a7bae42f307d99709cf8548f0cf.jpg')}}" alt="" style="height: 430px;object-fit: cover">
                        </div>
                        <div class="content">
                            <h4 class="title">Thời trang Mixi Moi - E216</h4>
                            <h5 class="sub-title">CHÚNG TÔI THIẾT KẾ THỜI TRANG CỦA BẠN</h5>
                            <a href="product-details-default.html"
                               class="btn btn-lg btn-outline-golden icon-space-left"><span
                                    class="d-flex align-items-center">shop now <i
                                        class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>
                    <!-- End Banner Single Item -->
                </div>

                <div class="col-lg-6 col-12 mb-6">
                    <div class="row mb-n6">
                        @foreach($category as $item)
                        <div class="col-lg-6 col-sm-6 mb-6">
                            <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                 data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img src="{{asset('storage/'. $item->image)}}" alt="" style="height: 200px;object-fit: cover;">
                                </div>
                                <div class="content">
                                    <h4 class="title text-light">
                                        {{$item->name}}
                                    </h4>
                                    <a href="/shop?cate_id={{$item->id}}" class="link-text">
                                        <span class="text-light">Shop now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">BÁN CHẠY NHẤT</h3>
                            <p>Thêm người bán hàng tốt nhất của chúng tôi vào danh sách hàng tuần của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @foreach($products as $item)
                                <div class="product-default-single-item product-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="product-details-default.html" class="image-link">
                                            <img src="{{asset('storage/'.$item->image)}}" alt=""
                                                 style="width: 270px; height: 200px; border-radius: 7px 7px 0px 0px; object-fit: cover;">
                                        </a>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#modalAddcart">Add to Cart</a>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#modalQuickview"><i
                                                        class="icon-magnifier"></i></a>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="product-details-default.html">{{$item->name}}</a></h6>
                                            <ul class="review-star">
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="content-right">
                                            <span class="price">{{number_format($item->price)}}đ</span>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->


<!-- Start Blog Slider Section -->
<div class="blog-default-slider-section section-top-gap-100 section-fluid mb-10">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">BLOG MỚI NHẤT</h3>
                            <p>Trình bày bài viết theo cách tốt nhất để làm nổi bật những khoảnh khắc thú vị trên blog của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-default-slider default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container blog-slider">
                            <div class="swiper-wrapper">
                                <div class="blog-default-single-item blog-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="blog-single-sidebar-left.html" class="image-link">
                                            <img class="img-fluid"
                                                 src="https://thumb.ex-cdn.com/EXP/media.mgn.vn/resize/960x576/files/news/2021/05/12/do-mixi-doi-giao-dien-livestream-tuyen-truyen-chong-dich-covid-19-164644.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post One</a>
                                        </h6>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                            Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        <div class="inner">
                                            <a href="blog-single-sidebar-left.html"
                                               class="read-more-btn icon-space-left">Read More <span><i
                                                        class="ion-ios-arrow-thin-right"></i></span></a>
                                            <div class="post-meta">
                                                <a href="#" class="date">24 Apr</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
