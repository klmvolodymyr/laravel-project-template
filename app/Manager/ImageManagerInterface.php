<?php

namespace App\Manager;

use App\Entities\Image;

/**
 * Interface ImageManagerInterface
 *
 * @package App\Manager
 */
interface ImageManagerInterface
{
    /**
     * @param Image $entity
     *
     * @return Image
     */
    public function create(Image $entity): Image;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function restore(int $id): bool;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function active(int $id): bool;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function favorite(int $id): bool;
}
