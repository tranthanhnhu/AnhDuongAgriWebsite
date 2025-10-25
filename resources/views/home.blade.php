@extends('layouts.app')

@section('title', 'Anh Duong Agri - Phụng sự nhà nông')

@section('content')
<!--====== Start Hero Section ======-->
<section class="agricko-hero">
    <div class="hero-slider">
        <!--=== Single Slider ===-->
        <div class="single-slider">
            <div class="image-layer bg_cover" style="background-image: url({{ asset('assets/images/home-one/hero/hero-img1.jpg') }});"></div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <!--=== Hero Content ===-->
                        <div class="hero-content text-center">
                            <span class="tag-line" data-aos="fade-up" data-aos-duration="1000"><i class="flaticon-leaves"></i>Phân bón chất lượng cao</span>
                            <h1 data-aos="fade-up" data-aos-duration="1200">Cùng <span>ÁnhDươngAgri</span> <br> Phụng sự nhà nông</h1>
                            <div class="hero-button" data-aos="fade-up" data-aos-duration="1400">
                                <a href="{{ route('about') }}" class="theme-btn style-one">Về chúng tôi</a>
                                <a href="{{ route('products') }}" class="theme-btn style-one">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Single Slider ===-->
        <div class="single-slider">
            <div class="image-layer bg_cover" style="background-image: url({{ asset('assets/images/home-one/hero/hero-img2.jpg') }});"></div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <!--=== Hero Content ===-->
                        <div class="hero-content text-center">
                            <span class="tag-line" data-aos="fade-up" data-aos-duration="1000"><i class="flaticon-leaves"></i>Phân bón chất lượng cao</span>
                            <h1 data-aos="fade-up" data-aos-duration="1200">Cùng <span>ÁnhDươngAgri</span> <br> Phụng sự nhà nông</h1>
                            <div class="hero-button" data-aos="fade-up" data-aos-duration="1400">
                                <a href="{{ route('about') }}" class="theme-btn style-one">Về chúng tôi</a>
                                <a href="{{ route('products') }}" class="theme-btn style-one">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Single Slider ===-->
        <div class="single-slider">
            <div class="image-layer bg_cover" style="background-image: url({{ asset('assets/images/home-one/hero/hero-img3.jpg') }});"></div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <!--=== Hero Content ===-->
                        <div class="hero-content text-center">
                            <span class="tag-line" data-aos="fade-up" data-aos-duration="1000"><i class="flaticon-leaves"></i>Phân bón chất lượng cao</span>
                            <h1 data-aos="fade-up" data-aos-duration="1200">Cùng <span>ÁnhDươngAgri</span> <br> Phụng sự nhà nông</h1>
                            <div class="hero-button" data-aos="fade-up" data-aos-duration="1400">
                                <a href="{{ route('about') }}" class="theme-btn style-one">Về chúng tôi</a>
                                <a href="{{ route('products') }}" class="theme-btn style-one">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->

<!--====== Start Features Section ======-->
<section class="agricko-features-sec">
    <div class="container">
        <!--=== Agricko Features Wrapper ===-->
        <div class="agricko-features-wrapper" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12 item-column">
                    <!--=== Agricko Feature Item ===-->
                    <div class="agricko-feature-item" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon">
                            <i class="flaticon-tractor"></i>
                        </div>
                        <div class="content">
                            <h4>Công nghệ phân bón tiên tiến</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 item-column">
                    <!--=== Agricko Feature Item ===-->
                    <div class="agricko-feature-item" data-aos="fade-up" data-aos-duration="1200">
                        <div class="icon">
                            <i class="flaticon-organic-food"></i>
                        </div>
                        <div class="content">
                            <h4>Dịch vụ tư vấn chuyên nghiệp</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 item-column">
                    <!--=== Agricko Feature Item ===-->
                    <div class="agricko-feature-item" data-aos="fade-up" data-aos-duration="1400">
                        <div class="icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="content">
                            <h4>Chất lượng đạt chuẩn quốc tế</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 item-column">
                    <!--=== Agricko Feature Item ===-->
                    <div class="agricko-feature-item" data-aos="fade-up" data-aos-duration="1600">
                        <div class="icon">
                            <i class="flaticon-leaves-1"></i>
                        </div>
                        <div class="content">
                            <h4>Sản phẩm an toàn cho môi trường</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->

