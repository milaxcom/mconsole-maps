<?php

use Milax\Mconsole\Maps\Installer;

/**
 * Maps module bootstrap file
 */
return [
    'name' => 'Maps',
    'identifier' => 'mconsole-maps',
    'description' => 'mconsole::maps.module.description',
    'menu' => [
        'content' => [
            'child' => [
                'maps_all' => [
                    'name' => 'All maps',
                    'translation' => 'maps.menu.list.name',
                    'url' => 'maps',
                    'description' => 'maps.menu.list.description',
                    'route' => 'mconsole.maps.index',
                    'visible' => true,
                    'enabled' => true,
                ],
                'maps_form' => [
                    'name' => 'Create page',
                    'translation' => 'maps.menu.create.name',
                    'url' => 'maps/create',
                    'description' => 'maps.menu.create.description',
                    'route' => 'mconsole.maps.create',
                    'visible' => false,
                    'enabled' => true,
                ],
                'maps_update' => [
                    'name' => 'Edit maps',
                    'translation' => 'maps.menu.update.name',
                    'description' => 'maps.menu.update.description',
                    'route' => 'mconsole.maps.edit',
                    'visible' => false,
                    'enabled' => true,
                ],
                'maps_delete' => [
                    'name' => 'Delete maps',
                    'translation' => 'maps.menu.delete.name',
                    'description' => 'maps.menu.delete.description',
                    'route' => 'mconsole.maps.destroy',
                    'visible' => false,
                    'enabled' => true,
                ],
                'place_all' => [
                    'name' => 'All place',
                    'translation' => 'place.menu.list.name',
                    'url' => 'place',
                    'description' => 'place.menu.list.description',
                    'route' => 'mconsole.place.index',
                    'visible' => false,
                    'enabled' => true,
                ],
                'place_form' => [
                    'name' => 'Create page',
                    'translation' => 'place.menu.create.name',
                    'url' => 'place/create',
                    'description' => 'place.menu.create.description',
                    'route' => 'mconsole.place.create',
                    'visible' => false,
                    'enabled' => true,
                ],
                'place_update' => [
                    'name' => 'Edit place',
                    'translation' => 'place.menu.update.name',
                    'description' => 'place.menu.update.description',
                    'route' => 'mconsole.place.edit',
                    'visible' => false,
                    'enabled' => true,
                ],
                'place_delete' => [
                    'name' => 'Delete place',
                    'translation' => 'place.menu.delete.name',
                    'description' => 'place.menu.delete.description',
                    'route' => 'mconsole.place.destroy',
                    'visible' => false,
                    'enabled' => true,
                ],
            ],
        ],
    ],
    'register' => [
        'middleware' => [],
        'providers' => [],
        'aliases' => [],
        'bindings' => [],
        'dependencies' => [],
    ],
    'install' => function () {
        Installer::install();
    },
    'uninstall' => function () {
        Installer::uninstall();
    },
    'init' => function () {
        // ..
    },
];
