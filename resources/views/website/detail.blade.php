@extends('website.layout.index')
@section('title', 'Shop')
@section('content')
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Sản phẩm</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Trang chủ</a></li>
                                    <li><a href="/shop">Cửa hàng</a></li>
                                    <li class="active" aria-current="page">{{$product->name}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="{{asset('storage/'. $product->image)}}" alt="" style="height: 600px;object-fit: cover">
                                </div>
                            </div>
                        </div>
                        <!-- End Large Image -->
                        <!-- Start Thumbnail Image -->
                        <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                            <div class="swiper-wrapper">
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="assets/images/product/default/home-1/default-1.jpg"
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Thumbnail Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                         data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title">{{$product->name}}</h4>
                            <div class="d-flex align-items-center">
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="empty"><i class="ion-android-star"></i></li>
                                </ul>
                                <a href="#" class="customer-review ms-2">(customer review )</a>
                            </div>
                            <div class="price">{{number_format($product->price)}} đ</div>
                            <p>{{$product->short_description}}</p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Tùy chọn có sẵn</h4>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <div class="product-stock"> <span class="product-stock-in"><i
                                            class="ion-checkmark-circled"></i></span> {{$product->quantity}} {{empty($product->quantity) >= '1' ? 'HẾT HÀNG' : 'CÒN HÀNG'}}</div>
                            </div>
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center ">
                                <div class="variable-single-item ">
                                    <span>Số lượng</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max="100" value="1" type="number">
                                    </div>
                                </div>

                                <div class="product-add-to-cart-btn">
                                    <a href="#" class="btn btn-block btn-lg btn-black-default-hover"
                                       data-bs-toggle="modal" data-bs-target="#modalAddcart">+ Thêm vào giỏ</a>
                                </div>
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Yêu thích</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        <div class="product-details-catagory mb-2">
                            <span class="title">Loại hàng:</span>
                            <ul>
                                <li><a href="/shop?cate_id={{$product->cate_id}}">{{$product->category->name}}</a></li>
                            </ul>
                        </div> <!-- End  Product Details Catagories Area-->
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <span class="title">Chia sẻ sản phẩm với:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                    Mô tả
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                    Thông tin
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    Đánh giá ({{count($comments)}})
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane active show" id="description">
                                    <div class="single-tab-content-item">
                                        {!!$product->description!!}
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="specification">
                                    <div class="single-tab-content-item">
                                        <table class="table table-bordered mb-20">
                                            <tbody>
                                            <tr>
                                                <th scope="row">Cân nặng</th>
                                                <td>{{$product->weight}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kích thước(dài x rộng x cao)</th>
                                                <td>{{$product->length}} x {{$product->width}} x {{$product->height}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p>{{$product->short_description}}</p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="review">
                                    <div class="single-tab-content-item">
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                            @foreach($comments as $item)
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
{{--                                                    <div class="comment-img">--}}
{{--                                                        <img src="assets/images/user/image-3.png" alt="">--}}
{{--                                                    </div>--}}
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">{{$item->name}}</h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="para-content">
                                                            <p>{{$item->review}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul> <!-- End - Review Comment -->
                                        @if(\Illuminate\Support\Facades\Auth::user())
                                        <div class="review-form">
                                            <div class="review-form-text-top">
                                                <h5>THÊM MỘT BÀI ĐÁNH GIÁ</h5>
                                                <p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu
                                                    *</p>
                                            </div>

                                            <form action="" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-name">Tên của bạn <span>*</span></label>
                                                            <input id="comment-name" type="text" name="name"
                                                                   value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-email">Email của bạn <span>*</span></label>
                                                            <input id="comment-email" type="email" readonly name="email"
                                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                                                   placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label for="comment-review-text">Đánh giá của bạn
                                                                <span>*</span></label>
                                                            <textarea id="comment-review-text" name="review"
                                                                      placeholder="Viết một đánh giá" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-md btn-black-default-hover"
                                                                type="submit">Gửi đánh giá</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endif
                                        @if(!(\Illuminate\Support\Facades\Auth::user()))
                                            <a href="/login"><p class="text-danger text-center">Đăng nhập để thêm bình luận!</p></a>
                                        @endif
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                            </div>
                        </div> <!-- End Product Details Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">NHỮNG SẢN PHẨM LIÊN QUAN</h3>
                                <p>Duyệt qua bộ sưu tập các sản phẩm liên quan của chúng tôi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper mb-5" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($products_cate as $item)
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="/detail/{{$item->id}}" class="image-link">
                                                <img src="{{asset('storage/'. $item->image)}}" alt="" style="height: 300px;object-fit: cover">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Thêm vào giỏ</a>
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
                                                <h6 class="title"><a href="/detail/{{$item->id}}">{{$item->name}}</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <p class="price font-w500">{{number_format($item->price)}} đ</p>
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
@endsection