<!--====== Start About Section ======-->
<section class="agricko-about-sec pt-130">
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
                            <a href="{{ route('about') }}" class="theme-btn style-one">Về chúng tôi</a>
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

<!--====== Start Shop Section ======-->
<section class="agricko-shop-sec pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Sản phẩm</span>
                    <h2>Các sản phẩm nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($featuredProducts as $index => $product)
            <div class="col-xl-3 col-md-6 col-sm-12">
                <!--=== Agricko Product Item ===-->
                <div class="agricko-product-item mb-30" data-aos="fade-up" data-aos-duration="{{ 1200 + ($index * 200) }}">
                    <div class="product-thumbnail">
                        @if($product->img_1)
                            <img src="{{ Storage::url($product->img_1) }}" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('assets/images/home-two/products/product-img' . (($index % 8) + 1) . '.jpg') }}" alt="{{ $product->name }}">
                        @endif
                        @if($product->sale_price && $product->sale_price < $product->original_price)
                        <div class="new">Sale</div>
                        @endif
                        <div class="action-button">
                            <a href="{{ route('products.show', $product->slug) }}" class="icon-btn"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h4>
                        <p class="price">
                            @if($product->sale_price && $product->sale_price < $product->original_price)
                                <span class="prev-price">{{ number_format($product->original_price) }}đ</span>{{ number_format($product->sale_price) }}đ
                            @else
                                {{ number_format($product->original_price) }}đ
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Shop Section ======-->

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

<!--====== Start Team Section ======-->
<section class="agricko-team-sec pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Khách hàng của chúng tôi</span>
                    <h2>Chúng tôi đã hợp tác để tư vấn, sản xuất với nhiều đối tác lớn</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Agricko Team Item ===-->
                <div class="agricko-team-item mb-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/home-one/team/team-img1.jpg') }}" alt="team image">
                        <div class="hover-content">
                            <div class="social-box">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="member-info">
                                <h4>Đại học BK HCM</h4>
                                <span class="position">Farmer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Agricko Team Item ===-->
                <div class="agricko-team-item mb-40" data-aos="fade-up" data-aos-duration="1200">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/home-one/team/team-img2.jpg') }}" alt="team image">
                        <div class="hover-content">
                            <div class="social-box">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="member-info">
                                <h4>Anna Rose Greene</h4>
                                <span class="position">Farmer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Agricko Team Item ===-->
                <div class="agricko-team-item mb-40" data-aos="fade-up" data-aos-duration="1400">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/home-one/team/team-img3.jpg') }}" alt="team image">
                        <div class="hover-content">
                            <div class="social-box">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="member-info">
                                <h4>Emma Jane Greene</h4>
                                <span class="position">Farmer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team Section ======-->

<!--====== Start Intro Section ======-->
<section class="agricko-intro-sec bg_cover pt-130 pb-130" style="background-image: url({{ asset('assets/images/home-one/bg/intro-bg.jpg') }});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="agricko-content-box text-white text-center text-lg-start">
                    <!--=== Section-title ===-->
                    <div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="flaticon-leaves"></i>Chia sẻ kinh nghiệm</span>
                        <h2>Những bài viết mới nhất về nông nghiệp và phân bón</h2>
                    </div>
                    <p class="mb-45" data-aos="fade-up" data-aos-duration="1200">Cùng khám phá những kinh nghiệm canh tác hiệu quả, giải pháp sử dụng phân bón bền vững và các xu hướng nông nghiệp hiện đại giúp nâng cao năng suất và chất lượng mùa vụ</p>
                    <div class="agricko-button" data-aos="fade-up" data-aos-duration="1400">
                        <a href="{{ route('blogs') }}" class="theme-btn style-one">Xem các bài viết</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <!--=== Agricko Play Box ===-->
                <!-- <div class="agricko-play-box text-center mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="1000">
                    <a href="" class="video-popup"><i class="fas fa-play"></i></a>
                </div> -->
            </div>
        </div>
    </div>
</section><!--====== End Intro Section ======-->

