<?php

namespace Yamobile\VideoGallery;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'yamobile.videogallery::lang.plugin.name',
            'description' => 'yamobile.videogallery::lang.plugin.description',
            'author' => 'yamobile.videogallery::lang.plugin.author',
            'icon' => 'icon-video-camera',
        ];
    }

    public function registerComponents()
    {
        return [
            \Yamobile\VideoGallery\Components\Categories::class => 'Categories',
            \Yamobile\VideoGallery\Components\Category::class => 'Category',
            \Yamobile\VideoGallery\Components\Videos::class => 'Videos',
        ];
    }
}
