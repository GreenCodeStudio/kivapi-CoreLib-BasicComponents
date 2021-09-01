<?php

namespace CoreLib\BasicComponents\Components\StaticRedirection;

use Core\ComponentManager\ComponentController;
use Core\ComponentManager\RedirectionController;

class Controller extends RedirectionController
{
    public function __construct($params)
    {
        $this->params = $params;
    }

    public static function DefinedParameters()
    {
        return [
            'link' => ['type' => 'url']
        ];
    }

    public function execute()
    {
        return $this->params->link;
    }
}