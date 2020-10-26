<?php

namespace App\Manager;

/**
 * Interface ManagerInterface
 *
 * @package App\Manager
 */
interface ManagerInterface
{
    /**
     * @param $entity
     *
     * @return mixed entity
     */
    public function save($entity);

    /**
     * @param string $id
     *
     * @return bool
     */
    public function remove(string $id): bool;
}
