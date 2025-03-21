<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class Thumbnail
{
    /**
     * Generate thumbnails of different sizes for an image.
     *
     * @param string $imagePath Full path to the image.
     */
    public static function generate(string $imagePath)
    {
        if (!file_exists($imagePath)) {
            return;
        }

        $sizes = [
            '30x20' => [30, 20],
            '150x150' => [150, 150],
            '300x300' => [300, 300],
        ];

        $pathInfo = pathinfo($imagePath);
        $directory = $pathInfo['dirname'] . '/thumbnails';
        $filename = $pathInfo['basename'];

        // Ensure the main thumbnails folder exists
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        foreach ($sizes as $folder => $dimensions) {
            $newDirectory = $directory . '/' . $folder;

            // Ensure the specific size folder exists
            if (!file_exists($newDirectory)) {
                mkdir($newDirectory, 0777, true);
            }

            // Resize while keeping aspect ratio
            $img = Image::make($imagePath)->resize($dimensions[0], $dimensions[1], function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $img->save($newDirectory . '/' . $filename);
        }
    }
}
