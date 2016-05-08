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
            'name' => 'mconsole::maps.menu.list.name',
            'url' => 'maps',
            'visible' => true,
            'enabled' => true,
        ], 'maps', 'content');
        
        app('API')->acl->register([
            ['GET', 'maps', 'mconsole::maps.acl.index', 'maps'],
            ['GET', 'maps/create', 'mconsole::maps.acl.create'],
            ['POST', 'maps', 'mconsole::maps.acl.store'],
            ['GET', 'maps/{maps}/edit', 'mconsole::maps.acl.edit'],
            ['PUT', 'maps/{maps}', 'mconsole::maps.acl.update'],
            ['GET', 'maps/{maps}', 'mconsole::maps.acl.show'],
            ['DELETE', 'maps/{maps}', 'mconsole::maps.acl.destroy'],
        ]);
        
        app('API')->acl->register([
            ['GET', 'maps/{id}/places', 'mconsole::place.acl.index'],
            ['GET', 'maps/{id}/places/create', 'mconsole::place.acl.create'],
            ['POST', 'maps/{id}/places', 'mconsole::place.acl.store'],
            ['GET', 'maps/{id}/places/{places}/edit', 'mconsole::place.acl.edit'],
            ['PUT', 'maps/{id}/places/{places}', 'mconsole::place.acl.update'],
            ['GET', 'maps/{id}/places/{places}', 'mconsole::place.acl.show'],
            ['DELETE', 'maps/{id}/places/{places}', 'mconsole::place.acl.destroy'],
        ]);
        
    },
];
