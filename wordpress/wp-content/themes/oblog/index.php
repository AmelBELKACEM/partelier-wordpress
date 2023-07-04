<?php get_header(); ?>

        <main class="col-lg-9">
        <?php if ( have_posts() ) : ?>
            <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
            <?php while ( have_posts() ) : the_post(); ?>
            <article class="card">
                <div class="card-body">
                    <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <p class="infos">
                        Posté par <a href="#" class="card-link"><?php the_author(); ?></a> le <time><?= get_the_date() ?></time> dans <a href="category.html" class="card-link">#<?php the_category(); ?></a>
                    </p>
                </div>
                </article>
                <?php endwhile; ?>
                <?php else: ?>
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