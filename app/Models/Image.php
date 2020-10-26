<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

/**
 * Class Image
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image whereUpdatedAt($value)
 *
 *
 * @mixin \Eloquent
 * @property int        $id
 * @property string     $uuid
 * @property string     $status
 * @property \DateTime  $createdAt
 * @property \DateTime  $updatedAt
 * @property string     $checksum
 * @property string     $fileName
 * @property string     $urlPath
 * @property string     $filePath
 * @property string     $fileSize
 * @property string     $fileType
 * @property string     $width
 * @property string     $height
 * @property string     $mimeType
 *
 * @package App\Models
 */
class Image extends Model
{
    use HasFactory; use SoftDeletes, HasJsonRelationships; use Notifiable;

    public const TABLE_NAME = 'images';

    protected $guarded = ['id'];

    protected $table = 'images';

    /**
     * @param int $id
     *
     * @return \Illuminate\Database\Query\Builder|mixed
     */
    public static function find(int $id)
    {
        return DB::table(self::TABLE_NAME)->find($id);
    }

    public static function findAllActive(): array
    {

    }
}
