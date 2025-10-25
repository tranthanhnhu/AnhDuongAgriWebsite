<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Browse Images</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .image-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 10px; }
        .image-item { border: 1px solid #ddd; padding: 10px; text-align: center; cursor: pointer; }
        .image-item:hover { background-color: #f5f5f5; }
        .image-item img { max-width: 100%; height: 100px; object-fit: cover; }
        .image-item p { margin: 5px 0; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Browse Images</h2>
    <div class="image-grid">
        @php
            $uploadPath = storage_path('app/public/uploads');
            $images = [];
            if (is_dir($uploadPath)) {
                $files = scandir($uploadPath);
                foreach ($files as $file) {
                    if (in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        $images[] = $file;
                    }
                }
            }
        @endphp
        
        @if(count($images) > 0)
            @foreach($images as $image)
                <div class="image-item" onclick="selectImage('{{ asset('storage/uploads/' . $image) }}')">
                    <img src="{{ asset('storage/uploads/' . $image) }}" alt="{{ $image }}">
                    <p>{{ $image }}</p>
                </div>
            @endforeach
        @else
            <p>No images found.</p>
        @endif
    </div>

    <script>
        function selectImage(url) {
            // Get CKEditor function number from URL
            const urlParams = new URLSearchParams(window.location.search);
            const funcNum = urlParams.get('CKEditorFuncNum');
            
            if (funcNum && window.opener) {
                // Call CKEditor callback
                window.opener.CKEDITOR.tools.callFunction(funcNum, url);
                window.close();
            }
        }
    </script>
</body>
</html>
