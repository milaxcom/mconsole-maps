<?php

/**
 * Maps module bootstrap file
 */
return [
    'name' => 'Maps',
    'identifier' => 'mconsole-maps',
    'description' => 'mconsole::maps.module.description',
    'register' => [
        'middleware' => [],
        'providers' => [],
        'aliases' => [],
        'bindings' => [],
        'dependencies' => [],
    ],
    'install' => function () {
        \Milax\Mconsole\Maps\Installer::install();
    },
    'uninstall' => function () {
        \Milax\Mconsole\Maps\Installer::uninstall();
    },
    'init' => function () {
        app('API')->menu->push([
            'name' => 'Maps',
            'translation' => 'maps.menu.list.name',
            'url' => 'maps',
            'visible' => true,
            'enabled' => true,
        ], 'maps', 'content');
        
        app('API')->acl->register([
            ['GET', 'maps', 'maps.acl.index', 'maps'],
            ['GET', 'maps/create', 'maps.acl.create'],
            ['POST', 'maps', 'maps.acl.store'],
            ['GET', 'maps/{maps}/edit', 'maps.acl.edit'],
            ['PUT', 'maps/{maps}', 'maps.acl.update'],
            ['GET', 'maps/{maps}', 'maps.acl.show'],
            ['DELETE', 'maps/{maps}', 'maps.acl.destroy'],
        ]);
        
        app('API')->acl->register([
            ['GET', 'maps/{id}/places', 'places.acl.index'],
            ['GET', 'maps/{id}/places/create', 'places.acl.create'],
            ['POST', 'maps/{id}/places', 'places.acl.store'],
            ['GET', 'maps/{id}/places/{places}/edit', 'places.acl.edit'],
            ['PUT', 'maps/{id}/places/{places}', 'places.acl.update'],
            ['GET', 'maps/{id}/places/{places}', 'places.acl.show'],
            ['DELETE', 'maps/{id}/places/{places}', 'places.acl.destroy'],
        ]);
        
    },
];
