<?php

namespace Yamobile\VideoGallery\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model
     */
    public $table = 'yamobile_videogallery_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required',
        'sort_order' => 'required',
    ];
}
