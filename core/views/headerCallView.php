<?php
$crb_vk_link = carbon_get_theme_option("crb_vk_link");
$crb_insta_link = carbon_get_theme_option("crb_insta_link");
$crb_fb_link = carbon_get_theme_option("crb_fb_link");
$crb_linked_in_link = carbon_get_theme_option("crb_linked_in_link");
$crb_telegram_link = carbon_get_theme_option("crb_telegram_link");
$crb_viber_link = carbon_get_theme_option("crb_viber_link");
$crb_whatsup_link = carbon_get_theme_option("crb_whatsup_link");
$crb_phones = carbon_get_theme_option("crb_phones");
$crb_email = carbon_get_theme_option("crb_email");
$crb_work_time = carbon_get_theme_option("crb_work_time");


?>
<div class="header__call">
    <img class="header__call-image"
         src="/wp-content/themes/octillion/src/icons/call.e04308.svg" alt="Call"
         title=""/>
    <div class="header__call-content">
        <div class="header__call-social">
            <a class="header__call-social-link" href="https://t.me/<?=$crb_telegram_link?>">
                <img
                    class="header__call-social-image"
                    src="/wp-content/themes/octillion/src/icons/telegram.c935f1.png" alt="Telegram"
                    title=""/></a>
            <a class="header__call-social-link" href="viber://chat?number=<?=$crb_viber_link?>">
                <img
                    class="header__call-social-image"
                    src="/wp-content/themes/octillion/src/icons/viber.581c25.png" alt="Viber"
                    title=""/></a>
            <a class="header__call-social-link" href="https://wa.me/<?=$crb_whatsup_link?>">
                <img
                    class="header__call-social-image"
                    src="/wp-content/themes/octillion/src/icons/whatsup.90680a.png" alt="WhatsUp"
                    title=""/>
            </a>
        </div>
        <div class="header__call-contact">
            <div class="header__call-contact-phone">
                <?php foreach ($crb_phones as $crb_phone) :
                    $phone = $crb_phone["phone"];
                    ?>
                    <div class="header__call-contact-phone-item">
                        <img
                            class="header__call-contact-phone-image"
                            src="/wp-content/themes/octillion/src/icons/a1.ff9425.png" alt="A1"
                            title=""/>
                        <a class="header__call-contact-phone-link" href="tel:<?=$phone?>"><?=$phone?></a>
                    </div>
                <?php endforeach;?>

            </div>
            <div class="header__call-contact-email">
                <div class="header__call-contact-phone-item">
                    <img
                        class="header__call-contact-phone-image"
                        src="/wp-content/themes/octillion/src/icons/email.7a8f02.png" alt="A1"
                        title=""/>
                    <a class="header__call-contact-phone-link" href="mailto:<?=$crb_email?>"><?=$crb_email?></a>
                </div>
            </div>
            <div class="header__call-contact-clock">
                <div class="header__call-contact-phone-item">
                    <img
                        class="header__call-contact-phone-image"
                        src="/wp-content/themes/octillion/src/icons/clock.f6b0af.png" alt="A1"
                        title=""/>
                    <a class="header__call-contact-phone-link"><?= $crb_work_time?></a>
                </div>
            </div>
        </div>
    </div>
</div>