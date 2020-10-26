<?php


namespace App\Services;


use App\DTO\ImageDTO;
use App\DTO\ThumbnailIDTO;

class ThumbnailIService implements ThumbnailIServiceInterface
{
    public function __construct()
    {
    }

    public function createThumbnails(ImageDTO $dto): ThumbnailIDTO
    {
////            $img->resize(320, 240);
////            $r = [
////                $img->height(),
////                $img->basename,
////                $img->mime(),
////                $img->filesize(),
////                $img->getEncoded(),
////                $img->getWidth(),
////                $img->height(),
////                $img->mime(),
////                $img->stream('jpg', 60)->getContents()
////            ];
////            $str = $img->stream('jpg', 60);
        // TODO: Implement createThumbnails() method.
    }
}
