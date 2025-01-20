<?php

$routes->group('admin', function ($routes) {




    $routes->resource('peticionesdescargamasiva', [
        'filter' => 'permission:peticionesdescargamasiva-permission',
        'controller' => 'peticionesdescargamasivaController',
        'except' => 'show',
        'namespace' => 'julio101290\boilerplateCFDIDescargaMasiva\Controllers',
    ]);

    $routes->post('peticionesdescargamasiva/save'
            , 'PeticionesdescargamasivaController::save'
            , ['namespace' => 'julio101290\boilerplateCFDIDescargaMasiva\Controllers']
    );

    $routes->post('peticionesdescargamasiva/getPeticionesdescargamasiva'
            , 'PeticionesdescargamasivaController::getPeticionesdescargamasiva'
    );
});
