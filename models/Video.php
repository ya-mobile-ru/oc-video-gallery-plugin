<?php

namespace Yamobile\VideoGallery\Models;

use Model;
use Yamobile\VideoGallery\Models\Category;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model
     */
    public $table = 'yamobile_videogallery_video';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'source' => 'required',
        'category_id' => 'required',
        'sort_order' => 'required',
    ];

    /*
     * Relations
     */
    public $belongsTo = [
        'category' => Category::class,
    ];
}
