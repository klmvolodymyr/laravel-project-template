<?php

namespace App\Manager;

use App\Entities\Image;
use App\Entities\Type\ImageStatusType;
use Doctrine\ORM\EntityManager;

/**
 * Class ImageManager
 *
 * @package App\Manager
 */
class ImageManager implements ImageManagerInterface
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
     * @return Image
     */
    public function save(Image $image): Image
    {
        $this->em->persist($image);
        $this->em->flush();

        return $image;
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

    /**
     * @param int $id
     *
     * @return Image
     */
    public function restore(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_RESTORED);

        return $this->save($image);
    }

    /**
     * @param int $id
     *
     * @return Image
     */
    public function active(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_ACTIVE);

        return $this->save($image);
    }

    /**
     * @param int $id
     *
     * @return Image
     */
    public function favorite(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_ACTIVE);

        return $this->save($image);
    }

    /**
     * @param int $id
     *
     * @return Image
     */
    public function load(int $id): Image
    {
        return $this->em->find(Image::class, $id);
    }
}
