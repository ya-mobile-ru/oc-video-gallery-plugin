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
        'category_id' => 'required',
        'sort_order' => 'required',
    ];

    /*
     * Relations
     */
    public $belongsTo = [
        'category' => Category::class,
    ];

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getSourceAttribute()
    {
        $iframe = $this->iframe;
        $source;
        preg_match('/src=".*?"/', $iframe, $source);
        if ($source) {
            return substr($source[0], 5, -1);
        }
        return '';
    }
}
