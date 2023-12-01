$(document).ready(function() {
    $("#slider").bxSlider({
        auto: true,
        randomStart: true,
        moveSlides: 1,
        minSlides: 1,
        maxSlides: 1,
        slideWidth: 250,
        slideMargin: 10,
        pager: true,
        pagerCustom: '#pager',
        pause: 3000,
        onSliderLoad: function(currentIndex) {
            var currentSlide = $("#slider li").eq(currentIndex);
            var caption = currentSlide.find('.caption').text();
            var pagerIcon = currentSlide.find('.pager-icon').html();
            $("#pager").html(caption + '<br>' + pagerIcon);
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex) {
            var caption = $slideElement.find('.caption').text();
            var pagerIcon = $slideElement.find('.pager-icon').html();
            $("#pager").html(caption + '<br>' + pagerIcon);
        }
    });
});
