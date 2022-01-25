<?php

namespace CoreLib\BasicComponents\Components\Text;

use Core\ComponentManager\ComponentController;

class Controller extends ComponentController
{
    public function __construct($params)
    {
        $this->params = $params;
    }

    public static function DefinedParameters()
    {
        return (object)[
            'text' => [
                'type' => 'content'
            ]
        ];
    }

    public function loadView()
    {
        echo '<div>' . $this->params->text->getHtml() . '</div>';
    }

}