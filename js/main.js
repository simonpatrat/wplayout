// Main javascript file for wplayout theme

(function($) {

    $(document).on('click', '.post-change-layout-buttons .btn', function() {
        var nbColumns = $(this).data('columns');

        //console.log(nbColumns);
        //console.log($('.column-size')[1].classList);


        if ($('.column-size').hasClass('col-xs-12') && nbColumns == 6) {
            $('.column-size').removeClass('col-xs-12 col-sm-12 col-md-12')
                             .addClass('col-xs-6 col-sm-6 col-md-6');

        } else if ($('.column-size').hasClass('col-md-6') && nbColumns == 6){
            return;
        } else {
            $('.column-size').removeClass('col-xs-6 col-sm-6 col-md-6')
                .addClass('col-xs-12 col-sm-12 col-md-12');
        }
    });

})(jQuery);