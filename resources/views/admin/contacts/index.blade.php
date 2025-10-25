@extends('admin.layout')

@section('title', 'Quản lý liên hệ - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Quản lý liên hệ</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Chủ đề</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone ?? 'N/A' }}</td>
                        <td>{{ $contact->subject ?? 'N/A' }}</td>
                        <td>
                            <span class="badge bg-{{ $contact->status == 'new' ? 'danger' : ($contact->status == 'read' ? 'warning' : 'success') }}">
                                {{ $contact->status == 'new' ? 'Mới' : ($contact->status == 'read' ? 'Đã đọc' : 'Đã trả lời') }}
                            </span>
                        </td>
                        <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#contactModal{{ $contact->id }}">
                                <i class="fas fa-eye"></i>
                            </button>
                            @if($contact->status == 'new')
                            <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="read">
                                <button type="submit" class="btn btn-sm btn-warning">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="contactModal{{ $contact->id }}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Chi tiết liên hệ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Tên:</strong> {{ $contact->name }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Email:</strong> {{ $contact->email }}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <strong>Số điện thoại:</strong> {{ $contact->phone ?? 'N/A' }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Chủ đề:</strong> {{ $contact->subject ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <strong>Tin nhắn:</strong>
                                            <div class="mt-2 p-3 bg-light rounded">
                                                {{ $contact->message }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <strong>Ngày tạo:</strong> {{ $contact->created_at->format('d/m/Y H:i') }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Trạng thái:</strong> 
                                            <span class="badge bg-{{ $contact->status == 'new' ? 'danger' : ($contact->status == 'read' ? 'warning' : 'success') }}">
                                                {{ $contact->status == 'new' ? 'Mới' : ($contact->status == 'read' ? 'Đã đọc' : 'Đã trả lời') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    @if($contact->status == 'new')
                                    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="read">
                                        <button type="submit" class="btn btn-warning">Đánh dấu đã đọc</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Không có liên hệ nào</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
@endsection
