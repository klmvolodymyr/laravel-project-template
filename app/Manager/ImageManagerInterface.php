<?php

namespace App\Manager;

use App\DTO\CreateImageDTO;
use App\DTO\ImageDTO;

/**
 * Interface ImageManagerInterface
 *
 * @package App\Manager
 */
interface ImageManagerInterface
{
    /**
     * @param CreateImageDTO $dto
     *
     * @return ImageDTO
     */
    public function create(CreateImageDTO $dto): ImageDTO;

    /**
     * @param array $entity
     */
    public function save(array $entity);

    /**
     * @param int $id
     */
    public function restore(int $id): void;

    /**
     * @param int $id
     */
    public function remove(int $id): void;

    /**
     * @param int $id
     */
    public function active(int $id): void;

    /**
     * @param int $id
     */
    public function favorite(int $id): void;
}
