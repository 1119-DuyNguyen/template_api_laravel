<?php

namespace App\Http\Services;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FileUploadService
{
    private function generateNameImage($image)
    {
        $ext = $image->getClientOriginalExtension();

        $imageName = 'media_' . uniqid() . Str::random(6) . '_' . date('mdYHis') . '.' . $ext;

        return $imageName;
    }

    public function uploadFile(Request $request, $inputName, $path)
    {
        if (isset($inputName) && $request->hasFile($inputName)) {
            $image = $request->input($inputName);
            $ext = $image->getClientOriginalExtension();
            $imageName = uniqid('media_', true) . '.' . $ext;

            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
        return null;
    }


    public function uploadMultiFile(Request $request, $inputName, $path)
    {
        $imagePaths = [];

        if (isset($inputName) && $request->hasFile($inputName)) {
            $images = $request->{$inputName};

            foreach ($images as $image) {
                $imageName = $this->generateNameFile($image);
                $image->move(public_path($path), $imageName);

                $imagePaths[] = $path . '/' . $imageName;
            }

            return $imagePaths;
        }
    }


    public function updateFile(Request $request, $inputName, $path, $oldPath = null)
    {
        if (isset($inputName) && $request->hasFile($inputName)) {
            if (isset($oldPath) && $request->{$inputName} == $oldPath) {
                return null;
            }
            // Không xoá file cũ nữa
            // if (File::exists(public_path($oldPath))) {
            //     File::delete(public_path($oldPath));
            // }

            $image = $request->{$inputName};


            $imageName = $this->generateNameImage($image);
            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
        if (!isset($oldPath)) {
            return "default/coming-soon.jpg";
        }
        return null;
    }

    /** Handle Delte File */
    public function deleteImage(string $path)
    {
        if ($path !== "default/coming-soon.jpg" && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }


}
