<?php

return [
    'module' => [
        'description' => 'Create and edit 2GIS maps, Google maps, Yandex maps',
    ],
    'menu' => [
        'list' => [
            'name' => 'Maps',
            'description' => 'Show maps list',
        ],
        'create' => [
            'name' => 'Add map',
            'description' => 'Creating maps and points',
        ],
        'update' => [
            'name' => 'Edit map',
            'description' => 'Editing maps and points',
        ],
        'delete' => [
            'name' => 'Delete map',
            'description' => 'Remove a map with all of the related points',
        ],
    ],
    'table' => [
        'name' => 'Name',
        'provider' => 'Provider',
        'places' => 'Places',
        'count' => 'Number of places',
        'viewplaces' => 'View',
        'addplace' => 'Add',
    ],
    'form' => [
        'main' => 'General',
        'additional' => 'Additional',
        'name' => 'Map name',
        'description' => 'Map description',
        'center' => 'Map center',
        'zoom' => 'Zoom',
        'provider' => 'Provider',
    ],
    'options' => [
        'group' => [
            'name' => 'Map',
        ],
        'language' => 'Map interface language',
    ],
    'languages' => [
        'Arabic' => 'Arabic',
        'Basque' => 'Basque',
        'Basque' => 'Basque',
        'Bengali' => 'Bengali',
        'Bulgarian' => 'Bulgarian',
        'Catalan' => 'Catalan',
        'Croatian' => 'Croatian',
        'Czech' => 'Czech',
        'Danish' => 'Danish',
        'Dutch' => 'Dutch',
        'English' => 'English',
        'Farsi' => 'Farsi',
        'Filipino' => 'Filipino',
        'Finnish' => 'Finnish',
        'French' => 'French',
        'Galician' => 'Galician',
        'German' => 'German',
        'Greek' => 'Greek',
        'Gujarati' => 'Gujarati',
        'Hebrew' => 'Hebrew',
        'Hindi' => 'Hindi',
        'Hungarian' => 'Hungarian',
        'Indonesian' => 'Indonesian',
        'Italian' => 'Italian',
        'Japanese' => 'Japanese',
        'Kannada' => 'Kannada',
        'Korean' => 'Korean',
        'Latvian' => 'Latvian',
        'Lithuanian' => 'Lithuanian',
        'Malayalam' => 'Malayalam',
        'Marathi' => 'Marathi',
        'Norwegian' => 'Norwegian',
        'Polish' => 'Polish',
        'Portuguese' => 'Portuguese',
        'Romanian' => 'Romanian',
        'Russian' => 'Russian',
        'Serbian' => 'Serbian',
        'Slovak' => 'Slovak',
        'Slovenian' => 'Slovenian',
        'Spanish' => 'Spanish',
        'Swedish' => 'Swedish',
        'Tagalog' => 'Tagalog',
        'Tamil' => 'Tamil',
        'Telugu' => 'Telugu',
        'Thai' => 'Thai',
        'Turkish' => 'Turkish',
        'Ukrainian' => 'Ukrainian',
        'Vietnamese' => 'Vietnamese',
    ],
    'acl' => [
        'index' => 'Maps: show list',
        'create' => 'Maps: show create form',
        'store' => 'Maps: saving',
        'edit' => 'Maps: show edit form',
        'update' => 'Maps: updating',
        'show' => 'Maps: view',
        'destroy' => 'Maps: delete',
    ],
];
