/**
 * Created by MinhMan.Tran on 3/4/2016.
 */
var STAG = (function(){
    'use strict';
    var method = {
        showNoticePopup: function(){
            'use strict';
            $.magnificPopup.open({
                items: {
                    src: $('#noticePopup')
                },
                type: 'inline',

                fixedContentPos: true,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $(document).on('click', '.button--close', function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });
        },
        windowWidthHeight: function(){
            var heightWindow = document.documentElement.clientHeight;
            var widthWindow = document.documentElement.clientWidth;
            var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
            if (iOS) {
                var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
                heightWindow = window.innerHeight * zoomLevel;
                widthWindow = window.innerWidth * zoomLevel;
            }
            return {width: widthWindow, height: heightWindow};
        },

        init: function () {
            method.windowWidthHeight();
        }
    };
    return {
        init: method.init,
        showNoticePopup: method.showNoticePopup
    }
})();


$(function(){
    'use strict';
    STAG.init();
});