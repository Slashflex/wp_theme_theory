<?php get_header(); ?>

<main>
    <section id="banner">
        <h1>Welcome to Theory</h1>
        <p>A free responsive HTML5 website template by David.</p>
    </section>
    <section class="row no-gutters justify-content-center">
        <?php query_posts('cat=4&orderby=date&order=ASC') ?>
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <article class="home-card col-12 col-md-4 col-lg-3 p-2">
                <div class="card-body">
                    <header>
                        <h4 class="card-title"><?php the_title() ?></h4>
                    </header>
                    <main>
                        <?php the_excerpt() ?>
                    </main>
                    <footer>
                        <a href="<?php the_permalink(); ?>" class="btn btn-info">More</a>
                    </footer>
                </div>
            </article>
        <?php endwhile; ?>
    </section>

    <section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>Ipsum Feugiat</h2>
                <p>Semper suscipit posuere apede</p>
            </header>
            <div class="flex flex-4">
                <?php query_posts('cat=3&posts_per_page=4&orderby=date&order=ASC') ?>
                <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <div class="box person">
                        <div class="image round">
                            <?php the_post_thumbnail('medium') ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content() ?>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>

    <section id="three" class="wrapper special">
        <div class="inner">
            <header class="align-center">
                <h2>Nunc Dignissim</h2>
                <p>Aliquam erat volutpat nam dui </p>
            </header>
            <div class="flex flex-2">
                <?php query_posts('cat=5&orderby=date&order=ASC') ?>
                <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <article>
                        <div class="image fit">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <header>
                            <h3><?php the_title(); ?></h3>
                        </header>
                        <?php the_content() ?>
                        <footer>
                            <a href="<?= bloginfo('url') . '/generic' ?>" class="button special">More</a>
                        </footer>
                    </article>
                <?php endwhile ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>