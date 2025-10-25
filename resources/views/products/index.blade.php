@extends('layouts.app')

@section('title', 'Sản phẩm - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>Sản phẩm</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li>Sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start Shop Section ======-->
<section class="agricko-shop-sec pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-title"><i class="flaticon-leaves"></i>Sản phẩm</span>
                    <h2>Tất cả sản phẩm phân bón</h2>
                </div>
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="row mb-50">
            <div class="col-12">
                <div class="category-filter text-center" data-aos="fade-up" data-aos-duration="1000">
                    <a href="{{ route('products') }}" class="filter-btn {{ !request('category') ? 'active' : '' }}">Tất cả</a>
                    @foreach($categories as $category)
                    <a href="{{ route('products', ['category' => $category->id]) }}" class="filter-btn {{ request('category') == $category->id ? 'active' : '' }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="row">
            @forelse($products as $index => $product)
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
            @empty
            <div class="col-12">
                <div class="text-center">
                    <h4>Không có sản phẩm nào</h4>
                    <p>Hiện tại chưa có sản phẩm nào trong danh mục này.</p>
                </div>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrapper text-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Shop Section ======-->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
<style>
.category-filter {
    margin-bottom: 30px;
}

.filter-btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 5px;
    background: #f8f9fa;
    color: #333;
    text-decoration: none;
    border-radius: 25px;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #28a745;
    color: white;
    text-decoration: none;
}

.pagination-wrapper {
    margin-top: 50px;
}

.pagination {
    justify-content: center;
}

.pagination .page-link {
    color: #28a745;
    border-color: #28a745;
}

.pagination .page-item.active .page-link {
    background-color: #28a745;
    border-color: #28a745;
}
</style>
@endpush
