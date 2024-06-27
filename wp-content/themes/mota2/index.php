<?php get_header(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathalie Mota2</title>
</head>

<body>
    <h1>Coucou</h1>
    <div class="imgfront">
        <img src="/mota2/wp-content/uploads/2024/06/nathalie-11.webp">
    </div>
    <?php the_field('catégories'); ?>
    <?php the_field('formats'); ?>
    <h2>Dans la page index.php</h2>
</body>

</html>


<?php get_footer(); ?>