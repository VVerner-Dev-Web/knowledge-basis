<?php defined('ABSPATH') || exit('No direct script access allowed');

// POST TYPES
// ========================================
$cpt = new VVerner\PostType('Gerenciamento', 'Gerenciamento', 'management');
$cpt->setIcon('dashicons-edit');
$cpt->setSupports(['title', 'thumbnail', 'excerpt' ,'editor', 'comments']);
$cpt->setPublic(true);
$cpt->register();

// TAXONOMIES
// ========================================
$tax = new VVerner\Taxonomy('Categoria', 'Categorias', 'management-cat');
$tax->setPostType('management');
$tax->setPublic(false);
$tax->register();
