<?php

namespace Codex\Config;

use CodeIgniter\Config\BaseConfig;

class Assets extends BaseConfig
{
    public $assetsPath = APPPATH . 'Assets'. DIRECTORY_SEPARATOR;
    
    public $publicPath = FCPATH . 'public'. DIRECTORY_SEPARATOR;

    public $dependencies = [
        'template/backend/css' => [
            'vendor/twbs/bootstrap/dist/css/bootstrap.min.css'
        ],
        'template/backend/js' => [
            'vendor/twbs/bootstrap/dist/js/bootstrap.min.js'
        ]
    ];
}