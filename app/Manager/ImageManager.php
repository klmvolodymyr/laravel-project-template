<?php

namespace App\Manager;

use App\Entities\Image;
use LaravelDoctrine\ORM\Facades\EntityManager;

/**
 * Class ImageManager
 *
 * @package App\Manager
 */
class ImageManager implements ImageManagerInterface, ManagerInterface
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * ImageManager constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param Image $image
     *
     * @return bool
     */
    public function save(Image $image): bool
    {
        $this->em->persist($image);
        $this->em->flush();

        return true;
    }

    /**
     * @param Image $image
     *
     * @return Image
     */
    public function create(Image $image): Image
    {
        $this->em->persist($image);
        $this->em->flush();

        return $image;
    }

    public function restore(int $id): void
    {
        $image = $this->em->
    }
//
//    public function remove(int $id): void
//    {
//
//    }
//
//    public function active(int $id): void
//    {
//        // TODO: Implement active() method.
//    }
//
//    public function favorite(int $id): void
//    {
//        // TODO: Implement favorite() method.
//    }
//    public function save($entity)
//    {
//        // TODO: Implement save() method.
//    }
//
//    public function restore(int $id): void
//    {
//        // TODO: Implement restore() method.
//    }
//
//    public function remove(int $id)
//    {
//        // TODO: Implement remove() method.
//    }
//
//    public function active(int $id): void
//    {
//        // TODO: Implement active() method.
//    }
//
//    public function favorite(int $id): void
//    {
//        // TODO: Implement favorite() method.
//    }
    public function remove(int $id)
    {
        // TODO: Implement remove() method.
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
