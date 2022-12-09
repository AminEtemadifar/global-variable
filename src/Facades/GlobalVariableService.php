<?php

namespace JobMetric\GlobalVariable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static JobMetric\GlobalVariable\Object\Document document()
 *
 * @see \JobMetric\GlobalVariable\GlobalVariableService
 */
class GlobalVariableService extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'GlobalVariableService';
    }
}
