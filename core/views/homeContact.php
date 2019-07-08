<?php
$ln = Lang::current();

$crb_phones = carbon_get_theme_option("crb_phones");
$crb_email = carbon_get_theme_option("crb_email");
$crb_work_time = carbon_get_theme_option("crb_work_time");
?>
<div class="about">
    <div class="contacts">
        <div class="contacts__slide">
            <div class="contacts__slide-content">
                <span class="contacts__title"><?= Lang::get("контакты") ?></span>
                <span class="contacts__description"></span>
                <div class="contacts__call-contact">
                    <div class="contacts__call-contact-phone">
                        <?php foreach ($crb_phones as $crb_phone) :
                            $phone = $crb_phone["phone"];
                            ?>
                            <div class="contacts__call-contact-phone-item">
                                <img class="contacts__call-contact-phone-image" alt="A1" title=""
                                     src="/wp-content/themes/octillion/src/icons/a1.ed696b.svg" />
                                <a class="contacts__call-contact-phone-link" href="tel:<?=$phone?>"><?=$phone?></a>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="contacts__call-contact-email">
                        <div class="contacts__call-contact-phone-item">
                            <img class="contacts__call-contact-phone-image"
                                 src="/wp-content/themes/octillion/src/icons/email.425ec9.svg" alt="A1" title=""/>
                            <a class="contacts__call-contact-phone-link" href="mailto:<?=$crb_email?>"><?=$crb_email?></a>
                        </div>
                    </div>
                    <div class="contacts__call-contact-clock">
                        <div class="contacts__call-contact-phone-item">
                            <img class="contacts__call-contact-phone-image"
                                 src="/wp-content/themes/octillion/src/icons/clock.fcaab1.svg" alt="A1" title=""/>
                            <a class="contacts__call-contact-phone-link"><?= $crb_work_time?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts__image" style="background-image:url(/wp-content/themes/octillion/src/icons/slider.963cb9.png)">
            </div>
        </div>
    </div>
</div>