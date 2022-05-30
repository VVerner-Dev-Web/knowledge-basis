<?php defined('ABSPATH') || exit('No direct script access allowed');

$assets = VVerner\Assets::getInstance();
$assets->registerCss('main');
$assets->registerCss('faqster');

$assets->registerJs('app'); 
$assets->registerJs('faqster'); 
$assets->localizeJs('app', [
    'sec'    => VVerner\AjaxAPI::getInstance()->getGlobalNonce(),
    'action' => VVerner\AjaxAPI::getInstance()->getGlobalAction(),
    'url'    => VVerner\AjaxAPI::getInstance()->getRequestUrl()
]); 






