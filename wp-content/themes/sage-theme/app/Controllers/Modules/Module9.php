<?php

namespace App\Controllers\Modules;

class Module9
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}