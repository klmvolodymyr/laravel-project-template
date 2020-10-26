<?php


namespace App\Factory;

use App\DTO\CreateImageDTO;
use App\Models\Type\ImageStatusType;

/**
 * Class ImageFactory
 *
 * @package App\Factory
 */
class ImageFactory
{
    /**
     * @param string $checksum
     * @param string $fileName
     * @param string $filePath
     * @param string $urlPath
     * @param int    $fileSize
     * @param int    $width
     * @param int    $height
     * @param string $mimeType
     *
     * @return CreateImageDTO
     */
    public static function createCreateImageDTO(
        string $checksum,
        string $fileName,
        string $filePath,
        string $urlPath,
        int $fileSize,
        int $width,
        int $height,
        string $mimeType
    ): CreateImageDTO
    {
        $dto = (new CreateImageDTO());
        $dto->checksum = $checksum;
        $dto->fileName = $fileName;
        $dto->filePath = $filePath;
        $dto->urlPath = $urlPath;
        $dto->fileSize = $fileSize;
        $dto->width = $width;
        $dto->height = $height;
        $dto->mimeType = $mimeType;
        $dto->status = ImageStatusType::STATUS_NEW;
        $dto->createdAt = new \DateTimeImmutable();

        return $dto;
    }
}
