<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImgBB </title>
    @vite('resources/css/app.css') <!-- Nếu bạn đang sử dụng Vite -->
</head>
<body class="">
   
    <header class="bg-white shadow-md flex items-center justify-center ">
        <div class="container mx-auto px-4 py-4 flex justify-center items-center">
            <h1 class="text-3xl font-semibold text-blue-500  ">ImgBB</h1>
            
        </div>
    </header>

    <main class="min-h-screen bg-gray-100 flex items-center justify-center w-full p-6"> <!-- Thêm padding -->
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
            <h2 class="text-2xl font-semibold text-center mb-4 text-blue-600">Tải lên ảnh của bạn</h2>
            
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 mt-4 rounded text-center">
                    {{ session('success') }}
                </div>
            @endif
    
            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 ">
                @csrf
                <input type="file" name="image" class="block mb-4 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300 w-1/2 flex justify-center ">
                    Start Uploading 
                </button>
            </form>
    
            <p class="mt-4 text-gray-600 text-center">Hỗ trợ định dạng: JPG, JPEG, PNG, GIF</p>
        </div>
    </main>
    



</body>
</html>
