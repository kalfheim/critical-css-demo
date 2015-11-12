<?php

/**
 * Some of the following configuration options are the same as the ones you'll
 * find in the Critical npm package.
 *
 * @see https://github.com/addyosmani/critical  For more info.
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Routes (URIs) to generate critical-path CSS for.
    | If 'null' is specified, all 'GET' routes will be used automatically. Use
    | this option with caution.
    |
    | It is recommended that you specifically define the routes in an array.
    |
    | For 'static' routes with no parameters, simply add the route URI
    | verbatim.
    |
    | However, for routes containing parameters, add an item with both a key
    | and a value. The _key_ is an alias which is what you'll reference in
    | Blade. The _value_ is the URI to request HTML from (the route with the
    | parameters filled out.) Make sure the request won't 404.
    |
    */
    'routes' => [
        '/',
        'post' => 'post/1',
        'about',
        'contact',
    ],

    /*
    |--------------------------------------------------------------------------
    | CSS file(s)
    |--------------------------------------------------------------------------
    |
    | CSS files to extract from. (The application's main CSS file(s).)
    |
    | The file is relative to the public path, i.e., `public_path($css)`.
    |
    */
    'css' => ['css/app.css'],

    /*
    |--------------------------------------------------------------------------
    | Viewport
    |--------------------------------------------------------------------------
    |
    | Width and height of the target viewport.
    |
    */
    'width'  => 900,
    'height' => 1300,

    /*
    |--------------------------------------------------------------------------
    | Ingore Rules
    |--------------------------------------------------------------------------
    |
    | CSS rules to ignore. See filter-css for usage examples. You will also
    | find some commented-out examples below.
    | @see https://github.com/bezoerb/filter-css
    |
    */
    'ignore' => [],

    /*
    |--------------------------------------------------------------------------
    | Storage Path
    |--------------------------------------------------------------------------
    |
    | The directory which the generated critical-path CSS is stored.
    |
    */
    'storage' => 'critical-css',

    /*
    |--------------------------------------------------------------------------
    | Pretend Mode
    |--------------------------------------------------------------------------
    |
    | When this option is enabled, no critical-path will be inlined. This
    | is very useful during development, as you don't want the inlined styles
    | interfering after you've updated your main stylesheets.
    |
    | Remember to run `php artisan view:clear` after re-disabling this.
    |
    */
    'pretend' => env('CRITICALCSS_PRETEND', false),

    /*
    |--------------------------------------------------------------------------
    | Blade Directive
    |--------------------------------------------------------------------------
    |
    | Enable this to get access to the `@criticalCss($uri)` Blade directive.
    | This is the recommended behavior for Laravel 5.1 and newer.
    | If your app is running on Laravel 5.0, this must be disabled.
    |
    */
    'blade_directive' => true,

    /*
    |--------------------------------------------------------------------------
    | Critical Path
    |--------------------------------------------------------------------------
    |
    | Path to the Critical executable. If you have installed Critical in the
    | project only, the default should be used. However, if Critical is
    | installed globally, you may simply use 'critical'.
    |
    */
    'critical_bin' => base_path('node_modules/.bin/critical'),

];
