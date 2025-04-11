<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nom de l'application
    |--------------------------------------------------------------------------
    |
    | Cette valeur est le nom de votre application, qui sera utilisé lorsque le
    | framework doit placer le nom de l'application dans une notification ou
    | d'autres éléments UI où le nom de l'application doit être affiché.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Environnement de l'application
    |--------------------------------------------------------------------------
    |
    | Cette valeur détermine l'« environnement » dans lequel votre application
    | s'exécute actuellement. Cela peut déterminer comment vous préférez
    | configurer divers services que l'application utilise. Définissez cela
    | dans votre fichier ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | 9-Mode débogage de l'application
    |--------------------------------------------------------------------------
    |
    | Lorsque votre application est en mode débogage, des messages d'erreur
    | détaillés avec des traces de pile seront affichés à chaque erreur qui
    | se produit dans votre application. Si désactivé, une simple page d'erreur
    | générique est affichée.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de l'application
    |--------------------------------------------------------------------------
    |
    | Cette URL est utilisée par la console pour générer correctement des URLs
    | lors de l'utilisation de l'outil en ligne de commande Artisan. Vous devez
    | définir cela à la racine de l'application afin qu'elle soit disponible
    | dans les commandes Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | 6-Fuseau horaire de l'application
    |--------------------------------------------------------------------------
    |
    | 7-Ici, vous pouvez spécifier le fuseau horaire par défaut pour votre
    | application, qui sera utilisé par les fonctions de date et de date-heure
    | de PHP. Le fuseau horaire est défini par défaut sur "UTC" car il est
    | approprié pour la plupart des cas d'utilisation.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | 8-Configuration de la locale de l'application
    |--------------------------------------------------------------------------
    |
    | La locale de l'application détermine la locale par défaut qui sera utilisée
    | par les méthodes de traduction / localisation de Laravel. Cette option peut
    | être définie sur n'importe quelle locale pour laquelle vous prévoyez d'avoir
    | des chaînes de traduction.
    |
    */

    'locale' => env('APP_LOCALE', 'fr'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'fr'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | 9-Clé de chiffrement
    |--------------------------------------------------------------------------
    |
    | Cette clé est utilisée par les services de chiffrement de Laravel et doit
    | être définie sur une chaîne aléatoire de 32 caractères pour garantir que
    | toutes les valeurs chiffrées sont sécurisées. Vous devez le faire avant
    | de déployer l'application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | 5-Pilote du mode maintenance
    |--------------------------------------------------------------------------
    |
    | Ces options de configuration déterminent le pilote utilisé pour déterminer et
    | gérer l'état du « mode maintenance » de Laravel. Le pilote "cache"
    | permettra de contrôler le mode maintenance sur plusieurs machines.
    |
    | Pilotes pris en charge : "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];