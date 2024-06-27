<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php endwhile;
endif; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathalie Mota2</title>
</head>

<body>
    <h1>Coucou de la page.php</h1>
    <div class="imgfront">
        <img src="/mota2/wp-content/uploads/2024/06/nathalie-11.webp">
    </div>
    <?php the_field('catégories'); ?>
    <?php the_field('formats'); ?>

    <form><label for="photo-select">
            <Choose a photo></Choose>
        </label>
        <section>
            <select name="galerie" id="photo-select">
                <option value="">
                    <--Catégories->
                <option value="reception">Réception</option>
                <option value="television">Télévision</option>
                <option value="concert">Concert</option>
                <option value="mariage">Mariage</option>
                <input type="submit" value="envoyer">
    </form>
    <form><label for="photo-select">
            <Choose a photo></Choose>
        </label>
        <section>
            <select name="format" id="format-select">
                <option value="">
                    <--Formats->
                <option value="portrait">Portrait</option>
                <option value="paysage">paysage</option>
                <input type="submit" value="envoyer">
    </form>

    <h2>Nous sommes dans la page.php</h2>

    <section class="galerie">
        <div class="galerieLeft">
            <img src="wp-content/uploads/2024/06/nathalie-0.webp">
            <img src="wp-content/uploads/2024/06/nathalie-1.webp">
            <img src="wp-content/uploads/2024/06/nathalie-2.webp">
            <img src="wp-content/uploads/2024/06/nathalie-3.webp">
        </div>
        <div class="galerieRight">
            <img src="wp-content/uploads/2024/06/nathalie-4.webp">
            <img src="wp-content/uploads/2024/06/nathalie-5.webp">
            <img src="wp-content/uploads/2024/06/nathalie-6.webp">
            <img src="wp-content/uploads/2024/06/nathalie-7.webp">
        </div>

        </div>
    </section>
    <div class="dropdown">
        <button class="dropdown-button">Catégories</button>
        <div class="dropdown-content">
            <a href="#">Réception</a>
            <a href="#">Télévision</a>
            <a href="#">Concert</a>
            <a href="#">Mariage</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropdown-button">Formats</button>
        <div class="dropdown-content">
            <a href="#">portrait</a>
            <a href="#">paysage</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropdown-button">Trier par</button>
        <div class="dropdown-content">
            <a href="#">plus récentes</a>
            <a href="#">plus anciennes</a>
        </div>
    </div>
</body>

</html>
<?php get_footer(); ?>