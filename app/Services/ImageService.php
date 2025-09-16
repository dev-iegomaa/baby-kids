<?php

namespace App\Services;

class ImageService
{
    public function upload(object $image, string $path, ?string $oldImage = null): string
    {
        $imageName = time() . '.' . $image->extension();
        if ($oldImage) {
            $this->delete($oldImage);
        }
        $image->move(public_path('images/' . $path), $imageName);
        return $imageName;
    }

    public function delete(string $oldImage): void
    {
        unlink(public_path($oldImage));
    }
}

