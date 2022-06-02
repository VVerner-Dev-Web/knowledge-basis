<?php defined('ABSPATH') || exit('No direct script access allowed');

$assets = VVerner\Assets::getInstance();
$assets->registerCss('main');
$assets->registerCss('faqster');

$assets->registerJs('app'); 
$assets->registerJs('faqster'); 
$assets->localizeJs('app', [    
    'url'    => VVerner\AjaxAPI::getInstance()->getRequestUrl(),
    'cnonce' => wp_create_nonce('kb/comment/insert-like')
]); 






