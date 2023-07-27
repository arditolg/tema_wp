<?php
// Adiciona suporte a logo personalizado
add_theme_support('custom-logo');

// Registra o menu de navegação
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Menu Principal'),
        )
    );
}
add_action('init', 'register_my_menus');
