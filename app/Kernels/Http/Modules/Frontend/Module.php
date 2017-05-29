<?php

namespace App\Kernels\Http\Modules\Frontend;

use App\Core\Providers\SomeApiServices as SomeApiProvider;
use Neutrino\Constants\Services;
use Neutrino\Module as NeutrinoModule;
use Phalcon\DiInterface;

/**
 * Class Kernel
 *
 * @package App\Kernels\Http\Modules\Frontend\Controllers
 */
class Module extends NeutrinoModule
{
    /**
     * Return the Provider List to load.
     *
     * @var string[]
     */
    protected $providers = [];

    public function initialise(DiInterface $di)
    {
        $this->view->setViewsDir($this->config->view->views_dir . DIRECTORY_SEPARATOR . 'front');
    }
}
