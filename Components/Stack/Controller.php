<?php

namespace CoreLib\BasicComponents\Components\Stack;

use Core\ComponentManager\ComponentController;

class Controller extends ComponentController
{
    public function __construct($params)
    {
        $this->params = $params;
    }

    public static function DefinedParameters()
    {
        return [
            'items' => ['type' => 'array', 'item' => ['type' => 'component']]
        ];
    }

    public function loadView()
    {
        include __DIR__.'/View.php';
    }
}