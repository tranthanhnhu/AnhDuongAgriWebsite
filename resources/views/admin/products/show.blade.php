@extends('admin.layout')

@section('title', 'Chi tiết sản phẩm - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Chi tiết sản phẩm</h1>
    <div>
        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning me-2">
            <i class="fas fa-edit"></i> Chỉnh sửa
        </a>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Quay lại
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Thông tin sản phẩm</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <td width="200"><strong>ID:</strong></td>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tên sản phẩm:</strong></td>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Slug:</strong></td>
                        <td>{{ $product->slug }}</td>
                    </tr>
                    <tr>
                        <td><strong>Danh mục:</strong></td>
                        <td>{{ $product->prodCategory->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Giá gốc:</strong></td>
                        <td>{{ $product->original_price ? number_format($product->original_price) . 'đ' : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Giá bán:</strong></td>
                        <td>{{ $product->sale_price ? number_format($product->sale_price) . 'đ' : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Nổi bật:</strong></td>
                        <td>
                            @if($product->is_featured)
                                <span class="badge bg-success">Có</span>
                            @else
                                <span class="badge bg-secondary">Không</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Trạng thái:</strong></td>
                        <td>
                            <span class="badge bg-{{ $product->status == 'active' ? 'success' : 'danger' }}">
                                {{ $product->status == 'active' ? 'Hoạt động' : 'Không hoạt động' }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Ngày tạo:</strong></td>
                        <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ngày cập nhật:</strong></td>
                        <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        @if($product->short_description)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Mô tả ngắn</h5>
            </div>
            <div class="card-body">
                <p>{{ $product->short_description }}</p>
            </div>
        </div>
        @endif
        
        @if($product->descriptions)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Mô tả chi tiết</h5>
            </div>
            <div class="card-body">
                {!! $product->descriptions !!}
            </div>
        </div>
        @endif
        
        @if($product->additional_info)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Thông tin bổ sung</h5>
            </div>
            <div class="card-body">
                {!! $product->additional_info !!}
            </div>
        </div>
        @endif
        
        @if($product->review)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Đánh giá</h5>
            </div>
            <div class="card-body">
                {!! $product->review !!}
            </div>
        </div>
        @endif
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5>Liên kết mua hàng</h5>
            </div>
            <div class="card-body">
                @if($product->link_shoppe)
                <div class="mb-3">
                    <strong>Shopee:</strong><br>
                    <a href="{{ $product->link_shoppe }}" target="_blank" class="btn btn-outline-success btn-sm">
                        <i class="fas fa-external-link-alt"></i> Mở link
                    </a>
                </div>
                @endif
                
                @if($product->link_fb)
                <div class="mb-3">
                    <strong>Facebook:</strong><br>
                    <a href="{{ $product->link_fb }}" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-external-link-alt"></i> Mở link
                    </a>
                </div>
                @endif
                
                @if($product->link_lazada)
                <div class="mb-3">
                    <strong>Lazada:</strong><br>
                    <a href="{{ $product->link_lazada }}" target="_blank" class="btn btn-outline-warning btn-sm">
                        <i class="fas fa-external-link-alt"></i> Mở link
                    </a>
                </div>
                @endif
                
                @if(!$product->link_shoppe && !$product->link_fb && !$product->link_lazada)
                <p class="text-muted">Chưa có liên kết mua hàng nào.</p>
                @endif
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h5>Hành động</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </a>
                    <a href="{{ route('products.show', $product->slug) }}" target="_blank" class="btn btn-info">
                        <i class="fas fa-eye"></i> Xem trên website
                    </a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash"></i> Xóa sản phẩm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