<!--====== Start Testimonial Section ======-->
<section class="agricko-testimonial-sec pt-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Ý kiến khách hàng</span>
                    <h2>Nhận được nhiều phản hồi tích cực từ khách hàng</h2>
                </div>
            </div>
        </div>
        <!--=== Testimonial Slider ===-->
        <div class="testimonial-slider" data-aos="fade-up" data-aos-duration="1000">
            <!--=== Agricko Testimonial Item ===-->
            <div class="agricko-testimonial-item">
                <div class="testimonial-inner-wrap">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/home-one/testimonial/testimonial-img1.jpg') }}" alt="Testimonial Image">
                    </div>
                    <div class="testimonial-content">
                        <div class="ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Trước đây khi sử dụng thuốc bảo vệ thực vật, chất lượng đất bị ảnh hưởng xấu dẫn đến mùa vụ sau bị thất thu. Nhưng từ khi được Ánh Dương Agri tư vấn, tôi đã tin tưởng sử dụng và mang lại hiệu quả tương đối cao. Sản phẩm của Ánh Dương Agri đã được nghiên cứu, ứng dụng thực chiến trong thời gian dài nên được bà con rất tin tưởng sử dụng.</p>
                        <div class="author-info">
                            <h5>Chú Bình - Lâm Đồng</h5>
                            <span class="position">Chủ vựa sầu riêng</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Agricko Testimonial Item ===-->
            <div class="agricko-testimonial-item">
                <div class="testimonial-inner-wrap">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/home-one/testimonial/testimonial-img1.jpg') }}" alt="Testimonial Image">
                    </div>
                    <div class="testimonial-content">
                        <div class="ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Tôi luôn hài lòng về Ánh Dương Agri vì chất lượng của sản phẩm luôn được ưu tiên hàng đầu, giá thành sản phẩm lại phù hợp. Mang lại lợi nhuận cho nhà nông khi sử dụng.</p>
                        <div class="author-info">
                            <h5>Vườn cây ăn trái Hồng Lạc</h5>
                            <span class="position">Kiên Giang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Testimonial Section ======-->

<!--====== Start FAQ Section ======-->
<section class="agricko-faq-sec pt-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!--=== Agricko Content Box ===-->
                <div class="agricko-content-box mb-5 mb-xl-0">
                    <div class="section-title mb-40 text-center text-xl-start" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="flaticon-leaves"></i>Đừng ngần ngại liên hệ đến chúng tôi</span>
                        <h2>Câu hỏi thường gặp</h2>
                    </div>
                    <!--====== Accordion  ======-->
                    <div class="accordion" id="accordionOne">
                        <!--====== Accordion Item  ======-->
                        <div class="accordion-card mb-20" data-aos="fade-up" data-aos-duration="800">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                                    <span class="icon-btn"><i class="far fa-arrow-right"></i></span>Phân bón của Ánh Dương Agri có phù hợp với mọi loại cây trồng không?
                                </h6>
                            </div>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                                <div class="accordion-content">
                                    <p>Các dòng phân bón của Ánh Dương Agri được nghiên cứu và sản xuất phù hợp với nhiều loại cây trồng khác nhau — từ cây ăn trái, rau màu đến cây công nghiệp. Tuy nhiên, mỗi sản phẩm có công thức dinh dưỡng riêng. Quý khách nên xem kỹ hướng dẫn sử dụng hoặc liên hệ kỹ sư nông nghiệp của chúng tôi để được tư vấn loại phân bón phù hợp nhất cho từng loại cây.</p>
                                </div>
                            </div>
                        </div>
                        <!--====== Accordion Item  ======-->
                        <div class="accordion-card mb-20" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
                                    <span class="icon-btn"><i class="far fa-arrow-right"></i></span>Thời điểm nào là tốt nhất để bón phân cho cây trồng?
                                </h6>
                            </div>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-content">
                                    <p>Thời điểm bón phân tốt nhất là sáng sớm hoặc chiều mát, tránh nắng gắt và mưa lớn. Mỗi loại cây trồng có chu kỳ sinh trưởng khác nhau, do đó nên bón đúng giai đoạn (ra rễ, đẻ nhánh, ra hoa, nuôi trái...) để đạt hiệu quả cao nhất.</p>
                                </div>
                            </div>
                        </div>
                        <!--====== Accordion Item  ======-->
                        <div class="accordion-card mb-20" data-aos="fade-up" data-aos-duration="1200">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">
                                    <span class="icon-btn"><i class="far fa-arrow-right"></i></span>Sản phẩm phân bón của Ánh Dương Agri có thân thiện với môi trường không?
                                </h6>
                            </div>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-content">
                                    <p>Có. Tất cả sản phẩm của Ánh Dương Agri đều được sản xuất từ nguồn nguyên liệu an toàn, thân thiện với môi trường và tuân thủ tiêu chuẩn chất lượng quốc gia. Chúng tôi hướng tới nền nông nghiệp bền vững, giảm thiểu tác động đến đất và nguồn nước.</p>
                                </div>
                            </div>
                        </div>
                        <!--====== Accordion Item  ======-->
                        <div class="accordion-card mb-20" data-aos="fade-up" data-aos-duration="1400">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false">
                                    <span class="icon-btn"><i class="far fa-arrow-right"></i></span>Làm sao để bảo quản phân bón đúng cách?
                                </h6>
                            </div>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                <div class="accordion-content">
                                    <p>Phân bón nên được bảo quản ở nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp và xa tầm tay trẻ em. Không để phân bón tiếp xúc với nước hoặc không khí ẩm để tránh vón cục, giảm chất lượng. Nếu đã mở bao, nên buộc kín lại sau khi sử dụng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <!--=== Agricko Image ===-->
                <div class="agricko-image" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/home-one/faq/faq-img1.jpg') }}" alt="faq image">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End FAQ Section ======-->

