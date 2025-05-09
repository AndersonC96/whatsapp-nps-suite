<?php
    return [
        'GET' => [
            'login'                 =>  'AuthController@login',
            'logout'                =>  'AuthController@logout',
            'dashboard'             =>  'DashboardController@index',
            'usuarios'              =>  'UsuarioController@index',
            'usuarios/create'       =>  'UsuarioController@create',
            'usuarios/edit'         =>  'UsuarioController@edit',
            'usuarios/delete'       =>  'UsuarioController@delete',
            'representantes'        =>  'RepresentanteController@index',
            'representantes/create' =>  'RepresentanteController@create',
            'representantes/edit'   =>  'RepresentanteController@edit',
            'representantes/delete' =>  'RepresentanteController@delete',
            'clientes'              =>  'ClienteController@index',
            'clientes/create'       =>  'ClienteController@create',
            'clientes/edit'         =>  'ClienteController@edit',
            'clientes/delete'       =>  'ClienteController@delete',
        ],
        'POST' => [
            'login'                 =>  'AuthController@auth',
            'usuarios/store'        =>  'UsuarioController@store',
            'usuarios/update'       =>  'UsuarioController@update',
            'usuarios/delete'       =>  'UsuarioController@delete',
            'representantes/store'  =>  'RepresentanteController@store',
            'representantes/update' =>  'RepresentanteController@update',
            'representantes/delete' =>  'RepresentanteController@delete',
            'clientes/store'        =>  'ClienteController@store',
            'clientes/update'       =>  'ClienteController@update',
            'clientes/delete'       =>  'ClienteController@delete',
        ]
    ];