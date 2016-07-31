<?php

return [
    'menu' => [
        'list' => [
            'name' => 'Places',
            'description' => 'Display a list of places',
        ],
        'create' => [
            'name' => 'Add place',
            'description' => 'Create places',
        ],
        'update' => [
            'name' => 'Edit',
            'description' => 'Editing maps and places',
        ],
        'delete' => [
            'name' => 'Delete place',
            'description' => 'Delete place',
        ],
    ],
    'table' => [
        'name' => 'Name',
        'address' => 'Address',
        'placesfor' => 'Place for map',
    ],
    'form' => [
        'use' => 'Use this place',
        'picker' => 'Select place on the map',
        'information' => 'Place information',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'name' => 'Name',
        'address' => 'Address',
        'country' => 'Country',
        'city' => 'City',
        'zip' => 'Postal code',
        'phone' => 'Phone number',
        'web' => 'Website',
        'comments' => 'Comments',
        'search' => 'Search',
        'parse' => 'Insert geo coordinates in "{latitude},{longitude}" format',
    ],
    'acl' => [
        'index' => 'Maps - places: show list',
        'create' => 'Maps - places: show create form',
        'store' => 'Maps - places: saving',
        'edit' => 'Maps - places: show edit form',
        'update' => 'Maps - places: updating',
        'show' => 'Maps - places: view',
        'destroy' => 'Maps - places: delete',
    ],
];
