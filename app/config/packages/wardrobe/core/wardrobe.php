<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Themes Directory
    |--------------------------------------------------------------------------
    |
    | Set this to the directory where your themes will be located in your public
    | folder.
    |
    */
    'theme_dir' => 'themes',

    /*
    |--------------------------------------------------------------------------
    | Image Uploads Directory
    |--------------------------------------------------------------------------
    |
    | Set this to the directory where your images will be located in your public
    | folder.
    |
    */
    'image_dir' => 'images',

    /*
    |--------------------------------------------------------------------------
    | Image Resize
    |--------------------------------------------------------------------------
    |
    | If enabled, images will be resized automatically to fit within the
    | specified width/height (pixels) when uploaded.
    |
    */
    'image_resize' => array(
        'enabled'       => false,
        'width'         => '600',
        'height'        => '600',
    ),

    /*
    |--------------------------------------------------------------------------
    | 404 Handling
    |--------------------------------------------------------------------------
    |
    | Set this to true if you want wardrobe to handle your 404 errors
    | gracefully.
    |
    */
    'handles_404' => false,

    /*
    |--------------------------------------------------------------------------
    | Active Theme
    |--------------------------------------------------------------------------
    |
    | Set this to the directory of the theme you want active. No slashes.
    |
    */
    'theme' => 'anodyne',

    /*
    |--------------------------------------------------------------------------
    | Site Title
    |--------------------------------------------------------------------------
    |
    | Set this to your sites title
    |
    */
    'title' => 'Anodyne News',

    /*
    |--------------------------------------------------------------------------
    | Posts per page
    |--------------------------------------------------------------------------
    |
    | Set this to the number of posts you want per page.
    |
    */
    'per_page' => 5,

    /*
    |--------------------------------------------------------------------------
    | Installed
    |--------------------------------------------------------------------------
    |
    | This sets a flag so that it can only be installed once.
    |
    */
    'installed' => false,

	/*
	|--------------------------------------------------------------------------
	| Enable Cache
	|--------------------------------------------------------------------------
	|
	| Set this to true to enable caching. If true it will then use the
	| default laravel cache setup.
	|
	*/
	'cache' => null,

    /*
    |--------------------------------------------------------------------------
    | In Framework
    |--------------------------------------------------------------------------
    |
    | Checks if this is installed in wardrobe/wardrobe
    |
    */
    'in_framework' => false,

    /*
    |--------------------------------------------------------------------------
    | Other View Directories
    |--------------------------------------------------------------------------
    |
    | Any other view directories you may want loaded for Wardrobe to work
    |
    */
    'view_dirs' => array(),
);
