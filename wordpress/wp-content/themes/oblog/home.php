<?php get_header(); ?>


        <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9">
            <?php if (have_posts()) : ?>
                <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
                <?php while ( have_posts() ) : the_post(); ?>
                <?php $categories = get_the_category(); ?>
                <article class="card">
                    <div class="card-body">
                        <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="infos">
                            Posté par <a href="#" class="card-link"><?php the_author(); ?></a> le <time><?= get_the_date() ?></time> dans  <?php foreach($categories as $category) : ?>
                            <a href="<?php the_permalink(); ?>" class="card-link">#<?php the_category(); ?></a>
                            <?php endforeach; ?>
                        </p>
                    </div>
                    </article>
                  <?php endwhile; ?>
                <?php else : ?>
                    <p>Aucune donnée à afficher</p>
                <?php endif ?>

                <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
                <nav aria-label="Page navigation example" class="avec-bonus">
                    <ul class="pagination justify-content-between">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </nav>

      
    <?php get_footer(); ?>