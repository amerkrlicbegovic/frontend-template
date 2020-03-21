require('./js/bootstrap');
require('./js/vendor/jquery.fitvids.js');
require('./js/vendor/jquery.matchHeight.js');

$(function() {
    App.init();
});

App = {
    init: function() {
        App.matchDivHeight();
        App.lazyLoad();
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
