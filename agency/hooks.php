<?php

/**
 * Register content blocks.
 * We have commented each new line so that it is easier for you to understand what is happening
 */
register_content_block(array(
    'menu_select_block'  =>  array(                                 // Unique name. You can also prefix it with eg: your theme's name
        'name'  =>  'menu_select_block',                            // The same here.
        'title' =>  Lang::get('agency::strings.menu'),              // The title that will be shown in the block manager
        'tpl'   =>  array(                                          // Available templates for displaying the menu
            'agency::blocks/topmenu'=>'Main',
            'agency::blocks/links'=>'Links',
        ),
        'model'  =>  '\Menu',                                       //Where to pull from.
        'action'    => 'find',                                      // Which method of the above model to call
        'params'    => 1,                                           // The param for the find method above. This will call \Menu::find(1)
        'params_action'=>'lists',                                   // The method to call while editing this block through the block manager
        'params_args'   => array('title','id'),                     // The params for the above method. This will call \Menu::lists(array('title','id'))
        'multiple'  =>  true,                                       // Can this block be placed more than once in the same layout?
        'configurable'=> true                                       // Can this block be configured?
    ),
    'header_block'  =>  array(
        'name'  =>  'header_block',
        'title' =>  t('agency::strings.header'),
        'tpl'   =>  array(
            'agency::blocks/header'=>'default'
        ),
        'model' => '\Widget',
        'action' => 'getblockdata',
        'params'    => array('title'=>'Custom block','subtitle'=>'This is a configurable text','url'=>'http://www.google.com','button'=>'click here'),
        'params_tpl'=>  'agency::blocks/param_tpls/header',         // This template will be loaded in the block manager configure modal to provide means of editing the above params
        'multiple'  =>  false,
        'configurable'=> true
    ),
    'logo_block'  =>  array(
        'name'  =>  'logo_block',
        'title' =>  t('agency::strings.logo'),
        'tpl'   =>  array(
            'agency::blocks/logo'=>'default'
        ),
        'multiple'  =>  true,
        'configurable'=> false
    ),
    'socials_block'  =>  array(
        'name'  =>  'socials_block',
        'title' =>  t('agency::strings.social'),
        'tpl'   =>  array(
            'agency::blocks/social'=>'default'
        ),
        'multiple'  =>  true,
        'configurable'=> false
    ),
    'copyright_block'  =>  array(
        'name'  =>  'copyright_block',
        'title' =>  t('agency::strings.copyright'),
        'tpl'   =>  array(
            'agency::blocks/copyright'=>'Copyright'
        ),
        'multiple'  =>  true,
        'configurable'=> false
    ),

));