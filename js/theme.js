(function($){

    $(function(){

        // fit footer
        (function(main, meta, fn){

            if (!main.length) return;

            fn = function() {

                main.css('min-height','');

                meta = document.body.getBoundingClientRect();

                if (meta.height < window.innerHeight) {
                    main.css('min-height', (main.outerHeight() + (window.innerHeight - meta.height))+'px');
                }

                return fn;
            };

            UIkit.$win.on('load resize', fn());

        })($('#tm-main'));

        // 'tm-headerbar-overlay' scroll event trigger
        var header = $('.tm-headerbar-overlay');


        $(document).on('scrolling.uk.document', function(){
            header[window.scrollY > 100 ? 'addClass':'removeClass']('tm-navbar-open');
        });

    });

})(jQuery);
