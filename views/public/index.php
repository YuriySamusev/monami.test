<?php

/* @var $this yii\web\View */

$this->title = 'Test landing page';
?>
<div class="wrapper wrapper_main">
    <header class="header header_main-page">
        <div class="container-fluid header__inner">
            <div class="row">
                <div class="header__logo"><a href="/" class="logo"><img src="/img/logo.png" alt="" class="logo__img"/></a></div>
                <div class="header__nav">
                    <nav id="main-menu_1" class="main-menu">
                        <div class="main-menu__btn">
                            <button type="button" role="button" class="lines-button x2"><span class="lines"></span></button>
                        </div>
                        <div class="main-menu__toggle">
                            <div class="main-menu__toggle-close"><span><i class="fa fa-times"></i></span></div>
                            <ul class="main-menu__list main-menu__list_mobile">
                                <?
                                $menuList = '';
                                foreach($dynamicBlocs as $element) {
                                    if ($element['sectionName'] == 'first')
                                        $menuList .= '<li class="main-menu__item active">';
                                    else
                                        $menuList .= '<li class="main-menu__item">';
                                    $menuList .= '<a href="#' . $element['sectionName'] . '" class="main-menu__link main-menu__link_hash">' . $element['name'] . '</a></li>';
                                }
                                $menuList .= '<li class="main-menu__item"><a href="#' . $lastSectionName . '" class="main-menu__link main-menu__link_hash">Contacts</a></li>';
                                echo $menuList;
                                ?>
                            </ul>
                        </div>
                        <ul class="main-menu__list">
                            <?= $menuList ?>
                        </ul>
                    </nav>
                </div>
                <div class="header__right">
                    <div class="header__langs">
                        <div id="lang-select_1" class="lang-select">
                            <div class="lang-select__item"><a class="lang-select__link">En</a></div>
                            <ul tabindex="1" class="lang-list">
                                <li class="lang-list__item"><a href="" class="lang-select__link">Ua</a></li>
                                <li class="lang-list__item"><a href="" class="lang-select__link">Ru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__button"><a href="#<?= $lastSectionName ?>" class="btn btn_grad"><span>Contact us</span></a></div>
                </div>
            </div>
        </div>
    </header>

<section class="main-block">
    <div class="container">
        <div class="row">
            <div class="main-block__text">
                <h1>BE PHARMA</h1>
                <h2>Trading, marketing, consulting LTD</h2>
            </div>
        </div>
    </div>
</section>
<?php foreach($dynamicBlocs as $element): ?>
<section data-section="<?= $element['sectionName'] ?>" class="section about">
    <div class="container">
        <div class="row">
            <div class="about__title">
                <h1 class="title"><?= $element['title'] ?></h1>
            </div>
            <div class="about__text">
                <?= $element['text'] ?>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>

<section data-section= "<?= $lastSectionName ?>" class="section contact">
    <div class="container">
        <div class="row">
            <div class="contact__title">
                <h1 class="title"><span>CONTACTS</span></h1>
            </div>
        </div>
        <div class="row contact__row-bg">
            <div class="contact__form-wrap">
                <h2 class="title title_contact">Get in touch <span>with us</span></h2>
                <form id="reccall-form_1" method="GET" action="#" name="form-reccal" class="g-form g-form_reccall">
                    <input type="hidden"/>
                    <div class="g-form__group"><span class="g-form__input">
                    <div class="form-group field-enquiry-email required">
                      <input type="text" name="conperson" placeholder="Name" class="input input_text input_g-form"/>
                      <div class="help-block">dsdadasdasd</div>
                    </div></span></div>
                    <div class="g-form__group g-form__group_dib"><span class="g-form__input">
                    <div class="form-group field-enquiry-email required">
                      <input type="text" name="mail" placeholder="Email" class="input input_text input_g-form"/>
                      <div class="help-block">dsdadasdasd</div>
                    </div></span></div>
                    <div class="g-form__group g-form__group_dib"><span class="g-form__input">
                    <div class="form-group field-enquiry-email required">
                      <input type="text" name="tel" placeholder="Phone number" class="input input_text input_g-form"/>
                      <div class="help-block">dsdadasdasd</div>
                    </div></span></div>
                    <div class="g-form__group"><span class="g-form__input">
                    <div class="form-group field-enquiry-email required">
                      <textarea rows="4" name="message" placeholder="Message" class="input input_textarea input_g-form"></textarea>
                      <div class="help-block">dsdadasdasd</div>
                    </div></span></div>
                    <div class="g-form__button">
                        <button type="submit" value="Send" class="btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="contact__info-wrap">
                <h2 class="title title_contact">Contact information</h2>
                <div class="contact__info">
                    <p>BE Pharma, trading, marketing, consulting Ltd.</p>
                    <ul class="contact-list">
                        <li class="contact-list__item"><span class="contact-list__item-icon"><i class="fa fa-map-marker"></i></span><span class="contact-list__item-text">Brdnikova ulica 44,  1000 Ljubljana,  SLOVENIA</span></li>
                    </ul>
                </div>
                <div class="contact__info">
                    <p>Miran Jablanovec</p>
                    <ul class="contact-list">
                        <li class="contact-list__item"><span class="contact-list__item-icon"><i class="fa fa-envelope"></i></span><span class="contact-list__item-text">E-mail:  mjmiran.jablanovec@gmail.com</span></li>
                        <li class="contact-list__item"><span class="contact-list__item-icon"><i class="fa fa-phone"></i></span><span class="contact-list__item-text">Mobile: 00 386 41 772 456</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>