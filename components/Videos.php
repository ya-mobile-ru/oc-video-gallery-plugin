<?php

namespace Yamobile\VideoGallery\Components;

use Cms\Classes\ComponentBase;
use Yamobile\VideoGallery\Models\Category;
use Yamobile\VideoGallery\Models\Video;

class Videos extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Видео',
            'description' => 'Показывает список видео.',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Параметр URL категории',
                'description' => 'Параметр URL категории, необходимый для выбора записей.',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],
        ];
    }

    public function videos()
    {
        $slug = $this->property('slug');
        $videos;

        if ($slug) {
            $videos = Category::get()->firstWhere('slug', $slug)->videos()->get();
            return $videos;
        }

        return Video::get();
    }

    public function onRun()
    {
        $this->addJs('assets/js/script.js');
        $this->addCss('assets/css/style.css');
    }
}
