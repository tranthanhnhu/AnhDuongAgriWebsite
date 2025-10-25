@extends('layouts.app')

@section('title', $blog->title . ' - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>{{ $blog->title }}</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('blogs') }}">Bài viết</a></li>
                        <li>{{ $blog->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start Blog Details Section ======-->
<section class="agricko-blog-details-sec pt-130 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Content -->
                <article class="blog-post">
                    <!-- Featured Image -->
                    <div class="blog-featured-image mb-4">
                        @if($blog->featured_image)
                            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                        @else
                            <img src="{{ asset('assets/images/home-one/blog/blog-img1.jpg') }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                        @endif
                    </div>
                    
                    <!-- Blog Meta -->
                    <div class="blog-meta mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="meta-info">
                                    <span class="meta-item">
                                        <i class="far fa-user"></i> {{ $blog->author }}
                                    </span>
                                    <span class="meta-item">
                                        <i class="far fa-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}
                                    </span>
                                    @if($blog->blogCategory)
                                    <span class="meta-item">
                                        <i class="far fa-folder"></i> {{ $blog->blogCategory->name }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end">
                                @if($blog->fb_link)
                                <a href="{{ $blog->fb_link }}" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fab fa-facebook"></i> Chia sẻ trên Facebook
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Title -->
                    <h1 class="blog-title mb-4">{{ $blog->title }}</h1>
                    
                    <!-- Short Description -->
                    @if($blog->short_description)
                    <div class="blog-short-description mb-4">
                        <p class="lead">{{ $blog->short_description }}</p>
                    </div>
                    @endif
                    
                    <!-- Blog Content -->
                    <div class="blog-content">
                        {!! $blog->content !!}
                    </div>
                    
                    <!-- Blog Tags -->
                    @if($blog->blogCategory)
                    <div class="blog-tags mt-4 pt-4 border-top">
                        <h6>Tags:</h6>
                        <a href="{{ route('blogs', ['category' => $blog->blogCategory->id]) }}" class="badge bg-primary">
                            {{ $blog->blogCategory->name }}
                        </a>
                    </div>
                    @endif
                    
                    <!-- Social Share -->
                    <div class="blog-share mt-4 pt-4 border-top">
                        <h6>Chia sẻ bài viết:</h6>
                        <div class="social-share">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="blog-sidebar">
                    <!-- Search Widget -->
                    <div class="sidebar-widget mb-4">
                        <h5>Tìm kiếm</h5>
                        <form action="{{ route('blogs') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Tìm kiếm bài viết...">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Categories Widget -->
                    <div class="sidebar-widget mb-4">
                        <h5>Danh mục</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('blogs') }}">Tất cả</a></li>
                            @foreach(\App\Models\BlogCategory::all() as $category)
                            <li><a href="{{ route('blogs', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Recent Posts Widget -->
                    <div class="sidebar-widget mb-4">
                        <h5>Bài viết gần đây</h5>
                        @foreach(\App\Models\Blog::where('status', 'published')->latest()->limit(5)->get() as $recentBlog)
                        <div class="recent-post-item mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/images/home-one/blog/blog-img' . (($loop->index % 3) + 1) . '.jpg') }}" alt="{{ $recentBlog->title }}" class="img-fluid rounded">
                                </div>
                                <div class="col-8">
                                    <h6><a href="{{ route('blogs.show', $recentBlog->slug) }}">{{ Str::limit($recentBlog->title, 50) }}</a></h6>
                                    <small class="text-muted">{{ $recentBlog->created_at->format('d/m/Y') }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Contact Widget -->
                    <div class="sidebar-widget">
                        <div class="contact-widget bg-primary text-white p-4 rounded">
                            <h5 class="text-white">Cần tư vấn?</h5>
                            <p>Liên hệ với chúng tôi để được tư vấn về sản phẩm phân bón phù hợp.</p>
                            <a href="{{ route('contact') }}" class="btn btn-light">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Posts -->
        @if($relatedBlogs->count() > 0)
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Bài viết liên quan</h3>
                <div class="row">
                    @foreach($relatedBlogs as $relatedBlog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/home-one/blog/blog-img' . (($loop->index % 3) + 1) . '.jpg') }}" class="card-img-top" alt="{{ $relatedBlog->title }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ Str::limit($relatedBlog->title, 60) }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($relatedBlog->short_description, 100) }}</p>
                                <div class="mt-auto">
                                    <small class="text-muted">{{ $relatedBlog->created_at->format('d/m/Y') }}</small>
                                    <a href="{{ route('blogs.show', $relatedBlog->slug) }}" class="btn btn-primary btn-sm float-end">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section><!--====== End Blog Details Section ======-->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
<style>
.blog-title {
    color: #333;
    font-size: 2rem;
    font-weight: 600;
}

.blog-meta .meta-item {
    margin-right: 20px;
    color: #666;
}

.blog-meta .meta-item i {
    margin-right: 5px;
}

.blog-content {
    line-height: 1.8;
    color: #444;
}

.blog-content h1, .blog-content h2, .blog-content h3 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #333;
}

.blog-content p {
    margin-bottom: 1.5rem;
}

.blog-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 1rem 0;
}

.sidebar-widget {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.sidebar-widget h5 {
    color: #333;
    margin-bottom: 15px;
    font-weight: 600;
}

.sidebar-widget ul {
    list-style: none;
    padding: 0;
}

.sidebar-widget ul li {
    margin-bottom: 8px;
}

.sidebar-widget ul li a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s;
}

.sidebar-widget ul li a:hover {
    color: #28a745;
}

.recent-post-item {
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}

.recent-post-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.recent-post-item h6 a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    line-height: 1.4;
}

.recent-post-item h6 a:hover {
    color: #28a745;
}

.social-share .btn {
    margin-right: 10px;
    margin-bottom: 10px;
}

/* Blog featured image sizing */
.blog-featured-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 10px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .blog-featured-image img {
        height: 300px;
    }
}

@media (max-width: 576px) {
    .blog-featured-image img {
        height: 250px;
    }
}
</style>
@endpush
