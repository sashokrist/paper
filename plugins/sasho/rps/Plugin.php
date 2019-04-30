<?php namespace Sasho\Rps;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Sasho\Rps\Components\Games' => 'game',
        ];
    }

    public function registerSettings()
    {
    }
}
