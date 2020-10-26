<?php


namespace App\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Interface UnzipFileInterface
 *
 * @package App\Services
 */
interface UnzipFileInterface
{
    public function unzip($pathToFile, $extractTo);
}
