<?php


namespace App\DataTransformer;

use App\DTO\CreateImageDTO;
use App\Entities\Image;
use App\Models\Type\ImageStatusType;

/**
 * Class ImageDataTransformer
 *
 * @package App\DataTransformer
 */
class ImageDataTransformer
{
    /**
     * @param CreateImageDTO $dto
     *
     * @return Image
     */
    public static function createImageFromDTO(CreateImageDTO $dto): Image
    {
        return (new Image())
            ->setChecksum($dto->checksum)
            ->setFileName($dto->fileName)
            ->setFilePath($dto->filePath)
            ->setFileSize($dto->fileSize)
            ->setHeight($dto->height)
            ->setWidth($dto->width)
            ->setMimeType($dto->mimeType)
            ->setStatus($dto->status)
            ->setUpdatedAt((new \DateTime()))
            ->setUrlPath($dto->urlPath);
    }

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
