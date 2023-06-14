<?php 
//Oculta a barra de navegação na página wordpress
add_filter('show_admin_bar', '__return_false');

// Ativar suporte a thumbnails
add_theme_support('post-thumbnails');
?>