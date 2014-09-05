/*! Built with Grunt */
(function() {
    window.$zopim || function(d, s) {
        var z = $zopim = function(c) {
            z._.push(c);
        }, $ = z.s = d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function(o) {
            z.set._.push(o);
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "//v2.zopim.com/?1oo1bIxEgCw8dmVvKh3hJrir8EPWEgMm";
        z.t = +new Date();
        $.type = "text/javascript";
        e.parentNode.insertBefore($, e);
    }(document, "script");
    
    $(document).ready(function() {
        var iconBarWidths, tickerGo;
        tickerGo = function() {
            return $(".ticker").each(function() {
                var eh, i, num, _this = this;
                eh = $("> *:first-child", this).height();
                num = $(this).children().length;
                i = 1;
                return setInterval(function() {
                    if (i >= num) {
                        i = 0;
                    }
                    $("> *:first-child", _this).css("margin-top", i * eh * -1 + "px");
                    return i++;
                }, 3e3);
            });
        };
        iconBarWidths = function() {
            var icons, width;
            icons = $("#iconbar .icon");
            width = $(".container").width() / icons.length;
            return icons.css({
                width: Math.floor(width) + "px",
                display: "inline-block"
            });
        };
        $("a[href*=#]:not([href=#])").click(function(e) {
            var target, _this = this;
            if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    $("html,body").animate({
                        scrollTop: target.offset().top
                    }, 1e3, "swing", function() {
                        return window.location.hash = _this.hash;
                    });
                }
                e.preventDefault();
                return false;
            }
        });
        return $(window).on("resize", function() {
            tickerGo();
            return iconBarWidths();
        }());
    });
}).call(this);