!function(t){"use strict";t(window).on("load",function(){t("#preloader").delay(700).fadeOut(500).addClass("loaded")});var o=t(".header_wrap").height()-65;t("a.page-scroll").on("click",function(a){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var n=t(this.hash),s=t(this).data("speed")||800;(n=n.length?n:t("[name="+this.hash.slice(1)+"]")).length&&(a.preventDefault(),t("html, body").animate({scrollTop:n.offset().top-o},s))}}),t(window).on("load resize ready",function(){t(".header_wrap.fixed-top").css({"padding-top":t(".alertbox").height()})}),t(".alertbox .close").on("click",function(){t(".header_wrap ").css({"padding-top":"0"})}),t(function(){t(".header_wrap").hasClass("fixed-top")&&t(".alertbox").addClass("alert_fixed")}),t(window).on("scroll",function(){80<=t(window).scrollTop()?(t("header").addClass("nav-fixed"),t(".alert_fixed").addClass("fixed")):(t("header").removeClass("nav-fixed"),t(".alert_fixed").removeClass("fixed"))}),t(document).ready(function(){t(".dropdown-menu a.dropdown-toggler").on("click",function(a){t(this),t(this).offsetParent(".dropdown-menu");return t(this).next().hasClass("show")||t(this).parents(".dropdown-menu").first().find(".show").removeClass("show"),t(this).next(".dropdown-menu").toggleClass("show"),t(this).parent("li").toggleClass("show"),t(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown",function(a){t(".dropdown-menu .show").removeClass("show")}),!1})});var s=t(".header_wrap"),a=s.find(".navbar-collapse ul li a.page-scroll");t.each(a,function(a,n){t(this).on("click",function(){s.find(".navbar-collapse").collapse("hide"),t("header").removeClass("active")})}),t(".navbar-toggler").on("click",function(){t("header").toggleClass("active")}),t(window).on("load resize ready",function(){function a(a,n){var s=void 0;return t(a.attr("class").split(" ")).each(function(){-1<this.indexOf(n)&&(s=this)}),s}t(".header_wrap").each(function(){var n=a(t(this),"bg_")||a(t(this),"bg-");t(".header_wrap").hasClass(n)&&Array.prototype.forEach.call(document.querySelectorAll(".dropdown-menu"),function(a){a.classList.add(n)}),t(window).width()<=992&&t(".navbar-nav").addClass(n)})}),t(".countdown_time").each(function(){var a=t(this).data("time");t(this).countdown(a,function(a){t(this).html(a.strftime('<span class="countdown_box"><span class="countdown days">%D </span><span class="cd_text">Days</span></span><span class="countdown_box"><span class="countdown hours">%H</span><span class="cd_text">Hours</span></span><span class="countdown_box"><span class="countdown minutes">%M</span><span class="cd_text">Minutes</span></span><span class="countdown_box"><span class="countdown seconds">%S</span><span class="cd_text">Seconds</span></span>'))})}),t(window).scroll(function(){150<t(this).scrollTop()?t(".scrollup").fadeIn():t(".scrollup").fadeOut()}),t(".scrollup").on("click",function(a){return a.preventDefault(),t("html, body").animate({scrollTop:0},600),!1}),t(function(){function a(a,o){a.each(function(){var a=t(this),n=a.attr("data-animation"),s=a.attr("data-animation-delay");a.css({"-webkit-animation-delay":s,"-moz-animation-delay":s,"animation-delay":s,opacity:0}),(o||a).waypoint(function(){a.addClass("animated").css("opacity","1"),a.addClass("animated").addClass(n)},{triggerOnce:!0,offset:"90%"})})}a(t(".animation")),a(t(".staggered-animation"),t(".staggered-animation-wrap"))}),t(".background_bg").each(function(){var a=t(this).attr("data-img-src");void 0!==a&&!1!==a&&(t(this).css("background-image","url("+a+")"),t(this).css("background-position","center center"),t(this).css("background-size","cover"))})}(jQuery);