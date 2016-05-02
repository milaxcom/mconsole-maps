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
            'name' => 'All maps',
            'translation' => 'maps.menu.list.name',
            'url' => 'maps',
            'description' => 'maps.menu.list.description',
            'route' => 'mconsole.maps.index',
            'visible' => true,
            'enabled' => true,
        ], 'maps_all', 'content');
        app('API')->menu->push([
            'name' => 'Create page',
            'translation' => 'maps.menu.create.name',
            'url' => 'maps/create',
            'description' => 'maps.menu.create.description',
            'route' => 'mconsole.maps.create',
            'visible' => false,
            'enabled' => true,
        ], 'maps_form', 'content');
        app('API')->menu->push([
            'name' => 'Edit maps',
            'translation' => 'maps.menu.update.name',
            'description' => 'maps.menu.update.description',
            'route' => 'mconsole.maps.edit',
            'visible' => false,
            'enabled' => true,
        ], 'maps_update', 'content');
        app('API')->menu->push([
            'name' => 'Delete maps',
            'translation' => 'maps.menu.delete.name',
            'description' => 'maps.menu.delete.description',
            'route' => 'mconsole.maps.destroy',
            'visible' => false,
            'enabled' => true,
        ], 'maps_delete', 'content');
        app('API')->menu->push([
            'name' => 'All place',
            'translation' => 'place.menu.list.name',
            'url' => 'place',
            'description' => 'place.menu.list.description',
            'route' => 'mconsole.maps.{id}.places.index',
            'visible' => false,
            'enabled' => true,
        ], 'place_all', 'content');
        app('API')->menu->push([
            'name' => 'Create page',
            'translation' => 'place.menu.create.name',
            'url' => 'place/create',
            'description' => 'place.menu.create.description',
            'route' => 'mconsole.maps.{id}.places.create',
            'visible' => false,
            'enabled' => true,
        ], 'place_form', 'content');
        app('API')->menu->push([
            'name' => 'Edit place',
            'translation' => 'place.menu.update.name',
            'description' => 'place.menu.update.description',
            'route' => 'mconsole.maps.{id}.places.edit',
            'visible' => false,
            'enabled' => true,
        ], 'place_update', 'content');
        app('API')->menu->push([
            'name' => 'Delete place',
            'translation' => 'place.menu.delete.name',
            'description' => 'place.menu.delete.description',
            'route' => 'mconsole.maps.{id}.places.destroy',
            'visible' => false,
            'enabled' => true,
        ], 'place_delete', 'content');
    },
];
