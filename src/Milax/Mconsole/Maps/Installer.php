<?php

namespace Milax\Mconsole\Maps;

use Milax\Mconsole\Contracts\Modules\ModuleInstaller;

class Installer implements ModuleInstaller
{
    protected static $options = [
        [
            'group' => 'mconsole::maps.options.group.name',
            'label' => 'mconsole::maps.options.language',
            'key' => 'map_picker_language',
            'value' => 'en',
            'type' => 'select',
            'options' => [
                'ar' => 'mconsole::maps.languages.Arabic',
                'eu' => 'mconsole::maps.languages.Basque',
                'eu' => 'mconsole::maps.languages.Basque',
                'bn' => 'mconsole::maps.languages.Bengali',
                'bg' => 'mconsole::maps.languages.Bulgarian',
                'ca' => 'mconsole::maps.languages.Catalan',
                'hr' => 'mconsole::maps.languages.Croatian',
                'cs' => 'mconsole::maps.languages.Czech',
                'da' => 'mconsole::maps.languages.Danish',
                'nl' => 'mconsole::maps.languages.Dutch',
                'en' => 'mconsole::maps.languages.English',
                'fa' => 'mconsole::maps.languages.Farsi',
                'fil' => 'mconsole::maps.languages.Filipino',
                'fi' => 'mconsole::maps.languages.Finnish',
                'fr' => 'mconsole::maps.languages.French',
                'gl' => 'mconsole::maps.languages.Galician',
                'de' => 'mconsole::maps.languages.German',
                'el' => 'mconsole::maps.languages.Greek',
                'gu' => 'mconsole::maps.languages.Gujarati',
                'iw' => 'mconsole::maps.languages.Hebrew',
                'hi' => 'mconsole::maps.languages.Hindi',
                'hu' => 'mconsole::maps.languages.Hungarian',
                'id' => 'mconsole::maps.languages.Indonesian',
                'it' => 'mconsole::maps.languages.Italian',
                'ja' => 'mconsole::maps.languages.Japanese',
                'kn' => 'mconsole::maps.languages.Kannada',
                'ko' => 'mconsole::maps.languages.Korean',
                'lv' => 'mconsole::maps.languages.Latvian',
                'lt' => 'mconsole::maps.languages.Lithuanian',
                'ml' => 'mconsole::maps.languages.Malayalam',
                'mr' => 'mconsole::maps.languages.Marathi',
                'no' => 'mconsole::maps.languages.Norwegian',
                'pl' => 'mconsole::maps.languages.Polish',
                'pt' => 'mconsole::maps.languages.Portuguese',
                'ro' => 'mconsole::maps.languages.Romanian',
                'ru' => 'mconsole::maps.languages.Russian',
                'sr' => 'mconsole::maps.languages.Serbian',
                'sk' => 'mconsole::maps.languages.Slovak',
                'sl' => 'mconsole::maps.languages.Slovenian',
                'es' => 'mconsole::maps.languages.Spanish',
                'sv' => 'mconsole::maps.languages.Swedish',
                'tl' => 'mconsole::maps.languages.Tagalog',
                'ta' => 'mconsole::maps.languages.Tamil',
                'te' => 'mconsole::maps.languages.Telugu',
                'th' => 'mconsole::maps.languages.Thai',
                'tr' => 'mconsole::maps.languages.Turkish',
                'uk' => 'mconsole::maps.languages.Ukrainian',
                'vi' => 'mconsole::maps.languages.Vietnamese',
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
