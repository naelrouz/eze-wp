<?php
/**
 * The template for displaying the footer
 *
 */

?>
</div><!-- #main -->
</div><!-- #page -->


<!--		--><?php //if (is_active_sidebar('bottom')) : ?>
<!--		<div id="gk-bottom" role="complementary">-->
<!--			<div class="widget-area">-->
<!--				--><?php //dynamic_sidebar('bottom'); ?>
<!--			</div>-->
<!--		</div>-->
<!--		--><?php //endif; ?>
<!--		-->
<!--		<div id="gk-social">-->
<!--			--><?php //wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu')); ?>
<!--		</div>-->

<?php
/**
 * The template for displaying the footer
 *
 */

?>
</div><!-- #main -->
</div><!-- #page -->


<?php
wp_footer();
?>


<!--Cool Black--><!--FOOTER-->
<footer class="footer" id="js-footer">
    <div class="footer__inner">
        <div class="footer__icons fa-2x">
            <div class="footer__share">
                <i class="fa fa-share-alt" aria-hidden="true"></i>

            </div>
            <div class="footer__sns icons">

<!--                --><?php //echo getSocialShareButton(); ?>

                <!--                <div class="icons__inner"><a href="#" target="_blank">-->
                <!--                        <i class="fa fa-vk" aria-hidden="true"></i>-->
                <!--                    </a></div>-->
                <!--                <div class="icons__inner"><a href="#" target="_blank">-->
                <!--                        <i class="fa fa-facebook" aria-hidden="true"></i>-->
                <!--                    </a></div>-->
                <!--                <div class="icons__inner"><a href="#" target="_blank">-->
                <!--                        <i class="fa fa-twitter" aria-hidden="true"></i>-->
                <!--                    </a></div>-->
            </div>
        </div>
        <div class="footer__menu">
            <p><a href="#">Blog</a></p>
            <p><a href="#">Media</a></p>
        </div>
    </div>
    <div class="footer__inner">
        <p class="footer__copy">&copy; Ezequiel Gomez</p>
    </div>
</footer>

</div>

<div class="menu-btn" id="js-menu-btn">
    <div class="menu-btn__inner" id="js-menu-btn-in">
        <span class="menu-btn--bar1"></span>
        <span class="menu-btn--bar2"></span>
    </div>
</div>

<div class="modal" id="js-modal">
    <div class="modal__inner">

        <?php echo getModalMenu(); ?>

        <div class="modal__sns icons fa-3x">
            <a href="#" target="_blank" class="icons__inner">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="#" target="_blank" class="icons__inner">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#" target="_blank" class="icons__inner">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>

<div class="page-change" id="js-page-change">
    <div class="page-loading" id="js-page-loading">LOADING</div>
</div>


<?php
    wp_footer();
?>

</body>
</html>
