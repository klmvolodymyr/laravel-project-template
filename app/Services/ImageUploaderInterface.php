<?php

namespace App\Services;

use App\DTO\ImageDTO;

/**
 * Interface ImageUploaderInterface
 *
 * @package App\Services
 */
interface ImageUploaderInterface
{
    /**
     * @param string $imagePath
     *
     * @return ImageDTO
     */
    public function uploadByPath(string $imagePath): ImageDTO;
}
