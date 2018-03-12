<?php

use Neutrino\View\Engines\Volt;

/*
 +-------------------------------------------------------------------
 | View configuration
 +-------------------------------------------------------------------
 */
return [
    /*
     +---------------------------------------------------------------
     | views_dir
     +---------------------------------------------------------------
     |
     | This value define where the view are stored
     */
    'views_dir'     => __DIR__ . '/../resources/views/',
    /*
     +---------------------------------------------------------------
     | partial_dir
     +---------------------------------------------------------------
     |
     | Relative path from view_dir to partials directory
     */
    'partials_dir' => null /* 'partials/' */,
    /*
     +---------------------------------------------------------------
     | layout_dir
     +---------------------------------------------------------------
     |
     | Relative path from view_dir to layouts directory
     */
    'layouts_dir' => null /* 'layouts/' */,
    /*
     +---------------------------------------------------------------
     | compiled_path
     +---------------------------------------------------------------
     |
     | This value define the store of compiled view
     */
    'compiled_path' => __DIR__ . '/../storage/views/',
    /*
     +---------------------------------------------------------------
     | implicit
     +---------------------------------------------------------------
     |
     | This value define if your application
     | should use implicit view.
     | Default : false, no implicit view
     */
    'implicit'      => false,

    /*
     +---------------------------------------------------------------
     | Engines
     +---------------------------------------------------------------
     |
     | This value define the engines to use for generate templates
     */
    'engines' => [
        '.volt' => Volt\VoltEngineRegister::class,
    ],

    /*
     +---------------------------------------------------------------
     | Extensions
     +---------------------------------------------------------------
     |
     | This value define the extensions to add to the volt compiler
     */
    'extensions' => [
        Volt\Compiler\Extensions\PhpFunctionExtension::class,
        Volt\Compiler\Extensions\StrExtension::class,
    ],

    /*
     +---------------------------------------------------------------
     | Filters
     +---------------------------------------------------------------
     |
     | This value define the filters to add to the volt compiler
     */
    'filters' => [
        'round' => Volt\Compiler\Filters\RoundFilter::class,
        'merge' => Volt\Compiler\Filters\MergeFilter::class,
        'split' => Volt\Compiler\Filters\SplitFilter::class,
        'slice' => Volt\Compiler\Filters\SliceFilter::class,
    ],
];
