<?php

namespace JeffreyHyer\BambooHR;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return 'bamboohr';
    }

}