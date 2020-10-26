<?php

namespace App\Services;

use App\DTO\ImageDTO;
use App\Factory\ImageFactory;
use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\File;
use Psr\Log\LoggerInterface;
use Ramsey\Uuid\Uuid;

/**
 * Class ImageUploader
 *
 * @package App\Services
 */
class ImageUploader implements ImageUploaderInterface
{
    /**
     * @var ImageManagerInterface
     */
    private $manager;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ImageUploader constructor.
     *
     * @param LoggerInterface   $logger
     * @param ImageManager      $manager
     */
    public function __construct(LoggerInterface $logger, ImageManager $manager)
    {
        $this->logger = $logger;
        $this->manager = $manager;
    }

    /**
     * @param string $imagePath
     *
     * @return ImageDTO
     */
    public function uploadByPath(string $imagePath): ImageDTO
    {
        $this->logger->info('Screw that!');
        $file = Storage::get($imagePath);
        $img = Image::make($file);

        $dto = ImageFactory::createCreateImageDTO(
            md5($file),
            $img->basename ?? '',
            $img->basePath() ?? '',
            Storage::url($imagePath),
            $img->filesize(),
            $img->getWidth(),
            $img->getHeight(),
            $img->mime()
        );


        $image = $this->manager->create($dto);

        return $image;
    }
}
