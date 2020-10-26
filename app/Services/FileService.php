<?php


namespace App\Services;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class FileService
 *
 * @package App\Services
 */
class FileService implements FileServiceInterface, UnzipFileInterface
{
    /**
     * @param UploadedFile  $file
     * @param string        $path
     * @param string        $fileName
     *
     * @return string
     */
    public function uploadZipAndUnZip(UploadedFile $file, string $path, string $fileName): string
    {
        try {
            $storage = Storage::disk($path);

            if ($file->getClientOriginalExtension() == 'zip') {
                $storage->putFile($path, $file, $fileName);

                $sourcePath = 'app/public/' . $path . '/' . $fileName;

                $destinationPath = 'task-images/' . $path;

                $this->unzip(storage_path($sourcePath), public_path($destinationPath));

                $htmlFileName = $this->findImagesFileInFolder(public_path($destinationPath));

                return url($destinationPath . '/' . $htmlFileName);
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $pathToFile
     * @param $extractTo
     * @throws \Exception
     */
    public function unzip($pathToFile, $extractTo)
    {
        $zipper = new \Madnest\Madzipper\Madzipper;

        $zipper->make($pathToFile)->extractTo($extractTo);

        $zipper->close();
    }


    /**
     * @param $pathToFolder
     *
     * @return string
     */
    public function findImagesFileInFolder($pathToFolder)
    {
        foreach (Storage::disk('local')->allFiles($pathToFolder) as $file) {
            if ($file->getExtension() == 'jpg') {
                return $file->getFilename();
            }

            continue;
        }
    }
}
