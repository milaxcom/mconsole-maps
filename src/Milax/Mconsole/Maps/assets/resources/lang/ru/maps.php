<?php

return [
    'module' => [
        'description' => 'Создание и редактирование карт 2gis, Google Maps, Yandex карты',
    ],
    'menu' => [
        'list' => [
            'name' => 'Карты',
            'description' => 'Отображать список карт',
        ],
        'create' => [
            'name' => 'Добавить карту',
            'description' => 'Создание карт и точек',
        ],
        'update' => [
            'name' => 'Редактировать карту',
            'description' => 'Редактирование карт и точек',
        ],
        'delete' => [
            'name' => 'Удалить карту',
            'description' => 'Удаление карты со всеми связанными точками',
        ],
    ],
    'table' => [
        'name' => 'Название',
        'provider' => 'Поставщик',
        'places' => 'Места',
    ],
    'form' => [
        'main' => 'Основное',
        'additional' => 'Дополнительно',
        'name' => 'Название карты',
        'description' => 'Описание карты',
        'center' => 'Центр карты',
        'zoom' => 'Масштаб',
    ],
];
