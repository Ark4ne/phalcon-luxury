<?php

namespace App\Kernels\Http\Modules\Backend;

use Neutrino\Module as NeutrinoModule;
use Phalcon\DiInterface;

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
        $this->view->setViewsDir($this->config->view->views_dir . DIRECTORY_SEPARATOR . 'back');
    }
}