!function () {
    'use strict';
    // Переключение табов по кнопке Далее
    $('.js_next').on('click', function () {
       var attrHref = $(this).attr('href');
        attrHref = attrHref.substr(1);
        $('.basket_tabs__navigation li a').each(function(){
            $(this).parent('li').removeClass('active');
            var attrId = $(this).attr('href');
            attrId = attrId.substr(1);
            if(attrId == attrHref){
                $(this).parent('li').addClass('active');
            };
        });
    })
    // slider rotation
	console.log($('.spritespin'));
    if ($('.spritespin').length) {
        $('.spritespin').spritespin({
            source: SpriteSpin.sourceArray('/img/rad_zoom_{frame}.jpg', { frame: [1,34], digits: 3 }),
            width: 370,
            height: 280,
            frames: 34,
            framesX: 6,
            sense: -2,
            renderer: 'image'
        });
    };
// Main slider
    if ($('.main_carousel').length) {
        $('.main_carousel').owlCarousel({
            loop:true,
            nav:false,
            items:1,
            autoPlay: true,
            autoplayTimeout:4000,
            autoplayHoverPause:true
        });
    };
// card carousel
    if ($('.card_carousel').length) {
        $('.card_carousel').owlCarousel({
            mouseDrag: false,
            loop:true,
            nav:false,
            items:1,
            animateOut: 'fadeOut',
            URLhashListener:true,
            autoplayHoverPause:true,
            dotsContainer: '.dotsContentCard'
        });
    };
// Magnific Popup

        var popupInline = $('.open-popup-inline');
        if (popupInline.length) {
            popupInline.magnificPopup({
                type:'inline',
                midClick: true,
                removalDelay: 300,
                callbacks: {
                    beforeOpen: function() {
                        this.st.mainClass = this.st.el.attr('data-effect');
                    }
                }
            });
        };
}();