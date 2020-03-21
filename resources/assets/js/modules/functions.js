/**
 * JQuery functions
 */
$(function() {
    Global.init();
});

Global = {
    init: function() {
        Global.matchDivHeight();
        Global.lazyLoad();
    },
    matchDivHeight: function() {
        $('.match-height').matchHeight();
    },
    lazyLoad: function () {
        if ('loading' in HTMLImageElement.prototype) {
            //Native Lazy Loading Supported!
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(function(img) {
                img.src = img.dataset.src;
            })

        } else {
            // Not supported!
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js';
            document.body.appendChild(script);
        }
    },
};
