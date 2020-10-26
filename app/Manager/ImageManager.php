<?php

namespace App\Manager;

use App\DTO\CreateImageDTO;
use App\DTO\ImageDTO;
use App\Models\Image;
use App\Models\Type\ImageStatusType;
use Ramsey\Uuid\Uuid;


/**
 * Class ImageManager
 *
 * @package App\Manager
 */
class ImageManager implements ImageManagerInterface, ManagerInterface
{
    /**
     * @param CreateImageDTO $dto
     *
     * @return ImageDTO
     */
    public function create(CreateImageDTO $dto): ImageDTO
    {
        $image = new Image();
        $image->urlPath = $dto->urlPath;
        $image->mimeType = $dto->mimeType;
        $image->height = $dto->height;
        $image->width = $dto->width;
        $image->fileSize = $dto->fileSize;
        $image->urlPath = $dto->urlPath;
        $image->filePath = $dto->filePath;
        $image->fileName = $dto->fileName;
        $image->uuid = Uuid::uuid1();
        $image->status = ImageStatusType::STATUS_NEW;
        $image->createdAt = new \DateTime();
        $image->updatedAt = new \DateTime();
        $image->save();

        $image = new ImageDTO();
//        $image->id = Response::json(array('success' => true, 'last_insert_id' => $data->id), 200);

        return $image;
    }

    public function save(array $entity)
    {
//        return self::§
    }

    public function restore(int $id): void
    {
        // TODO: Implement restore() method.
    }

    public function remove(int $id): void
    {

    }

    public function active(int $id): void
    {
        // TODO: Implement active() method.
    }

    public function favorite(int $id): void
    {
        // TODO: Implement favorite() method.
    }
}
