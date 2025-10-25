@extends('admin.layout')

@section('title', 'Quản lý sản phẩm - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Quản lý sản phẩm</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Thêm sản phẩm
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Nổi bật</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->prodCategory->name ?? 'N/A' }}</td>
                        <td>
                            @if($product->sale_price && $product->sale_price < $product->original_price)
                                <span class="text-decoration-line-through">{{ number_format($product->original_price) }}đ</span>
                                <br><strong class="text-danger">{{ number_format($product->sale_price) }}đ</strong>
                            @else
                                {{ number_format($product->original_price) }}đ
                            @endif
                        </td>
                        <td>
                            @if($product->is_featured)
                                <span class="badge bg-success">Có</span>
                            @else
                                <span class="badge bg-secondary">Không</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-{{ $product->status == 'active' ? 'success' : 'danger' }}">
                                {{ $product->status == 'active' ? 'Hoạt động' : 'Không hoạt động' }}
                            </span>
                        </td>
                        <td>{{ $product->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.products.show', $product) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Không có sản phẩm nào</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
