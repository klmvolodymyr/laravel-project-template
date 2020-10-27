<?php


namespace App\Console\Commands;

use App\Services\FileService;
use App\Services\UnzipFileInterface;
use Illuminate\Console\Command;

/**
 * Class UnzipSeedImagesCommand
 *
 * @package App\Console\Commands
 */
class UnzipSeedImagesCommand extends Command
{
    private const DEFAULT_ARCHIVE_PATH = 'task-images.zip';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:images:prepeare';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var UnzipFileInterface
     */
    private $fileService;

    /**
     * UnzipSeedImagesCommand constructor.
     *
     * @param FileService $fileService
     */
    public function __constructor(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $this->fileService->unzip()

        return 0;
    }

}
