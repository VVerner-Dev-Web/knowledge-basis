<?php defined('ABSPATH') || exit('No direct script access allowed');

// POST TYPES
// ========================================
$cpt = new VVerner\PostType('Desenvolvimento', 'Desenvolvimento', 'development');
$cpt->setIcon('dashicons-desktop');
$cpt->setSupports(['title', 'thumbnail', 'excerpt' ,'content']);
$cpt->setPublic(true);
$cpt->register();
