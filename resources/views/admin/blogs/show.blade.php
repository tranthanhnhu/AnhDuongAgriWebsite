@extends('admin.layout')

@section('title', 'Chi tiết bài viết - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Chi tiết bài viết</h1>
    <div>
        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning me-2">
            <i class="fas fa-edit"></i> Chỉnh sửa
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Quay lại
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Thông tin bài viết</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <td width="200"><strong>ID:</strong></td>
                        <td>{{ $blog->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tiêu đề:</strong></td>
                        <td>{{ $blog->title }}</td>
                    </tr>
                    <tr>
                        <td><strong>Slug:</strong></td>
                        <td>{{ $blog->slug }}</td>
                    </tr>
                    <tr>
                        <td><strong>Danh mục:</strong></td>
                        <td>{{ $blog->blogCategory->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tác giả:</strong></td>
                        <td>{{ $blog->author }}</td>
                    </tr>
                    <tr>
                        <td><strong>Nổi bật:</strong></td>
                        <td>
                            @if($blog->is_featured)
                                <span class="badge bg-success">Có</span>
                            @else
                                <span class="badge bg-secondary">Không</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Trạng thái:</strong></td>
                        <td>
                            <span class="badge bg-{{ $blog->status == 'published' ? 'success' : 'warning' }}">
                                {{ $blog->status == 'published' ? 'Đã xuất bản' : 'Bản nháp' }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Ngày tạo:</strong></td>
                        <td>{{ $blog->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ngày cập nhật:</strong></td>
                        <td>{{ $blog->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        @if($blog->short_description)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Mô tả ngắn</h5>
            </div>
            <div class="card-body">
                <p>{{ $blog->short_description }}</p>
            </div>
        </div>
        @endif
        
        <div class="card mt-4">
            <div class="card-header">
                <h5>Nội dung bài viết</h5>
            </div>
            <div class="card-body">
                {!! $blog->content !!}
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        @if($blog->fb_link)
        <div class="card">
            <div class="card-header">
                <h5>Liên kết Facebook</h5>
            </div>
            <div class="card-body">
                <a href="{{ $blog->fb_link }}" target="_blank" class="btn btn-primary">
                    <i class="fab fa-facebook"></i> Xem trên Facebook
                </a>
            </div>
        </div>
        @endif
        
        <div class="card mt-4">
            <div class="card-header">
                <h5>Hành động</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </a>
                    <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" class="btn btn-info">
                        <i class="fas fa-eye"></i> Xem trên website
                    </a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash"></i> Xóa bài viết
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
