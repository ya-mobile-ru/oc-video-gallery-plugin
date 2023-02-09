<?php

namespace Yamobile\VideoGallery\Components;

use Cms\Classes\ComponentBase;
use Yamobile\VideoGallery\Models\Category as VideoCategory;

class Category extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Категория видео',
            'description' => 'Показывает категорию видео.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL',
                'description' => 'Параметр URL, необходимый для выбора конкретной категории.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function category()
    {
        $slug = $this->property('slug');
        
        return VideoCategory::where('slug', $slug)->first();
    }
}
