<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="card_in_basket" data-effect="mfp-zoom-in" class="mfp-with-anim white-popup mfp-hide clearfix">
    <div class="popup_header">
        <div class="title_line_horizontal title_line_decor">
            <span>Товар добавлен в корзину</span>
        </div>
    </div>
    <div class="col-xs-offset-1 col-xs-10 popup_wrap text_center">
        <div class="text_center">
            <div class="mb_1">
                <img class="mg-popup-img" src="/img/no-foto.jpg" alt="img">
            </div>
            <div class="card_preview__lnk mb_2">
                Односторонний букет
            </div>
        </div>

        <a href="#" class="btn btn-primary" id="done-buy" onclick="$.magnificPopup.close();">Продолжить покупки</a>
        <a href="/basket/" class="btn btn-primary">Оформить заказ</a>
    </div>
</div>