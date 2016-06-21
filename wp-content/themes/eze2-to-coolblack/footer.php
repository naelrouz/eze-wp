<?php
/**
 * The template for displaying the footer
 *
 */

?>
</div><!-- #main -->
</div><!-- #page -->



<?php wp_footer(); ?>

<!--Cool Black--><!--FOOTER-->
<footer class="footer" id="js-footer">
    <div class="footer__inner">
        <div class="footer__icons">
            <div class="footer__share">
                <svg class="icons--share">
                    <use xlink:href="#shareIcon"/>
                </svg>
            </div>
            <div class="footer__sns icons">
                <div class="icons__inner"><a href="#" target="_blank">
                        <svg class="icons--twitter">
                            <use xlink:href="#twitterIcon"/>
                        </svg>
                    </a></div>
                <div class="icons__inner"><a href="#" target="_blank">
                        <svg class="icons--facebook">
                            <use xlink:href="#facebookIcon"/>
                        </svg>
                    </a></div>
                <div class="icons__inner"><a href="#" target="_blank">
                        <svg class="icons--instagram">
                            <use xlink:href="#instagramIcon"/>
                        </svg>
                    </a></div>
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
<!--        <ul class="modal__list" id="js-modal-li">-->
<!--            <li><a href="index.php"><span>Home</span></a></li>-->
<!--            <li class="cur"><a href="news.php""><span>News</span></a></li>-->
<!--            <li><a href="biography.php"><span>Biography</span></a></li>-->
<!--            <li><a href="video.php"><span>Video</span></a></li>-->
<!--            <li><a href="photo.php"><span>Photo</span></a></li>-->
<!--            <li><a href="#"><span>Blog</span></a></li>-->
<!--            <li><a href="#"><span>Media</span></a></li>-->
<!--            <li><a href="contacts.php"><span>Contact</span></a></li>-->
<!--        </ul>-->


        <?php echo getModalMenu();?>


        <div class="modal__sns icons">
            <a href="#" target="_blank" class="icons__inner">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="#" target="_blank" class="icons__inner">
                <svg class="icons--facebook">
                    <use xlink:href="#facebookIcon"/>
                </svg>
            </a>
            <a href="#" target="_blank" class="icons__inner">
                <svg class="icons--instagram">
                    <use xlink:href="#instagramIcon"/>
                </svg>
            </a>
        </div>





    </div>
</div>

<div class="page-change" id="js-page-change">
    <div class="page-loading" id="js-page-loading">LOADING</div>
</div>


</body>
</html>


<?php

function getModalMenu()
{
    $menu_name = 'modal_menu';

    $menu_items = wp_get_nav_menu_items($menu_name); // получаем элементы меню
    //var_dump($menu_item);

    // создаем список
    $menu_list = '<ul class="modal__list" id="js-modal-li">';

    foreach ((array)$menu_items as $key => $menu_item) {
        $menu_list .= '<li><a href="' . $menu_item->url . '"><span>' . $menu_item->title . '</span></a></li>';
    }

    $menu_list .= '</ul>';

    return $menu_list;
}

?>
