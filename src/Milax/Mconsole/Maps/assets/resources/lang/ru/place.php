<?php

return [
    'menu' => [
        'list' => [
            'name' => 'Точки',
            'description' => 'Отображать список точек',
        ],
        'create' => [
            'name' => 'Добавить точку',
            'description' => 'Создание точек',
        ],
        'update' => [
            'name' => 'Редактировать точку',
            'description' => 'Редактирование карт и точек',
        ],
        'delete' => [
            'name' => 'Удалить точку',
            'description' => 'Удаление точки',
        ],
    ],
    'table' => [
        'name' => 'Название',
        'address' => 'Адрес',
        'placesfor' => 'Точки для карты',
    ],
    'form' => [
        'use' => 'Использовать эту точку',
        'picker' => 'Выбор места на карте',
        'information' => 'Информация о месте',
        'latitude' => 'Широта',
        'longitude' => 'Долгота',
        'name' => 'Название',
        'address' => 'Адрес',
        'country' => 'Страна',
        'city' => 'Город',
        'zip' => 'Почтовый индекс',
        'phone' => 'Номер телефона',
        'image' => 'Изображение',
        'web' => 'Веб сайт',
        'comment' => 'Комментарии',
        'sarch' => 'Поиск',
        'parse' => 'Вставьте координаты в формате "{долгота},{широта}"',
    ],
    'acl' => [
        'index' => 'Карты - точки: просмотр списка',
        'create' => 'Карты - точки: форма создания',
        'store' => 'Карты - точки: сохранение',
        'edit' => 'Карты - точки: форма редактирования',
        'update' => 'Карты - точки: обновление',
        'show' => 'Карты - точки: просмотр',
        'destroy' => 'Карты - точки: удаление',
    ],
    'key' => '<ol><li>Получите ключ Google Maps <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">здесь</a></li><li>Добавьте в .env файл переменную <code>GOOGLE_MAPS_KEY=yourkey</code></li></ol>',
];
