<?php

namespace App\Providers;

use App\Classes\Computer;
use App\Classes\ComputerMotherboard;

class ComputerServiceProvider
{
    public function register()
    {
        $this->app()->bind(Computer::class, function()
        {
            return new ComputerMotherboard(new Computer);
        });
    }
}