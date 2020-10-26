<?php

namespace App\Services;

use App\DTO\ImageDTO;
use App\DTO\ThumbnailIDTO;

/**
 * Interface ThumbnailIServiceInterface
 *
 * @package App\Services
 */
interface ThumbnailIServiceInterface
{
    /**
     * @param ImageDTO $dto
     *
     * @return ThumbnailIDTO
     */
    public function createThumbnails(ImageDTO $dto): ThumbnailIDTO;
}
