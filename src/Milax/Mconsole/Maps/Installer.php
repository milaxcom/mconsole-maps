<?php

namespace Milax\Mconsole\Maps;

use Milax\Mconsole\Contracts\Modules\ModuleInstaller;

class Installer implements ModuleInstaller
{
    protected static $options = [
        [
            'group' => 'maps.options.group.name',
            'label' => 'maps.options.language',
            'key' => 'map_picker_language',
            'value' => 'en',
            'type' => 'select',
            'options' => [
                'ar' => 'maps.languages.Arabic',
                'eu' => 'maps.languages.Basque',
                'eu' => 'maps.languages.Basque',
                'bn' => 'maps.languages.Bengali',
                'bg' => 'maps.languages.Bulgarian',
                'ca' => 'maps.languages.Catalan',
                'hr' => 'maps.languages.Croatian',
                'cs' => 'maps.languages.Czech',
                'da' => 'maps.languages.Danish',
                'nl' => 'maps.languages.Dutch',
                'en' => 'maps.languages.English',
                'fa' => 'maps.languages.Farsi',
                'fil' => 'maps.languages.Filipino',
                'fi' => 'maps.languages.Finnish',
                'fr' => 'maps.languages.French',
                'gl' => 'maps.languages.Galician',
                'de' => 'maps.languages.German',
                'el' => 'maps.languages.Greek',
                'gu' => 'maps.languages.Gujarati',
                'iw' => 'maps.languages.Hebrew',
                'hi' => 'maps.languages.Hindi',
                'hu' => 'maps.languages.Hungarian',
                'id' => 'maps.languages.Indonesian',
                'it' => 'maps.languages.Italian',
                'ja' => 'maps.languages.Japanese',
                'kn' => 'maps.languages.Kannada',
                'ko' => 'maps.languages.Korean',
                'lv' => 'maps.languages.Latvian',
                'lt' => 'maps.languages.Lithuanian',
                'ml' => 'maps.languages.Malayalam',
                'mr' => 'maps.languages.Marathi',
                'no' => 'maps.languages.Norwegian',
                'pl' => 'maps.languages.Polish',
                'pt' => 'maps.languages.Portuguese',
                'ro' => 'maps.languages.Romanian',
                'ru' => 'maps.languages.Russian',
                'sr' => 'maps.languages.Serbian',
                'sk' => 'maps.languages.Slovak',
                'sl' => 'maps.languages.Slovenian',
                'es' => 'maps.languages.Spanish',
                'sv' => 'maps.languages.Swedish',
                'tl' => 'maps.languages.Tagalog',
                'ta' => 'maps.languages.Tamil',
                'te' => 'maps.languages.Telugu',
                'th' => 'maps.languages.Thai',
                'tr' => 'maps.languages.Turkish',
                'uk' => 'maps.languages.Ukrainian',
                'vi' => 'maps.languages.Vietnamese',
            ],
        ],
    ];
    
    public static function install()
    {
        app('API')->options->install(self::$options);
    }
    
    public static function uninstall()
    {
        app('API')->options->uninstall(self::$options);
    }
}
