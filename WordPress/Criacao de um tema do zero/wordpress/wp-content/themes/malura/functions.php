<?php

add_theme_support( 'post-thumbnails' );

function cadastrando_post_type_imoveis() {

    $nomeSingular = 'Imóvel';
    $nomePlural = 'Imóveis';
    $description = 'Imóveis da Imobiliária Malura';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => $supports
    );


    register_post_type( 'imovel', $args);    
}

add_action('init', 'cadastrando_post_type_imoveis');