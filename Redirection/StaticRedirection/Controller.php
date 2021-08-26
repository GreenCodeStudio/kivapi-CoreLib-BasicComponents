<?php

namespace CoreLib\BasicComponents\Redirection\StaticRedirection;

use Core\ComponentManager\ComponentController;

class Script
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