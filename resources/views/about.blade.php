@extends('layouts.app')

@section('title', 'Về chúng tôi - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>Về chúng tôi</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li>Về chúng tôi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start About Section ======-->
<section class="agricko-about-sec pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!--=== Agricko Image Box ===-->
                <div class="agricko-image-box mb-5 mb-xl-0">
                    <div class="agricko-image image-one" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/home-one/about/about-img1.jpg') }}" alt="about image">
                    </div>
                    <div class="agricko-image image-two" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/home-one/about/about-img2.jpg') }}" alt="about image">
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=Fjf20HmHRd8" class="video-popup"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="experience-box" data-aos="fade-up" data-aos-duration="1400">
                        <i class="flaticon-medal"></i>
                        <h4>5+ năm <span>Kinh nghiệm</span></h4>
                    </div>
                    <div class="border-shape"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <!--=== Agricko Content Box ===-->
                <div class="agricko-content-box">
                    <!--=== Section-Title ===-->
                    <div class="section-title mb-20" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="flaticon-leaves"></i>Về Ánh Dương Agri</span>
                        <h2>Tận tâm trong ngành phân bón Việt Nam</h2>
                    </div>
                    <p class="mb-30" data-aos="fade-up" data-aos-duration="1200">Chúng tôi chuyên cung cấp các loại phân bón chất lượng cao, giúp nông dân tăng năng suất cây trồng một cách bền vững và thân thiện với môi trường.</p>
                    <div class="iconic-box-list mb-40">
                        <!--=== Agricko Left Iconic Box ===-->
                        <div class="agricko-left-iconic-box" data-aos="fade-up" data-aos-duration="1400">
                            <div class="icon">
                                <i class="flaticon-organic"></i>
                            </div>
                            <div class="content">
                                <h4>100% Chất lượng cao</h4>
                                <p>Cung cấp sản phẩm cao cấp với chất lượng không thỏa hiệp, đảm bảo sự hài lòng và tin tưởng của khách hàng trong mọi sản phẩm.</p>
                            </div>
                        </div>
                        <!--=== Agricko Left Iconic Box ===-->
                        <div class="agricko-left-iconic-box" data-aos="fade-up" data-aos-duration="1800">
                            <div class="icon">
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="content">
                                <h4>Tư vấn chuyên nghiệp</h4>
                                <p>Với nền tảng kinh nghiệm nhiều năm, đội ngũ chúng tôi sẵn sàng tư vấn khách hàng lựa chọn được những sản phẩm phù hợp nhất.</p>
                            </div>
                        </div>
                    </div>
                    <!--=== Agricko Button Box ===-->
                    <div class="agricko-button-wrap" data-aos="fade-up" data-aos-duration="2000">
                        <div class="agricko-button">
                            <a href="{{ route('contact') }}" class="theme-btn style-one">Liên hệ ngay</a>
                        </div>
                        <div class="support-box">
                            <div class="icon">
                                <i class="fal fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <span>Gọi ngay</span>
                                <h6><a href="tel:0869275241">0869275241</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->

<!--====== Start Choose Section ======-->
<section class="agricko-choose-sec pt-130 pb-90">
    <div class="bottom-img"><img src="{{ asset('assets/images/home-one/bg/grass.png') }}" alt="grass shape"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <!--=== Section Title ===-->
                <div class="section-title text-center text-white mb-50" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Tại sao chọn chúng tôi</span>
                    <h2>Tận tâm trong ngành phân bón Việt Nam</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-12">
                <!--=== Agricko Choose ITem ===-->
                <div class="agricko-choose-item mb-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="icon">
                        <i class="flaticon-organic"></i>
                    </div>
                    <div class="content">
                        <h4>100% Tự nhiên</h4>
                        <p>Sản phẩm được chiết xuất từ nguồn nghiên liệu tự nhiên, an toàn cho đất và cây trồng.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <!--=== Agricko Choose ITem ===-->
                <div class="agricko-choose-item mb-40" data-aos="fade-up" data-aos-duration="1200">
                    <div class="icon">
                        <i class="flaticon-organic-food"></i>
                    </div>
                    <div class="content">
                        <h4>Công nghệ tiên tiến</h4>
                        <p>Áp dụng quy trình sản xuất hiện đại, đảm bảo chất lượng ổn định và hiểu quả cao.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <!--=== Agricko Choose ITem ===-->
                <div class="agricko-choose-item mb-40" data-aos="fade-up" data-aos-duration="1400">
                    <div class="icon">
                        <i class="flaticon-moving"></i>
                    </div>
                    <div class="content">
                        <h4>Giao hàng nhanh</h4>
                        <p>Dịch vụ giao hàng tận nơi, đúng thời gian, hỗ trợ vận chuyển toàn quốc.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <!--=== Agricko Choose ITem ===-->
                <div class="agricko-choose-item mb-40" data-aos="fade-up" data-aos-duration="1600">
                    <div class="icon">
                        <i class="flaticon-medal"></i>
                    </div>
                    <div class="content">
                        <h4>Chất lượng hàng đầu</h4>
                        <p>Được kiểm định nghiêm ngặt, mang lại năng suất tối ưu cho mọi mùa vụ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Choose Section ======-->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
@endpush
