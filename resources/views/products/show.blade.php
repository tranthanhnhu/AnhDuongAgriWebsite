@extends('layouts.app')

@section('title', $product->name . ' - Anh Duong Agri')

@section('content')
<!--====== Start Page Banner ======-->
<section class="page-banner bg_cover" style="background-image: url({{ asset('assets/images/innerpage/bg/page-banner.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Content -->
                <div class="page-content text-center">
                    <h1>{{ $product->name }}</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('products') }}">Sản phẩm</a></li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner ======-->

<!--====== Start Product Details Section ======-->
<section class="agricko-product-details-sec pt-130 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Product Images -->
                <div class="product-images">
                    @php
                        $images = [];
                        if($product->img_1) $images[] = $product->img_1;
                        if($product->img_2) $images[] = $product->img_2;
                        if($product->img_3) $images[] = $product->img_3;
                    @endphp
                    
                    @if(count($images) > 0)
                        <div class="main-image mb-3">
                            <img id="mainProductImage" src="{{ Storage::url($images[0]) }}" alt="{{ $product->name }}" class="img-fluid rounded" style="width: 100%; height: 400px; object-fit: cover; cursor: pointer;" onclick="openImageModal('{{ Storage::url($images[0]) }}')">
                        </div>
                        
                        @if(count($images) > 1)
                        <div class="thumbnail-images d-flex gap-2 flex-wrap">
                            @foreach($images as $index => $image)
                                <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}" class="img-thumbnail thumbnail-img" 
                                     style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;" 
                                     onclick="changeMainImage('{{ Storage::url($image) }}', this)"
                                     data-image="{{ Storage::url($image) }}">
                            @endforeach
                        </div>
                        @endif
                    @else
                        <div class="main-image mb-3">
                            <img src="{{ asset('assets/images/home-two/products/product-img1.jpg') }}" alt="{{ $product->name }}" class="img-fluid rounded" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Product Info -->
                <div class="product-info">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    
                    @if($product->prodCategory)
                    <p class="product-category">
                        <strong>Danh mục:</strong> {{ $product->prodCategory->name }}
                    </p>
                    @endif
                    
                    <div class="product-price mb-4">
                        @if($product->sale_price && $product->sale_price < $product->original_price)
                            <span class="current-price h3 text-danger">{{ number_format($product->sale_price) }}đ</span>
                            <span class="original-price text-muted text-decoration-line-through ms-2">{{ number_format($product->original_price) }}đ</span>
                        @else
                            <span class="current-price h3 text-primary">{{ number_format($product->original_price) }}đ</span>
                        @endif
                    </div>
                    
                    @if($product->short_description)
                    <div class="product-short-description mb-4">
                        <p>{{ $product->short_description }}</p>
                    </div>
                    @endif
                    
                    <div class="product-actions mb-4">
                        <a href="tel:0869275241" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-phone"></i> Gọi ngay
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-envelope"></i> Liên hệ tư vấn
                        </a>
                    </div>
                    
                    @if($product->link_shoppe || $product->link_fb || $product->link_lazada)
                    <div class="product-links">
                        <h5>Mua hàng online:</h5>
                        <div class="d-flex gap-2">
                            @if($product->link_shoppe)
                            <a href="{{ $product->link_shoppe }}" target="_blank" class="btn btn-outline-success">
                                <i class="fas fa-shopping-cart"></i> Shopee
                            </a>
                            @endif
                            @if($product->link_fb)
                            <a href="{{ $product->link_fb }}" target="_blank" class="btn btn-outline-primary">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                            @endif
                            @if($product->link_lazada)
                            <a href="{{ $product->link_lazada }}" target="_blank" class="btn btn-outline-warning">
                                <i class="fas fa-shopping-bag"></i> Lazada
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Product Details Tabs -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="product-details-tabs">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">
                                Mô tả chi tiết
                            </button>
                        </li>
                        @if($product->additional_info)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional" type="button" role="tab">
                                Thông tin bổ sung
                            </button>
                        </li>
                        @endif
                        @if($product->review)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab">
                                Đánh giá
                            </button>
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="p-4">
                                @if($product->descriptions)
                                    {!! $product->descriptions !!}
                                @else
                                    <p>Chưa có mô tả chi tiết cho sản phẩm này.</p>
                                @endif
                            </div>
                        </div>
                        @if($product->additional_info)
                        <div class="tab-pane fade" id="additional" role="tabpanel">
                            <div class="p-4">
                                {!! $product->additional_info !!}
                            </div>
                        </div>
                        @endif
                        @if($product->review)
                        <div class="tab-pane fade" id="review" role="tabpanel">
                            <div class="p-4">
                                {!! $product->review !!}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Sản phẩm liên quan</h3>
                <div class="row">
                    @foreach($relatedProducts as $relatedProduct)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            @if($relatedProduct->img_1)
                                <img src="{{ Storage::url($relatedProduct->img_1) }}" class="card-img-top" alt="{{ $relatedProduct->name }}" style="height: 200px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/images/home-two/products/product-img' . (($loop->index % 8) + 1) . '.jpg') }}" class="card-img-top" alt="{{ $relatedProduct->name }}" style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($relatedProduct->short_description, 100) }}</p>
                                <div class="mt-auto">
                                    <div class="price mb-2">
                                        @if($relatedProduct->sale_price && $relatedProduct->sale_price < $relatedProduct->original_price)
                                            <span class="text-danger fw-bold">{{ number_format($relatedProduct->sale_price) }}đ</span>
                                            <small class="text-muted text-decoration-line-through">{{ number_format($relatedProduct->original_price) }}đ</small>
                                        @else
                                            <span class="text-primary fw-bold">{{ number_format($relatedProduct->original_price) }}đ</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
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
</section><!--====== End Product Details Section ======-->
@endsection

