<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Success</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-5">
        <div class="bg-white rounded shadow-lg p-5 text-center">
            <h1 class="text-2xl font-bold text-green-600">Upload xong rồi!</h1>
            <p class="mt-3 text-gray-700">Bạn đã tải lên hình ảnh thành công!</p>
            <div class="mt-5">
                <img src="{{ asset(''. $image->image_path) }}" alt="Uploaded Image" class="mx-auto rounded-lg shadow-md max-w-full h-auto">
            </div>
            
            <div class="mt-5">
                <label class="block text-sm font-medium text-gray-700">Link người xem:</label>
                <input type="text" value="{{ url(''. $image->image_path) }}" readonly class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>
            <div class="mt-5">
                <a href="{{ url(''. $image->image_path) }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    Xem ảnh
                </a>
            </div>
        </div>
    </div>
</body>
</html>
