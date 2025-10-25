@extends('admin.layout')

@section('title', 'Chỉnh sửa sản phẩm - Admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Chỉnh sửa sản phẩm</h1>
    <div>
        <a href="{{ route('admin.products.show', $product) }}" class="btn btn-info me-2">
            <i class="fas fa-eye"></i> Xem chi tiết
        </a>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Quay lại
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" id="product-form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="prod_category_id" class="form-label">Danh mục</label>
                        <select class="form-select @error('prod_category_id') is-invalid @enderror" id="prod_category_id" name="prod_category_id">
                            <option value="">Chọn danh mục</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('prod_category_id', $product->prod_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('prod_category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="original_price" class="form-label">Giá gốc</label>
                        <input type="number" class="form-control @error('original_price') is-invalid @enderror" id="original_price" name="original_price" value="{{ old('original_price', $product->original_price) }}" min="0" step="0.01">
                        @error('original_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sale_price" class="form-label">Giá bán</label>
                        <input type="number" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" value="{{ old('sale_price', $product->sale_price) }}" min="0" step="0.01">
                        @error('sale_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="short_description" class="form-label">Mô tả ngắn</label>
                <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3">{{ old('short_description', $product->short_description) }}</textarea>
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descriptions" class="form-label">Mô tả chi tiết</label>
                <textarea class="form-control @error('descriptions') is-invalid @enderror" id="descriptions" name="descriptions" rows="5">{{ old('descriptions', $product->descriptions) }}</textarea>
                @error('descriptions')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="additional_info" class="form-label">Thông tin bổ sung</label>
                <textarea class="form-control @error('additional_info') is-invalid @enderror" id="additional_info" name="additional_info" rows="3">{{ old('additional_info', $product->additional_info) }}</textarea>
                @error('additional_info')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Đánh giá</label>
                <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review" rows="3">{{ old('review', $product->review) }}</textarea>
                @error('review')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="link_shoppe" class="form-label">Link Shopee</label>
                        <input type="url" class="form-control @error('link_shoppe') is-invalid @enderror" id="link_shoppe" name="link_shoppe" value="{{ old('link_shoppe', $product->link_shoppe) }}">
                        @error('link_shoppe')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="link_fb" class="form-label">Link Facebook</label>
                        <input type="url" class="form-control @error('link_fb') is-invalid @enderror" id="link_fb" name="link_fb" value="{{ old('link_fb', $product->link_fb) }}">
                        @error('link_fb')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="link_lazada" class="form-label">Link Lazada</label>
                        <input type="url" class="form-control @error('link_lazada') is-invalid @enderror" id="link_lazada" name="link_lazada" value="{{ old('link_lazada', $product->link_lazada) }}">
                        @error('link_lazada')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                Sản phẩm nổi bật
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái *</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Hoạt động</option>
                            <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Không hoạt động</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Cập nhật sản phẩm
                </button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Hủy
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    let descriptionsEditor, additionalInfoEditor, reviewEditor;
    
    // Initialize CKEditor instances
    ClassicEditor
        .create(document.querySelector('#descriptions'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', '|',
                    'link', 'imageUpload', '|',
                    'undo', 'redo'
                ]
            },
            language: 'vi',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            }
        })
        .then(editor => {
            descriptionsEditor = editor;
            console.log('CKEditor 5 initialized for descriptions');
        })
        .catch(error => {
            console.error('Error initializing CKEditor 5:', error);
        });

    ClassicEditor
        .create(document.querySelector('#additional_info'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', '|',
                    'link', 'imageUpload', '|',
                    'undo', 'redo'
                ]
            },
            language: 'vi',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            }
        })
        .then(editor => {
            additionalInfoEditor = editor;
            console.log('CKEditor 5 initialized for additional_info');
        })
        .catch(error => {
            console.error('Error initializing CKEditor 5:', error);
        });

    ClassicEditor
        .create(document.querySelector('#review'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', '|',
                    'link', 'imageUpload', '|',
                    'undo', 'redo'
                ]
            },
            language: 'vi',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            }
        })
        .then(editor => {
            reviewEditor = editor;
            console.log('CKEditor 5 initialized for review');
        })
        .catch(error => {
            console.error('Error initializing CKEditor 5:', error);
        });
    
    // Handle form submission
    document.getElementById('product-form').addEventListener('submit', function(e) {
        // Update textarea values with CKEditor content before submission
        if (descriptionsEditor) {
            document.getElementById('descriptions').value = descriptionsEditor.getData();
        }
        if (additionalInfoEditor) {
            document.getElementById('additional_info').value = additionalInfoEditor.getData();
        }
        if (reviewEditor) {
            document.getElementById('review').value = reviewEditor.getData();
        }
    });
</script>
@endpush
