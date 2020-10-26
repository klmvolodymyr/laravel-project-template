<?php

namespace App\Http\Controllers;

use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use App\Repositories\ImagesRepository;
use App\Repositories\ImagesRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ImagesController
 *
 * @package App\Http\Controllers
 */
class ImageUploaderController extends Controller
{
    /**
     * @var ImagesRepositoryInterface
     */
    private $repository;

    /**
     * @var ImageManagerInterface
     */
    private $manager;

    /**
     * ImagesController constructor.
     *
     * @param ImagesRepository $repository
     * @param ImageManager      $manager
     */
    public function __construct(
        ImagesRepository $repository,
        ImageManager $manager
    ){
        $this->repository = $repository;
        $this->manager = $manager;
    }

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Laravel OpenApi Demo Documentation",
     *      description="L5 Swagger OpenApi description",
     *      @OA\Contact(
     *          email="admin@admin.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Demo API Server"
     * )
     *
     * @OA\Tag(
     *     name="Projects",
     *     description="API Endpoints of Projects"
     * )
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showAll()
    {
        $images = $this->repository->allActivePreview();

        return view('components.images.all', ['images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $payload = $request->file();

        if (! $payload) {
            return response()->json(null, 400);
        }

//        // Only grab the first element because single file uploads
//        // are not supported at this time
//        $file = reset($payload);
//
//        $path = $file->storePublicly(Image::baseStoragePath(), [
//            'disk' => config('canvas.storage_disk'),
//        ]);
//
//        return \Storage::disk(config('canvas.storage_disk'))->url($path);
    }

    /**
     * @param int $id
     */
    public function restore(int $id)
    {
        $this->manager->restore($id);
    }

    /**
     * @param int $id
     */
    public function deleteImage(int $id)
    {
        $this->manager->remove($id);
    }

    /**
     * @param int $id
     */
    public function addToFavorite(int $id)
    {
        $this->manager->favorite($id);
    }
}
