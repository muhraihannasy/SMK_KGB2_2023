<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Exception;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $folder_name = [
            'berkas' => '1b262c63-a72e-4a6a-b930-b896d90180d3',
        ];

        $validated = $request->validate([
                'image_old' => "required",
                "image" => "required|mimes:jpeg,png,jpg",
                'folder' => "required",
        ]);


        $imageOld = public_path($folder_name[$request->folder] . '/' . $request->image_old);
        if (file_exists($imageOld)) {
            File::delete($imageOld);
        }

        try {
            $image = $request->file("image");
            $imageName = time() . "." . $image->getClientOriginalExtension();

            // $image->move("/home/smkb7435/public_html/api/upload/", $imageName);
            $image->move(public_path($folder_name[$request->folder]), $imageName);
            $url = url($folder_name[$request->folder] . "/" . $imageName);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }

        return response()->json([
            "url" => $url,
            "message" => "Upload Berhasil",
            "status" => 200,
        ]);
    }
}
