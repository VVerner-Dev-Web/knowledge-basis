<?php defined('ABSPATH') || exit('No direct script access allowed');

// POST TYPES
// ========================================
$cpt = new VVerner\PostType('Desenvolvimento', 'Desenvolvimento', 'development');
$cpt->setIcon('dashicons-desktop');
$cpt->setSupports(['title', 'thumbnail', 'excerpt' ,'editor', 'comments']);
$cpt->setPublic(true);
$cpt->register();

// TAXONOMIES
// ========================================
$tax = new VVerner\Taxonomy('Categoria', 'Categorias', 'development-cat');
$tax->setPostType('development');
$tax->setPublic(false);
$tax->register();
