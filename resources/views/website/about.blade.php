@extends('website.layout.index')
@section('title', 'Shop')
@section('content')
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Về chúng tôi</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active" aria-current="page">về chúng tôi</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- Start About Top -->
<div class="about-top">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between d-sm-column">
            <div class="col-md-6">
                <div class="about-img" data-aos="fade-up" data-aos-delay="0">
                    <div class="img-responsive">
                        <img src="{{asset('image/nhin-lai-nhung-tua-game-noi-bat-ma-do-mixi-cung-anh-em-refund-gaming-da-choi-trong-nam-vua-qua-p2-154658.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="title">GIỚI THIỆU CỬA HÀNG MIXI MOI CỦA CHÚNG TÔI</h3>
                    <h5 class="semi-title">Chúng tôi tin rằng mọi dự án tồn tại trong thế giới kỹ thuật số đều là kết quả của một ý tưởng và mọi ý tưởng đều có nguyên nhân.</h5>
                    <p>Vì lý do này, mỗi thiết kế của chúng tôi phục vụ một ý tưởng. Sức mạnh của chúng tôi trong thiết kế được phản ánh qua tên của chúng tôi, sự quan tâm đến từng chi tiết của chúng tôi. Chuyên gia của chúng tôi sẽ không ngại đi thêm dặm chỉ để đạt đến mức gần như hoàn hảo. Chúng ta không yêu cầu mọi thứ phải hoàn hảo, nhưng chúng ta cần chúng được chăm sóc một cách hoàn hảo nhất. Đó là lý do tại sao chúng tôi sẵn sàng đóng góp ở mức tốt nhất. Không một chi tiết nào bị bỏ sót dưới con mắt chuyên nghiệp của Billey. Trở nên tốt hơn, cùng nhau như một.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Top -->

<!-- Start Slill Progress -->
<div class="progressbar-section section-top-gap-100 section-inner-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="0">
                    <h4 class="title">Chức năng đáp ứng sự hoàn hảo</h4>
                    <p>Trong thời đại ngày nay, người ta không thể đánh giá thấp tầm quan trọng của thiết kế, nghệ thuật tạo ra hình ảnh ấn tượng để lay động và thu hút khán giả của bạn. Và khi thế giới ngày càng trở nên số hóa hơn với mỗi giây trôi qua, tầm quan trọng của thiết kế đồ họa đã được đẩy lên hàng đầu.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-progress m-t-40">
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="0">
                        <h6 class="font--semi-bold m-b-15">UI/UX</h6>
                        <div class="line-progressbar" data-percentage="75" data-progress-color="#b19361"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="200">
                        <h6 class="font--semi-bold m-b-15">Ý tưởng</h6>
                        <div class="line-progressbar" data-percentage="86" data-progress-color="#b19361"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                        <h6 class="font--semi-bold m-b-15">Thiết kế</h6>
                        <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
