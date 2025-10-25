@extends('layouts.app')

@section('title', 'Liên hệ - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>Liên hệ</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start Contact Section ======-->
<section class="agricko-contact-sec pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- Agricko Content Box -->
                <div class="agricko-content-box mb-50 text-center text-xl-start">
                    <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="flaticon-leaves"></i>Liên hệ với chúng tôi</span>
                        <h2>Cần tư vấn về sản phẩm phân bón? Liên hệ ngay!</h2>
                    </div>
                    <div class="agricko-image" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/home-one/contact/contact-img1.jpg') }}" alt="contact image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <!--=== Contact Wrapper ===-->
                <div class="contact-wrapper mb-50" data-aos="fade-up" data-aos-duration="1200">
                    <h3>Form liên hệ</h3>
                    <p>Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể.</p>
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <form autocapitalize="off" class="contact-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Họ và tên *</label>
                                    <input type="text" class="form_control @error('name') is-invalid @enderror" placeholder="Nhập họ và tên" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form_control @error('email') is-invalid @enderror" placeholder="Nhập email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form_control @error('phone') is-invalid @enderror" placeholder="Nhập số điện thoại" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Chủ đề</label>
                                    <input type="text" class="form_control @error('subject') is-invalid @enderror" placeholder="Nhập chủ đề" name="subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Nội dung tin nhắn *</label>
                                <div class="form-group">
                                    <textarea name="message" class="form_control @error('message') is-invalid @enderror" placeholder="Nhập nội dung tin nhắn" rows="4" cols="3" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="theme-btn style-one">Gửi tin nhắn</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Contact Info Section -->
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-item text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="icon">
                        <i class="far fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h4>Địa chỉ</h4>
                        <p>Số 68, Đường H4, Khu đô thị mới Vàm Cỏ Đông Southgate, Xã Bến Lức, Tỉnh Tây Ninh</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-item text-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="icon">
                        <i class="far fa-phone-alt"></i>
                    </div>
                    <div class="content">
                        <h4>Điện thoại</h4>
                        <p><a href="tel:0869275241">0869275241</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-item text-center" data-aos="fade-up" data-aos-duration="1400">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h4>Email</h4>
                        <p><a href="mailto:anhduongagrivn@gmail.com">anhduongagrivn@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
<style>
.contact-info-item {
    padding: 30px 20px;
    border: 1px solid #eee;
    border-radius: 10px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
}

.contact-info-item:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}

.contact-info-item .icon {
    width: 80px;
    height: 80px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 24px;
    color: #28a745;
}

.contact-info-item h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

.contact-info-item p {
    color: #666;
    margin: 0;
}

.contact-info-item a {
    color: #28a745;
    text-decoration: none;
}

.contact-info-item a:hover {
    text-decoration: underline;
}
</style>
@endpush
