<?php

namespace App\Controllers\Modules;

class Module10
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
