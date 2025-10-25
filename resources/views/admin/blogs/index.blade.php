@extends('admin.layout')

@section('title', 'Quản lý bài viết - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Quản lý bài viết</h1>
    <div>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm bài viết mới
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Danh mục</th>
                        <th>Tác giả</th>
                        <th>Nổi bật</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>
                            <strong>{{ Str::limit($blog->title, 50) }}</strong>
                            @if($blog->short_description)
                            <br><small class="text-muted">{{ Str::limit($blog->short_description, 60) }}</small>
                            @endif
                        </td>
                        <td>
                            @if($blog->blogCategory)
                                <span class="badge bg-info">{{ $blog->blogCategory->name }}</span>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                        <td>{{ $blog->author }}</td>
                        <td>
                            @if($blog->is_featured)
                                <span class="badge bg-success">Có</span>
                            @else
                                <span class="badge bg-secondary">Không</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-{{ $blog->status == 'published' ? 'success' : 'warning' }}">
                                {{ $blog->status == 'published' ? 'Đã xuất bản' : 'Bản nháp' }}
                            </span>
                        </td>
                        <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-sm btn-info" title="Xem chi tiết">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning" title="Chỉnh sửa">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Chưa có bài viết nào.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($blogs->hasPages())
        <div class="d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
