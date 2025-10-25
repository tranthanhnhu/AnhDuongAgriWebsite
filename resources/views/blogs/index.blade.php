@extends('layouts.app')

@section('title', 'Bài viết - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>Bài viết</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li>Bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start Blog Section ======-->
<section class="agricko-blog-standard-sec pt-130 pb-190">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Standard Wrapper -->
                <div class="blog-standard-wrapper">
                    @foreach($blogs as $index => $blog)
                    <!--=== Agricko Post Item ===-->
                    <div class="agricko-post-item mb-40" data-aos="fade-up" data-aos-duration="{{ 1000 + ($index * 200) }}">
                        <div class="post-thumbnail">
                            <img src="{{ asset('assets/images/innerpage/blog/blog-list' . (($index % 3) + 1) . '.jpg') }}" alt="blog image">
                            <div class="category-btn">{{ $blog->blogCategory->name ?? 'Uncategorized' }}</div>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span><i class="far fa-user"></i>{{ $blog->author }}</span>
                                <span><i class="far fa-comments"></i>Comment</span>
                            </div>
                            <h4><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                            <p>{{ $blog->short_description }}</p>
                            <div class="agricko-button">
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="theme-btn style-one">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!--===  Sidebar Widget Area  ===-->
                <div class="sidebar-widget-area">
                    <!--===  Sidebar Widget  ===-->
                    <div class="sidebar-widget sidebar-search-widget mb-30" data-aos="fade-up" data-aos-duration="600">
                        <div class="widget-content">
                            <form autocomplete="off">
                                <div class="form-group">
                                    <input type="search" class="form_control" placeholder="Keywords" name="search" required>
                                    <button class="search-btn"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--===  Sidebar Widget  ===-->
                    <div class="sidebar-widget sidebar-categories-widget mb-30" data-aos="fade-up" data-aos-duration="800">
                        <h4 class="widget-title">Danh mục bài viết</h4>
                        <div class="widget-content">
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="{{ route('blogs', ['category' => $category->id]) }}">{{ $category->name }}<i class="far fa-long-arrow-right"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-post-widget mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="widget-title">Bài viết gần đây</h4>
                        <div class="widget-content">
                            <ul class="recent-post-list">
                                @foreach($blogs->take(4) as $index => $recentBlog)
                                <li class="post-thumbnail-content">
                                    <img src="{{ asset('assets/images/innerpage/blog/post-thumb' . (($index % 3) + 1) . '.jpg') }}" alt="post thumb">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">{{ $recentBlog->created_at->format('M d, Y') }}</a></span>
                                        <h6><a href="{{ route('blogs.show', $recentBlog->slug) }}">{{ $recentBlog->title }}</a></h6>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-tag-widget mb-30" data-aos="fade-up" data-aos-duration="1400">
                        <h4 class="widget-title">Tags</h4>
                        <div class="widget-content">
                            @foreach($categories as $category)
                            <a href="{{ route('blogs', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-social-widget mb-30" data-aos="fade-up" data-aos-duration="1600">
                        <div class="widget-content">
                            <h4 class="widget-title">Follow Us</h4>
                            <div class="social-box">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--===  Sidebar Widget  ===-->
                    <div class="sidebar-widget sidebar-banner-widget mb-30 bg_cover" data-aos="fade-up" data-aos-duration="1800" style="background-image: url({{ asset('assets/images/innerpage/blog/banner-img1.jpg') }});" data-aos="fade-up" data-aos-duration="800">
                        <div class="widget-content">
                            <h4>Need Help?</h4>
                            <p>Contact us for expert advice and support with your soil.</p>
                            <h4><a href="tel:+(123)756-7653">+(123) 756-7653</a></h4>
                            <span><a href="mailto:info@agricko.com">Info@agricko.Com</a></span>
                            <div class="agricko-button">
                                <a href="{{ route('contact') }}" class="theme-btn style-one">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Blog Section ======-->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
@endpush
