<?php

namespace App\Repositories;

use App\Models\Image;

/**
 * Class ImagesRepository
 *
 * @package App\Repositories
 */
class ImagesRepository implements ImagesRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function get(int $userId)
    {
        return Image::find($userId);
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return Image::all();
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id)
    {
        return Image::destroy($id);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $imageData)
    {
        Image::find($id)->update($imageData);
    }
}
