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
            ['GET', 'maps', 'mconsole::maps.acl.index'],
            ['GET', 'maps/create', 'mconsole::maps.acl.create'],
            ['POST', 'maps', 'mconsole::maps.acl.store'],
            ['GET', 'maps/{map}/edit', 'mconsole::maps.acl.edit'],
            ['PUT', 'maps/{map}', 'mconsole::maps.acl.update'],
            ['GET', 'maps/{map}', 'mconsole::maps.acl.show'],
            ['DELETE', 'maps/{map}', 'mconsole::maps.acl.destroy'],
        ], 'maps');
        
        app('API')->acl->register([
            ['GET', 'maps/{id}/places', 'mconsole::place.acl.index'],
            ['GET', 'maps/{id}/places/create', 'mconsole::place.acl.create'],
            ['POST', 'maps/{id}/places', 'mconsole::place.acl.store'],
            ['GET', 'maps/{id}/places/{place}/edit', 'mconsole::place.acl.edit'],
            ['PUT', 'maps/{id}/places/{place}', 'mconsole::place.acl.update'],
            ['GET', 'maps/{id}/places/{place}', 'mconsole::place.acl.show'],
            ['DELETE', 'maps/{id}/places/{place}', 'mconsole::place.acl.destroy'],
        ]);
        
    },
];
