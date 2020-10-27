<?php

namespace App\Repositories;

use App\Models\Image;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * Class ImagesRepository
 *
 * @package App\Repositories
 */
class ImagesRepository  extends EntityRepository implements ImagesRepositoryInterface
{
    private $em;

//    public function __construct()
//    {
//        $this->em = EntityManager::getRepository(\App\Entities\Image::class);
//
//    }
    /**
     * @inheritDoc
     */
    public function get(int $userId)
    {
//        return Image::find($userId);
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
