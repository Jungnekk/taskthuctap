<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
class UploadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Lưu file vào thư mục public/uploads
    $path = $request->file('image')->store('uploads', 'public');

    // Lưu đường dẫn và tên vào cơ sở dữ liệu
    $image = new Image();
    $image->image_name = $request->file('image')->getClientOriginalName(); // Tên gốc của file
    $image->image_path = '/storage/' . $path; // Đường dẫn lưu trữ
    $image->save();

    // Chuyển hướng đến trang thành công
    return redirect()->route('upload.success', ['imageId' => $image->id]);
}

public function showSuccessPage($imageId)
{
    // Tìm kiếm hình ảnh trong cơ sở dữ liệu
    $image = Image::findOrFail($imageId);
    


    // Kiểm tra xem hình ảnh có tồn tại không
    if (!$imageId) {
        return redirect()->route('upload.form')->with('error', 'Image not found');
    }

    // Trả về view với thông tin hình ảnh
    return view('upload_success', compact('image'));
}

}