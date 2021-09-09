@extends('website.layout.index')
@section('title', 'Shop')
@section('content')
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cửa hàng</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Trang chủ</a></li>
                                    <li class="active" aria-current="page">cửa hàng</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 mb-5">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">LOẠI HÀNG</h6>
                                <form action="" method="get">
                                    <fieldset>
                                        <select name="cate_id"  onchange='if(this.value != 0) { this.form.submit(); }' class="form-control">
                                            <option value="0">Mặc định</option>
                                            @foreach($cates as $item)
                                                <option value="{{$item->id}}" >{{$item->name}} ({{count($item->products)}})</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </form>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">LỌC THEO GIÁ</h6>
                            <div class="sidebar-content">
                                <div id="slider-range"></div>
                                <div class="filter-type-price">
                                    <label for="amount">Phạm vi giá:</label>
                                    <input type="text" id="amount">
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">LỌC THEO MÀU</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        <li>
                                            <label class="checkbox-default" for="black">
                                                <input type="checkbox" id="black">
                                                <span>Black (6)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tag sản phẩm</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">asian</a>
                                    <a href="#">brown</a>
                                    <a href="#">euro</a>
                                    <a href="#">fashion</a>
                                    <a href="#">hat</a>
                                    <a href="#">t-shirt</a>
                                    <a href="#">teen</a>
                                    <a href="#">travel</a>
                                    <a href="#">white</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <div class="sidebar-content">
                                <a href="product-details-default.html" class="sidebar-banner img-hover-zoom">
                                    <img class="img-fluid" src="https://media.congluan.vn/files/dieulinh/2020/09/18/do-mixi1-0820.jpg" alt="">
                                </a>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                     data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                   href="#layout-3-grid"><img src="{{asset('/image/bkg_grid.png')}}"
                                                                              alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="{{asset('/image/bkg_list.png')}}" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ms-2">
                                            <span>Hiển thị 1-6 trong số {{count($products)}} kết quả</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="me-2">Lọc Theo:</label>
                                        <form action="" method="get">
                                            <fieldset>
                                                <select name="order_by" id="speed" onchange='if(this.value != 0) { this.form.submit(); }'>
                                                    <option value="0">Mặc định</option>
                                                    @foreach(config('common.product_order_by') as $key => $val)
                                                        <option value="{{$key}}">{{$val}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row">
                                                @foreach($products as $item)
                                                <div class="col-xl-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                         data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="/detail/{{$item->id}}" class="image-link">
                                                                <img src="{{asset('storage/'. $item->image)}}"
                                                                     alt="" style="height: 300px;object-fit: cover">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                       data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                       data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="/detail/{{$item->id}}">{{$item->name}}</a></h6>
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
                                                                <span class="price">{{number_format($item->price)}} đ</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                                @foreach($products as $item)
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="/detail/{{$item->id}}"
                                                           class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                 src="{{asset('storage/'. $item->image)}}"
                                                                 alt="" style="height: 300px;width: 600px;object-fit: cover">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="/detail/{{$item->id}}">{{$item->name}}</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price">{{number_format($item->price)}} đ</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                   data-bs-target="#modalAddcart"
                                                                   class="btn btn-lg btn-black-default-hover">Thêm vào giỏ</a>
                                                                <a href="wishlist.html"
                                                                   class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- End List View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination -->
                    <div class="page-pagination text-center mb-5 pl-5" data-aos="fade-up" data-aos-delay="0">
                        <ul>
                            {{$products->links()}}
                        </ul>
                    </div> <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
@endsection
