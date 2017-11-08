<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ромашка");
$APPLICATION->SetPageProperty('bodyId', $APPLICATION->GetCurPage(true));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>
<div class="g-wrapper">
    <main>
        <section class="g-main">
            <div class="g-main_i ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mt_8">
                            <ul class="list_reser fz_18">
                                <li><a target="_blank" class="mb_1 i_block" href="index.php">Главная страница</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="catalog/catalog.php">Каталог</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="card/card.php">Карточка товара</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="card/card_rose.php">Карточка товара (розы)</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="card/card_text.php">Карточка товара (текст)</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="basket/basket.php">Корзина</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="wish/wish.php">Избранное</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="orders/my_orders.php">Личный кабинет</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="text_pages/text_page.php">Текстовая страница</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="contacts/contacts.php">Контакты</a></li>
                                <li><a target="_blank" class="mb_1 i_block" href="404.php">404</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>