<!--====== Start Contact Section ======-->
<section class="agricko-contact-sec pt-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- Agricko Content Box -->
                <div class="agricko-content-box mb-50 text-center text-xl-start">
                    <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="flaticon-leaves"></i>Get In Touch</span>
                        <h2>Need Organic Products? Contact Us Now.</h2>
                    </div>
                    <div class="agricko-image" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/home-one/contact/contact-img1.jpg') }}" alt="contact image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <!--=== Contact Wrapper ===-->
                <div class="contact-wrapper mb-50" data-aos="fade-up" data-aos-duration="1200">
                    <h3>Contract From</h3>
                    <p>Reach out anytime — we're here to help with your organic food needs.</p>
                    <form autocapitalize="off" class="contact-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" class="form_control" placeholder="Your Name*" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your email*</label>
                                    <input type="email" class="form_control" placeholder="Your Email*" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Subject *</label>
                                    <input type="text" class="form_control" placeholder="Enter subject" name="subject" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Your message*</label>
                                <div class="form-group">
                                    <textarea name="message" class="form_control" placeholder="Write message" rows="4" cols="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="theme-btn style-one">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->

<!--====== Start Blog Section ======-->
<section class="agricko-blog-sec pt-80 pb-190">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <!--==== Section-title ===-->
                <div class="section-title mb-50 text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Our Latest Blog</span>
                    <h2>Recent Posts from Fresh Agricultural Insights</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <!--=== Agricko Button ===-->
                <div class="agricko-button mb-60 text-lg-end text-center" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{ route('blogs') }}" class="theme-btn style-one">View All Blogs</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($featuredBlogs as $index => $blog)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Agricko Post Item ===-->
                <div class="agricko-post-item mb-40" data-aos="fade-up" data-aos-duration="{{ 1000 + ($index * 200) }}">
                    <div class="post-thumbnail">
                        @if($blog->featured_image)
                            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}">
                        @else
                            <img src="{{ asset('assets/images/home-one/blog/blog-img' . (($index % 3) + 1) . '.jpg') }}" alt="{{ $blog->title }}">
                        @endif
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span><i class="far fa-user"></i>{{ $blog->author }}</span>
                            <span><i class="far fa-comments"></i>03 Comment</span>
                        </div>
                        <h4><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="icon-btn style-one"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Blog Section ======-->
@endsection

@push('styles')
<style>
.search-results-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    z-index: 1000;
    max-height: 400px;
    overflow-y: auto;
}

.search-results-content {
    padding: 15px;
}

/* Blog image sizing */
.agricko-post-item .post-thumbnail img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 8px;
}

.search-section {
    margin-bottom: 15px;
}

.search-section:last-child {
    margin-bottom: 0;
}

.search-section h6 {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px solid #eee;
}

.search-item {
    margin-bottom: 8px;
}

.search-item:last-child {
    margin-bottom: 0;
}

.search-item a {
    display: block;
    padding: 8px;
    border-radius: 3px;
    transition: background-color 0.2s;
}

.search-item a:hover {
    background-color: #f8f9fa;
    text-decoration: none;
}

.search-item-content h6 {
    font-size: 13px;
    font-weight: 500;
    color: #333;
    margin-bottom: 3px;
}

.search-item-content p {
    font-size: 12px;
    color: #666;
    margin: 0;
    line-height: 1.3;
}
</style>
@endpush
