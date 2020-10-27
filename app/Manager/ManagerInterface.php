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
     * @param mixed $entity
     *
     * @return bool
     */
    public function save($entity): bool;

    /**
     * @param int $id
     */
    public function remove(int $id);
}
