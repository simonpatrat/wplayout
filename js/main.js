// Main javascript file for wplayout theme

(function($) {


    $(window).on('load', function() {
        setHeights('.column-size .thumbnail');
    });

    $(document).on('click', '.post-change-layout-buttons .btn', function() {
        var nbColumns = $(this).data('columns');

        //console.log(nbColumns);
        //console.log($('.column-size')[1].classList);


        if ($('.column-size').hasClass('col-md-12') && nbColumns == 6) {
            $('.column-size').removeClass('col-sm-12 col-md-12')
                             .addClass('col-sm-6 col-md-6');
            setHeights('.column-size .thumbnail');

        } else if ($('.column-size').hasClass('col-md-6') && nbColumns == 6){
            return;

        } else {
            $('.column-size').removeClass('col-sm-6 col-md-6')
                .addClass('col-sm-12 col-md-12');
            $('.column-size .thumbnail').css('height', 'auto');
        }
    });

    function setHeights(elementsToSet) {
        var maxHeight = 0;

        $(elementsToSet).each(function(){
            if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
        });

        $(elementsToSet).css('height', maxHeight + 'px');
    }

})(jQuery);