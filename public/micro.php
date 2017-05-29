<?php

try {
    /*--------------------------------------------------------------*/
    /* Make Application                                             */
    /*--------------------------------------------------------------*/

    /** @var \Neutrino\Foundation\Bootstrap $bootstrap */
    $bootstrap = require_once __DIR__ . '/../bootstrap/app.php';

    /** @var \App\Kernels\Micro\Kernel $kernel */
    $kernel = $bootstrap->make(\App\Kernels\Micro\Kernel::class);

    /**
     * Handle the request
     */
    $kernel->handle();
} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
