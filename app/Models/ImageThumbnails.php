<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Illuminate\Notifications\Notifiable;

/**
 *
 * Class ImageThumbnails
 *
 * @package App\Models
 *
 * @property int        $id
 * @property string     $uuid
 * @property int        $imageId
 * @property string     $name
 * @property string     $base64
 * @property string     $size
 * @property \DateTime  $createdAt
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ImageThumbnails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ImageThumbnails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ImageThumbnails query()
 *
 */
class ImageThumbnails extends Model
{
    use Notifiable; use HasFactory; use SoftDeletes, HasJsonRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}
