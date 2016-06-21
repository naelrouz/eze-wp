<?php
/**
 * The main template file
 *
 */

get_header();
?>

<!-- site-navigation -->
<nav id="site-navigation" class="main-navigation" role="navigation">

    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

</nav>
<!-- /site-navigation -->

<main class="contents front-page" id="js-main">
    <section class="contents__above top-page" id="js-above">
        <div class="top-page__logo" id="js-top-logo">
            <p>
                <!--                    <img src="http://shokijoetaki.com/wordpress/wp-content/themes/shokijoetaki/assets/images/front-page/sj-logo-w.svg" alt="SHOKI JOETAKI"></p>-->
                <img src="<?php bloginfo('template_url'); ?>/img/Sign.png" alt=""></p>
        </div>

        <div class="top-page__btn" id="js-top-btn">
            <!--                <p><a href="http://shokijoetaki.com/entry-collections/41" style="font-size: 18px;" id="x-js-text">Welcome to my World Tango</a></p>-->
            <!--                <h3><a href="" style="font-size: 18px;" id="x-js-text">Welcome to my World Tango</a></h3>-->

        </div>
        <h3><a href="" style="font-size: 18px;" id="x-js-text">Welcome to my World Tango</a></h3>

        <div class="top-page__slide" id="js-top-slide">
            <div class="top-page__bg slides" style="background-image:url('<?php bloginfo('template_url'); ?>/img/IMG_5948.JPG');"></div>
            <!--                <div class="top-page__bg slides" style="background-image:url('img/slider/image3.jpeg');"></div>-->
            <!--                <div class="top-page__bg slides" style="background-image:url('img/slider/image4.jpeg');"></div>-->
        </div>
        <div class="top-page__bg--filter"></div>
        <!--            <div class="top-page__info ticker is-visible" id="js-ticker">-->
        <!--                <p class="ticker__inner slides"><a href="http://shokijoetaki.com/entry-news/195"><span>2016.03.09</span>DESIGN AWARDS ASIA.DOTM (Design Of The Month)を受賞</a></p>-->
        <!--                <p class="ticker__inner slides"><a href="http://shokijoetaki.com/entry-news/177"><span>2016.02.24</span>@FM愛知 出演　LOTUS WAY powered by でらSEARCH</a></p>-->
        <!--                <p class="ticker__inner slides"><a href="http://shokijoetaki.com/entry-news/171"><span>2016.02.17</span>CSS Design Awards.  Website Of The Day受賞</a></p>-->
        <!--                <p class="ticker__inner slides"><a href="http://shokijoetaki.com/entry-news/161"><span>2016.02.11</span>DesignAwards.Asia　DOTDを受賞</a></p>-->
        <!--                <p class="ticker__inner slides"><a href="http://shokijoetaki.com/entry-news/144"><span>2016.01.15</span>SHOKI JOETAKI オフィシャルサイト公開のお知らせ</a></p>-->
        <!--            </div>-->
    </section>
</main>

<div id="main" class="site-main">
    <div id="page" class="hfeed site">

<?php if(isNews){ ?>
<div id="primary" class="content-area">
    <div id="content" class="site-content archive" role="main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content-archive', get_post_format()); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
    </div><!-- #content -->

    <?php portfolio_paging_nav(); ?>
</div><!-- #primary -->

<?php } else { echo 't.i. index'; }?>

<?php get_footer(); ?>


<?php
// Page functions


?>
