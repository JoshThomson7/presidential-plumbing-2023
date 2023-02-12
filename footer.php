
    <footer role="contentinfo">
            
        <div class="footer__menus">
            <div class="max__width">
                <?php
                    while(have_rows('footer_menus', 'options')) : the_row();

                    $footer_menu = get_sub_field('footer_menu');
                ?>
                    <article class="footer__menu">
                        <?php if($footer_menu): ?>
                            <h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
                            <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
                        <?php endif; ?>
                    </article>

                <?php endwhile; ?>

            </div>

        </div><!-- footer__menus -->

        <div class="subfooter">
            <div class="max__width">

                <div class="subfooter--left">
                    <small>&copy; <?php bloginfo('name') ?> <?php echo date('Y'); ?></small>
                </div><!-- subfooter--left -->

                <div class="subfooter--right">
                    <small><a href="http://www.fl1.digital" target="_blank">Powered by FL1 Digital</a></small>
                </div><!-- subfooter--left -->

            </div><!-- max__width -->
        </div><!-- subfooter -->
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
