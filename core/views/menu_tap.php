<?php
    $vk =carbon_get_theme_option('crb_vk_link');
    $insta =carbon_get_theme_option('crb_insta_link');
    $fb =carbon_get_theme_option('crb_fb_link');
    $linkedIn =carbon_get_theme_option('crb_linked_in_link');
?>
<div class="menu tap">
    <div class="container">
        <div class="menu__menu">
            <div class="container">
                <?php mainMenu(); ?>
                <ul class="menu__menu-soc">
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($fb)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/fb.ffeb10.svg" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($linkedIn)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/in.578229.svg" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?= esc_url($vk)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/vk.dd8ca6.svg" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($insta)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/inst.d2033d.svg" alt="A1" title=""/>
                        </a>
                    </li>
                </ul>
                <?php get_template_part("/core/views/langAsideMobileView")?>
            </div>
        </div>
    </div>
</div>