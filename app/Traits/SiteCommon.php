<?php

namespace App\Traits;

trait SiteCommon
{
    /**
     * @return string
     */
    public function getRegionCode()
    {
        return \Request::get('regionCode');
    }

    /**
     * @return ServiceContainer
     */
    public function getServiceContainer()
    {
        return \Request::get('serviceContainer');
    }
}
