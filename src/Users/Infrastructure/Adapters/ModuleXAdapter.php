<?php


namespace App\Users\Infrastructure\Adapters;


use App\ModuleX\Infrastructure\API\API;

class ModuleXAdapter
{
    public function __construct(private API $moduleXApi)
    {
    }

    public function getSomeData(): array{
        $this->moduleXApi->getSomeDate();
        return [];
    }
}