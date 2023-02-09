<?php

namespace Yamobile\VideoGallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Video extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Yamobile.VideoGallery', 'video-gallery', 'video');
    }
}
