</main>

<aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <div class="avec-bonus input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
        </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
    <div class="card">
    <?php $categories = get_categories(); ?>
        <h3 class="card-header">Catégories</h3>
        <ul class="list-group list-group-flush">
            <?php foreach ($categories as $category) : ?>
                <li class="list-group-item"><a href="category.html"><?= $category->name; ?></a></li>

            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
    <div class="card">
    
        <h3 class="card-header">Auteurs</h3>
        
        <ul class="list-group list-group-flush">
        <!-- <?php //$authors = wp_list_authors(); //wp_list_authors($echo='false'; exclude_admin='true'?>
        <?php //foreach ($authors as $author) : ?>
            <li class="list-group-item"><?php// $author->display_name; ?></li>
            <?php// endforeach; ?> -->
            <li class="list-group-item">Maxime</li>
            <li class="list-group-item">Anthony</li>
            <li class="list-group-item">Alexandre</li>
            <li class="list-group-item">Dario</li>
            <li class="list-group-item">Julie</li>
            <li class="list-group-item">Lucie</li>
            <li class="list-group-item">Xavier</li>
          </ul>
        </ul>
    </div>

</aside>
</div><!-- /.row -->
<footer>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-6 social-networks">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-github-square"></i></a></li>
    </ul>
  </div>
</div>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-9 links">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
    <?php

$menu = wp_nav_menu([
    'theme_location' => 'footer', // le nom du menu declaré dans functions.php
    'container' => 'div', // la balise qui contient le menu
    'menu_class' => 'list-inline', // la classe souhaité dans la balise <ul>
    'echo' => false // 
]);

$menu = str_replace('href', ' class="list-inline-item" href', $menu);echo $menu;
?>
      <!-- <li class="list-inline-item"><a href="contact.html">Nous contacter</a></li>
      <li class="list-inline-item"><a href="qui-sommes-nous.html">Qui sommes nous ?</a></li>
      <li class="list-inline-item"><a href="mentions-legales.html">Mentions légales</a></li> -->
    </ul>
  </div>
</div>

</footer>

</div> <!-- /.container -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
crossorigin="anonymous"></script>
<?php
    wp_footer();
    ?>
</body>

</html>