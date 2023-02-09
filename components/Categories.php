<?php

namespace Yamobile\VideoGallery\Components;

use Cms\Classes\ComponentBase;
use Yamobile\VideoGallery\Models\Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Категории видео',
            'description' => 'Показывает список категорий видео.',
        ];
    }

    public function categories()
    {
        return Category::get();
    }
}
