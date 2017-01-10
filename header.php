<?php
/**
 * Seagul Theme Header
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
</head><!--/head-->
<body <?php body_class(); ?>>

<?php
    get_template_part('templates/section','nav');