<?php

namespace App\Repositories;

/**
 * Interface ImagesRepositoryInterface
 *
 * @package App\Repositories
 */
interface ImagesRepositoryInterface
{
    /**
     * Get's a image by it's ID
     *
     * @param int
     */
    public function get(int $id);

    /**
     * Get's all images.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes an image.
     *
     * @param int
     */
    public function delete(int $id);

    /**
     * Updates an image.
     *
     * @param int
     * @param array
     */
    public function update(int $id, array $userData);
}
