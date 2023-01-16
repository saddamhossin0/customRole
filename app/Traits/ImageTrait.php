<?php
namespace App\Traits;


use Illuminate\Support\Facades\File;
use Image;

trait ImageTrait{
    public function saveFile($requestImage,$for = '_product_')
    {
        $extension = 'png';
        $mime_type = 'image/png';
        $directory = 'images/';

        File::ensureDirectoryExists('public/'.$directory, 0777, true);

        $image_197x152      = date('YmdHis') . "-" . $for . '-197x152' . rand(1, 50) . '.' . $extension;

        $image_197x152_url  = $directory . $image_197x152;

        Image::make($requestImage)->fit(1000, 500)->save('public/'.$image_197x152_url,89, 'png');

        $images = array(
            'image_197x152' => $image_197x152_url,
        );

        return $images;
    }

    public function saveGalleryFile($requestImage,$for = '_product_')
    {
        $extension = 'png';
        $mime_type = 'image/png';
        $directory = 'images/';

        File::ensureDirectoryExists('public/'.$directory, 0777, true);

        $image_300x200      = date('YmdHis') . "-" . $for . '-197x152' . rand(1, 50) . '.' . $extension;

        $image_300x200_url  = $directory . $image_300x200;

        Image::make($requestImage)->fit(300, 200)->save('public/'.$image_300x200_url,89, 'png');

        $images = array(
            'image_300x200' => $image_300x200_url,
        );

        return $images;
    }
}