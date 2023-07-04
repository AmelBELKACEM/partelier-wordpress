<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php get_bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Déclaration de notre font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Ma feuille de style pour mon blog -->
    <!-- <link rel="stylesheet" href="./css/blog.css"> -->
    <?php
    wp_head();
    ?>
    <title>A la dérive, le blog</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="navbar navbar-expand-md navbar-light">
            <!--
        Nous sommes en mobile first : par défaut notre menu est masqué !
        Je souhaite qu'il s'affiche au dela (= à partir de) d'une certainne largeur.
        navbar-expand-xxx permet d'afficher le menu en entier.
        xxx correspond à une taille (media-query) définie dans Bootstrap.
          sm => 576px
          md => 768px
          lg => 992px
          xl => 1200px
        -->
            <a class="navbar-brand" href="<?= home_url(); ?>">A la dérive</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                Menu <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Cette partie va automatique être masquée en version mobile -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                 <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">TeamBack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">TeamFront</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">Collaboration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">Ma Vie De Dev</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php //la navBar ne marche pas 
                // $menu = wp_nav_menu([
                //     'theme_location' => 'header', // le nom du menu declaré dans functions.php
                //     'container' => 'div', // la balise qui contient le menu
                //     'menu_class' => 'collapse navbar-collapse justify-content-end', // la classe souhaité dans la balise <ul>
                //     'echo' => false // 
                // ]);

                // $menu = str_replace('menu-item', 'nav-item', $menu);
                // $menu = str_replace('href', ' class="nav-link" href', $menu);
                // echo $menu;
                ?>
        <section class="text-center">
            <h1>A la dérive</h1>
            <hr />
            <p>
                Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
            </p>
        </section>
    </header>

    <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->

    <div class="container">
        <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
        <div class="row">

            <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->

<section class="text-center">
    <h1>A la dérive</h1>
    <hr />
    <p>
        Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
    </p>
</section>
</header>

<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">
          