@push('scripts')
<script>
function changeMainImage(imageSrc, clickedThumbnail) {
    // Update main image
    document.getElementById('mainProductImage').src = imageSrc;
    document.getElementById('mainProductImage').setAttribute('onclick', `openImageModal('${imageSrc}')`);
    
    // Update thumbnail active state
    document.querySelectorAll('.thumbnail-img').forEach(thumb => {
        thumb.style.border = '2px solid transparent';
    });
    clickedThumbnail.style.border = '2px solid #28a745';
}

function openImageModal(imageSrc) {
    // Create modal if not exists
    let modal = document.getElementById('imageModal');
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'imageModal';
        modal.className = 'modal fade';
        modal.innerHTML = `
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hình ảnh sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" class="img-fluid" style="max-height: 70vh;">
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(modal);
    }
    
    // Set image and show modal
    document.getElementById('modalImage').src = imageSrc;
    const bsModal = new bootstrap.Modal(modal);
    bsModal.show();
}
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/innerpage.css') }}">
<style>
.product-title {
    color: #333;
    margin-bottom: 1rem;
}

.product-category {
    color: #666;
    margin-bottom: 1rem;
}

.current-price {
    font-weight: bold;
}

.product-actions .btn {
    padding: 12px 24px;
}

.product-links {
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}

.product-details-tabs {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.nav-tabs {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.nav-tabs .nav-item {
    flex: 1;
    min-width: 0;
}

.nav-tabs .nav-link {
    border: none;
    border-bottom: 2px solid transparent;
    color: #666;
    font-weight: 500;
    text-align: center;
    white-space: nowrap;
    padding: 0.75rem 0.5rem;
    font-size: 0.875rem;
}

.nav-tabs .nav-link.active {
    border-bottom-color: #28a745;
    color: #28a745;
}

.tab-content {
    border: none;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .nav-tabs .nav-link {
        font-size: 0.8rem;
        padding: 0.5rem 0.25rem;
    }
}

.thumbnail-img {
    transition: all 0.3s ease;
}

.thumbnail-img:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
</style>
@endpush
