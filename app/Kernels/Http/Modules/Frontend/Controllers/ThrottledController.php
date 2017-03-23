<?php

namespace App\Kernels\Http\Modules\Frontend\Controllers;

use Neutrino\Http\Middleware\ThrottleRequest;

/**
 * Class ThrottledController
 *
 * @package     App\Kernels\Http\Modules\Frontend\Controllers
 */
class ThrottledController extends ControllerJson
{
    protected function onConstruct()
    {
        parent::onConstruct();

        $this->middleware(new ThrottleRequest(60, 60));
    }

    public function indexAction()
    {
    }
}
